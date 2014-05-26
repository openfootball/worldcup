<html lang="en" dir="ltr" class="client-js ve-not-available">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
	//@author: fchristysen
	//@date	: May 23rd 2014
	//This .php file will parse squad data from html page to football.db format file
	//HOW TO USE
	//1. Download the required page(http://en.wikipedia.org/wiki/2014_FIFA_World_Cup_squads) name it as "source.htm"
	//2. place it in the same folder with this .php file
	//3. Run the page(on web server of course, e.g. Apache), then the 32 national team squad file will be generated
	$list=array(
		array('ar-argentina','argentina'),array('au-australia','australia')
		,array('ba-bosnia-herzegovina','bosnia and herzegovina'),array('be-belgium','belgium')
		,array('br-brazil','brazil'),array('ch-switzerland','switzerland')
		,array('ci-cote-d-ivoire','ivoire'),array('cl-chile','chile')
		,array('cm-cameroon','cameroon'),array('co-colombia','colombia')
		,array('cr-costa-rica','costa rica'),array('de-deutschland','germany')
		,array('dz-algeria','algeria'),array('ec-ecuador','ecuador')
		,array('en-england','england'),array('es-espana','spain')
		,array('fr-france','france'),array('gh-ghana','ghana')
		,array('gr-greece','greece'),array('hn-honduras','honduras')
		,array('hr-croatia','croatia'),array('ir-iran','iran')
		,array('it-italy','italy'),array('jp-japan','japan')
		,array('kr-south-korea','south korea'),array('mx-mexico','mexico')
		,array('ng-nigeria','nigeria'),array('nl-netherlands','netherlands')
		,array('pt-portugal','portugal'),array('ru-russia','russia')
		,array('us-united-states','united states'),array('uy-uruguay','uruguay')
		);
	
	$source='source.htm';
	$html = file_get_contents($source);
	$doc=new DOMDocument();
	@$doc->loadHTML($html);
	$finder = new DomXPath($doc);	
	$countries = $finder->query("/html/body/div/div/div/h3");
	for($i=0;$i<sizeof($list);$i++){
		$searchfor = $list[$i][1];		
		$index=-1;
		for($j=0; $j<$countries->length;$j++){
			//workaround for cote d'ivoire
			if(strcmp($searchfor, "ivoire")==0 && strpos(strtolower($countries->item($j)->nodeValue),$searchfor) == true){
				$index=$j;
				break;
			}else if(strcmp(strtolower($countries->item($j)->nodeValue), $searchfor)==0){
				$index=$j;
				break;
			}
		}
		if($index==-1){
			echo "<b>Failed to parse ".$searchfor."</b><br>";
			continue;
		}
		$file = fopen($list[$i][0].'.txt',"w");
		
		//Parse data
		$w_country = $countries->item($index)->nodeValue;
		$data = $finder->query("/html/body/div/div/div/p");
		$w_manager=substr($data->item(6+2*$index)->nodeValue, 9);
		
		$data = $finder->query("/html/body/div/div/div/table/tbody/tr/td/table");
		$table = $data->item($index);
		//$players is <tbody> consist of <tr> for each player
		$players = $finder->query("tbody/tr",$table);
		$player_count = $players->length;
		$w_players = array();
		for($k=0;$k<$player_count;$k++){
			if(strcmp($players->item($k)->childNodes->item(2)->nodeValue,"1GK")==0){
				$w_players[$k][0] = "gk";
			}else if(strcmp($players->item($k)->childNodes->item(2)->nodeValue,"2DF")==0){
				$w_players[$k][0] = "df";
			}else if(strcmp($players->item($k)->childNodes->item(2)->nodeValue,"3MF")==0){
				$w_players[$k][0] = "mf";
			}else if(strcmp($players->item($k)->childNodes->item(2)->nodeValue,"4FW")==0){
				$w_players[$k][0] = "fw";
			}
			$cols = $finder->query("td",$players->item($k));
			$w_players[$k][1] = stringify_player($cols); 
		}
		
		//output parsed data
		//Header
		echoln_file($file, "####################");
		echoln_file($file, "# ".$w_country);
		echoln_file($file, "# ");
		echoln_file($file, "# Coaching Staff");
		echoln_file($file, "# - Head Coach: ".$w_manager);
		echoln_file($file, "");	
		echoln_file($file, "");	
		
		echoln_file($file, "####################");
		echoln_file($file, "# Goal Keepers");
		echoln_file($file, "");
		for($k=0;$k<$player_count;$k++){
			if(strcmp($w_players[$k][0],"gk")==0)
				echoln_file($file, $w_players[$k][1]);
		}
		echoln_file($file, "");	
		
		echoln_file($file, "####################");
		echoln_file($file, "# Defenders");
		echoln_file($file, "");
		for($k=0;$k<$player_count;$k++){
			if(strcmp($w_players[$k][0],"df")==0)
				echoln_file($file, $w_players[$k][1]);
		}
		echoln_file($file, "");	
		
		echoln_file($file, "####################");
		echoln_file($file, "# Midfielders");
		echoln_file($file, "");
		for($k=0;$k<$player_count;$k++){
			if(strcmp($w_players[$k][0],"mf")==0)
				echoln_file($file, $w_players[$k][1]);
		}
		echoln_file($file, "");	
		
		echoln_file($file, "####################");
		echoln_file($file, "# Forwards");
		echoln_file($file, "");
		for($k=0;$k<$player_count;$k++){
			if(strcmp($w_players[$k][0],"fw")==0)
				echoln_file($file, $w_players[$k][1]);
		}
		fclose($file);
		echo "Generate : ".$list[$i][0].'.txt'." success<br>";
	}
	
	//$cols:DOMNodeList of player; return string represent player
	function stringify_player($cols){
		$r="";
		$name = $cols->item(2)->nodeValue;
		$name = trim($name);
		//$name can contain '(Captain)', remove
		$name = str_replace("(Captain)", "", $name);
		$name = str_replace("(captain)", "", $name);
		//$birthfull = explode(" ",substr($cols->item(3)->nodeValue,12));
		//$birth = $birthfull[0]." ".$birthfull[1]." ".$birthfull[2];
		$club = $cols->item(5)->nodeValue;
		$r = $name.getSpace(30,$name)."##".$club;
		return $r;
	}
	
	//$c_prov:provided space, $text:occupying text
	function getSpace($c_prov, $text){
		$r="";
		$req = $c_prov - mb_strlen($text,'utf8');
		if($req<0)	$req=0;
		for($i=0;$i<$req;$i++)	$r.=" ";
		return $r;
	}
	
	function echo_file($file, $text){
		fwrite($file,$text);
	}
	function echoln_file($file, $text){
		fwrite($file,$text.PHP_EOL);
	}
	
?>

</body>
</html>
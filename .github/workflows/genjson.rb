##
## note - to test on local machine try:
##   $ ruby .github/workflows/genjson.rb   (in /worldcup)


## use (uploaded/published) gems (only)

require 'sportdb/parser'
require 'sportdb/quick'


## SportDb::MatchParser.debug = true
## SportDb::MatchParser.debug = true
## SportDb::QuickMatchReader.debug = true

SportDb::MatchParser.debug = false
SportDb::QuickMatchReader.debug = false


def parse_matches( *infiles, indir: '.' )
    last_name = nil
    matches = []

    infiles.each do |infile|
      inpath = File.join( indir, infile )

      puts "==> reading #{inpath}..."
      txt = read_text( inpath )

      quick = SportDb::QuickMatchReader.new( txt )
      more_matches = quick.parse
      name         = quick.league_name   ## quick hack - get league+season via league_name

      if quick.errors?
        puts "!! #{quick.errors.size} parse error(s) in #{inpath}:"
        pp quick.errors
        exit 1
      end

      if last_name && name != last_name
         puts "!! ERROR - league names do NOT match; cannot merge/concat - sorry"
         puts "   #{last_name} != #{name}"
         exit 1
      end

      last_name = name
      matches  += more_matches
    end

    puts
    puts "  try json for matches:"

    data = { 'name'    => last_name,
             'matches' => matches.map {|match| match.as_json }}
    data
end



def genjson( config, outdir: '.',
                     indir:  '.' )

  config.each do |outfile, infiles|

    data = parse_matches( *infiles, indir: indir )

    outpath = File.join( outdir, outfile )

    ## hack - use pretty_inspect for json pretty print
    txtjson =  data.pretty_inspect
    txtjson = txtjson.gsub( '=>', ': ' )
    puts txtjson[0,100] + "..."
    ## double check for syntax errors
    json = JSON.parse( txtjson )

##
## try alternate pretty print
##   puts JSON.pretty_generate( data, object_nl: "\n", array_nl: "\n", indent: 2)

    write_text( outpath, txtjson )
    # write_json( outpath, data )
  end
end




puts
puts "work_dir:"

root_dir = Dir.pwd
pp root_dir
#=> "/home/runner/work/worldcup/worldcup" ???

indir  =  root_dir

config_2026 = [
  ['2026/worldcup.json',  ['2026--usa/cup.txt',   '2026--usa/cup_finals.txt']],
]

outdir = "#{root_dir}/openfootball/worldcup.json"
## outdir = './tmp'


genjson( config_2026,  indir: indir, outdir: outdir )


puts "bye"

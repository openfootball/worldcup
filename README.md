# World Cup

## What's `football.db`?

A free open public domain football database & schema
for use in any (programming) language - with (structured) text datasets using the (future-proof and evergreen) Football.TXT format.
More [`football.db` Project Site »](http://openfootball.github.io)

## Intro

Free open public domain football data for the World Cup (e.g. Canada/United States/Mexico 2026, Qatar 2022, Russia 2018, Brazil 2014, etc.)
and the World Cup Quali(fiers). Football.TXT example:

```
= World Cup 2022

Group A  | Qatar      Ecuador        Senegal        Netherlands
Group B  | England    Iran           United States  Wales
Group C  | Argentina  Saudi Arabia   Mexico         Poland
Group D  | France     Australia      Denmark        Tunisia
Group E  | Spain     Costa Rica      Germany        Japan
Group F  | Belgium    Canada   Morocco    Croatia
Group G  | Brazil    Serbia  Switzerland   Cameroon
Group H  | Portugal   Ghana   Uruguay    South Korea

▪ Group A
Sun Nov 20
  19:00      Qatar   v Ecuador  0-2 (0-2)    @ Al Bayt Stadium, Al Khor
               (Enner Valencia 16'(p), 31')
Mon Nov 21
  19:00     Senegal  v Netherlands   0-2 (0-0)   @ Al Thumama Stadium, Doha
               (Cody Gakpo 84', Davy Klaassen 90'+9)

...

▪ Match for third place
Sat Dec 17
  18:00     Croatia  v Morocco    2-1 (2-1)  @ Khalifa International Stadium, Al Rayyan
              (Joško Gvardiol 7', Mislav Oršić 42'; Achraf Dari 9')
▪ Final
Sun Dec 18
  18:00     Argentina  v France   3-3 a.e.t. (2-2, 2-0) 4-2 pen.  @ Lusail Iconic Stadium, Lusail
              (Lionel Messi 23'(p), 108', Ángel Di María 36';
               Kylian Mbappé 80'(p), 81', 118'(p))
```


or



```
= World Cup 2018

Group A  |  Russia       Saudi Arabia         Egypt          Uruguay
Group B  |  Portugal     Spain                Morocco        Iran
Group C  |  France       Australia            Peru           Denmark
Group D  |  Argentina    Iceland              Croatia        Nigeria
Group E  |  Brazil       Switzerland          Costa Rica     Serbia
Group F  |  Germany      Mexico               Sweden         South Korea
Group G  |  Belgium      Panama               Tunisia        England
Group H  |  Poland       Senegal              Colombia       Japan


▪ Group A
Thu Jun 14
  18:00 UTC+3   Russia        v Saudi Arabia  5-0 (2-0)     @ Luzhniki Stadium, Moscow
                  (Gazinsky 12' Cheryshev 43', 90+1' Dzyuba 71' Golovin 90+4')
Fri Jun 15
  17:00 UTC+5   Egypt         v Uruguay  0-1 (0-0)          @ Ekaterinburg Arena, Ekaterinburg 
                  (Giménez 89')
...

▪ Match for third place
Sat Jul 14
  17:00 UTC+3   Belgium    v England  2-0 (1-0)        @ Saint Petersburg Stadium, St. Petersburg 
                  (Thomas Meunier 4' Eden Hazard 82')
▪ Final
Sun Jul 15
   18:00 UTC+3   France     v Croatia  4-2 (2-1)       @ Luzhniki Stadium, Moscow 
                  (Mandžukić 18'(og) Griezmann 38'(p) Pogba 59' Mbappé 65';
                   Perišić 28' Mandžukić 69')
```

or

```
= World Cup 2014

Group A  |  Brazil       Croatia              Mexico         Cameroon
Group B  |  Spain        Netherlands          Chile          Australia
Group C  |  Colombia     Greece               Côte d'Ivoire  Japan
Group D  |  Uruguay      Costa Rica           England        Italy
Group E  |  Switzerland  Ecuador              France         Honduras
Group F  |  Argentina    Bosnia-Herzegovina   Iran           Nigeria
Group G  |  Germany      Portugal             Ghana          United States
Group H  |  Belgium      Algeria              Russia         South Korea


▪ Group A
Thu Jun 12
  17:00 UTC-3   Brazil   v Croatia  3-1 (1-1)       @ Arena de São Paulo, São Paulo 
                 (Neymar 29', 71'(p) Oscar 90+1';  Marcelo 11'(og))
Fri Jun 13
  13:00 UTC-3   Mexico   v Cameroon  1-0 (0-0)      @ Estádio das Dunas, Natal 
                 (Peralta 61')

...

▪ Match for third place
Sat Jul 12
  17:00 UTC-3  Brazil   v Netherlands  0-3 (0-2)    @ Estádio Nacional Mané Garrincha, Brasília
                (Robin Van Persie 3'(p) Daley Blind 17' Georginio Wijnaldum 90+1')
▪ Final
Sun Jul 13
  16:00 UTC-3  Germany   v Argentina   1-0 a.e.t. (0-0)   @ Estádio do Maracanã, Rio de Janeiro 
                 (Mario Götze 113')

```




## Build Your Own `worldcup.db` Copy

Use the `sportdb` command line tool to build your own `worldcup.db` copy
from the datasets in (structured) text in the Football.TXT format.

### Alternative I - Use the Quick Starter Templates

Use the quick starter datafile templates to start from scratch. Examples:

Build the database for all world cups:

    $ sportdb new worldcup

[More »](https://github.com/openfootball/quick-starter)



### Alternative II - Do-It-Yourself (DIY) - Downlad and Unpack Zip Archive or Git Clone

Download and unpack the zip archive with the datasets or if you have git installed use the `git clone` command to
get a local copy.

Try in your working folder (that is, `/world-cup`):

```
$ sportdb build
$ sportdb --verbose build     # or for more (verbose) details incl. debug info
```

This will

- setup a new single-file SQLite database e.g. `./sport.db` and
- read in all datasets in plain text (`.txt`)

That's it.



---

NOTE - For an alternative world cup dataset using the Football.TXT format that incl. lineups, subs, sent offs, and more, 
see [openfootball/worldcup.more](https://github.com/openfootball/worldcup.more).



## Questions? Comments?

Yes, you can. More than welcome.
See [Help & Support »](https://github.com/openfootball/help)

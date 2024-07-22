# World Cup

## What's `football.db`?

A free open public domain football database & schema
for use in any (programming) language e.g. uses datasets in (structured) text in the football.txt format.
More [`football.db` Project Site »](http://openfootball.github.io)

## Intro

Free open public domain football data for the World Cup (e.g. Qatar 2022, Russia 2018, Brazil 2014, etc.)
and the World Cup Quali(fiers). Example:

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


Matchday 1  |  Sun Nov/20
Matchday 2  |  Mon Nov/21
Matchday 3  |  Tue Nov/22

...

Group A

(1) Sun Nov/20 19:00      Qatar  0-2 (0-2)  Ecuador    @ Al Bayt Stadium, Al Khor
                              [-; Enner Valencia 16' (pen.), 31']
(2) Mon Nov/21 19:00     Senegal  0-2 (0-0)  Netherlands  @ Al Thumama Stadium, Doha
                              [-; Cody Gakpo 84' Davy Klaassen 90+9']


...
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


Matchday 1  |  Thu Jun/14
Matchday 2  |  Fri Jun/15
Matchday 3  |  Sat Jun/16

...

Group A

 (1) Thu Jun/14 18:00   Russia        5-0 (2-0)  Saudi Arabia     @ Luzhniki Stadium, Moscow (UTC+3)
                          [Gazinsky 12' Cheryshev 43', 90+1' Dzyuba 71' Golovin 90+4']
 (2) Fri Jun/15 17:00   Egypt         0-1 (0-0)  Uruguay          @ Ekaterinburg Arena, Ekaterinburg (UTC+5)
                          [Giménez 89']
...

Match for third place

(63) Sat Jul/14  17:00   Belgium    2-0 (1-0)  England      @ Saint Petersburg Stadium, St. Petersburg (UTC+3)
                           [Thomas Meunier 4' Eden Hazard 82']

Final

(64) Sun Jul/15  18:00   France     4-2 (2-1)   Croatia     @ Luzhniki Stadium, Moscow (UTC+3)
                   [Mandžukić 18' (o.g.) Griezmann 38' (pen.) Pogba 59' Mbappé 65'; Perišić 28' Mandžukić 69']

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


Matchday 1  |  Thu Jun/12
Matchday 2  |  Fri Jun/13
Matchday 3  |  Sat Jun/14

...

Group A

(1) Thu Jun/12 17:00   Brazil   3-1 (1-1)  Croatia       @ Arena de São Paulo, São Paulo (UTC-3)
                         [Neymar 29', 71' (pen.) Oscar 90+1';  Marcelo 11' (o.g.)]
(2) Fri Jun/13 13:00   Mexico   1-0 (0-0)  Cameroon      @ Estádio das Dunas, Natal (UTC-3)
                         [Peralta 61']

...

Match for third place

(63) Sat Jul/12 17:00   Brazil  0-3 (0-2)  Netherlands   @ Estádio Nacional Mané Garrincha, Brasília (UTC-3)
                         [Robin Van Persie 3' (pen.) Daley Blind 17' Georginio Wijnaldum 90+1']

Final

(64) Sun Jul/13 16:00   Germany  1-0 a.e.t. (0-0, 0-0)  Argentina   @ Estádio do Maracanã, Rio de Janeiro (UTC-3)
                          [Mario Götze 113']

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



## Questions? Comments?

Yes, you can. More than welcome.
See [Help & Support »](https://github.com/openfootball/help)

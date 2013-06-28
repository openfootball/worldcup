# World Cup

## What's `football.db`?

A free open public domain football (soccer) database & schema
for use in any (programming) language
(e.g. uses plain text fixtures/data sets).
More [`football.db` Project Site »](http://openfootball.github.io)

## Intro

Free open public domain football data for World Cup (e.g. Brazil 2014), World Cup Quali,
Confederations Cup (e.g. Brazil 2013) including all national teams. Example:

~~~
### National Teams

esp, Spain,       ESP, es
ita, Italy,       ITA, it

arg, Argentina,   ARG, ar
bra, Brazil,      BRA, br
...
~~~

~~~
## World Cup 2010 South Africa

(17) Quarterfinals

(57) Fr   2010-07-02 16:00   Netherlands - Brazil   2-1
(58) Fr   2010-07-02 20:30   Uruguay     - Ghana    1-1 1-1nV 4-2iE
(59) Sa   2010-07-03 16:00   Argentina   - Germany  0-4
(60) Sa   2010-07-03 20:30   Paraguay    - Spain    0-1
...
~~~


## Build Your Own `football.db` Copy

To build your own `football.db` copy from the plain text fixtures
use the sportdb command line tool. Example:

Step 1:  Get a copy of the `world.db` fixtures

    $ git clone git://github.com/geraldb/world.db.git

Step 2:  Get a copy the `world` fixtures

    $ git clone git://github.com/openfootball/world.git

Step 3:  Let's build the `football.db`

    $ sportdb setup --include ./world --worldinclude ./world.db

That's it. For more
see the [`sportdb` command line tool project](https://github.com/geraldb/sport.db.ruby).


## Links

### Web Admin App

Try the `football.db` Web Admin app running on Heroku
[`footballdb.herokuapp.com`](http://footballdb.herokuapp.com).


### World Cup

every four years (next in 2014 in Brazil and 2018 in Russia)

- Official - [`www.fifa.com/worldcup`](http://www.fifa.com/worldcup)

__World Cup 2010 South Africa__

- 32 teams
- 64 matches
- 31 days (11 June - 11 July 2010)

__World Cup 2014 Brazil__

- 32 teams
- 64 matches
- 32 days (12 June - 13 July 2014)


#### Wikipedia

- [2010_FIFA_World_Cup](http://en.wikipedia.org/wiki/2010_FIFA_World_Cup)
- [2014_FIFA_World_Cup](http://en.wikipedia.org/wiki/2014_FIFA_World_Cup)
- [2018_FIFA_World_Cup](http://en.wikipedia.org/wiki/2018_FIFA_World_Cup)

---

- [Fußball-Weltmeisterschaft_2010 (de)](http://de.wikipedia.org/wiki/Fußball-Weltmeisterschaft_2010)
- [Fußball-Weltmeisterschaft_2014 (de)](http://de.wikipedia.org/wiki/Fußball-Weltmeisterschaft_2014)
- [Fußball-Weltmeisterschaft_2018 (de)](http://de.wikipedia.org/wiki/Fußball-Weltmeisterschaft_2018)


### World Cup Qualifications

#### Wikipedia

- [2014_FIFA_World_Cup_qualification](http://en.wikipedia.org/wiki/2014_FIFA_World_Cup_qualification)
 

__America__

North/Central America & Caribbean Islands

- [2014_FIFA_World_Cup_qualification_(CONCACAF)](http://en.wikipedia.org/wiki/2014_FIFA_World_Cup_qualification_(CONCACAF))
- [2014_FIFA_World_Cup_qualification_–_CONCACAF_Fourth_Round](http://en.wikipedia.org/wiki/2014_FIFA_World_Cup_qualification_–_CONCACAF_Fourth_Round) - Hexagonal


__Europe__

- [2014_FIFA_World_Cup_qualification_–_UEFA_Group_C](http://en.wikipedia.org/wiki/2014_FIFA_World_Cup_qualification_–_UEFA_Group_C) - Group C
- [2014_FIFA_World_Cup_qualification_–_UEFA_Group_I](http://en.wikipedia.org/wiki/2014_FIFA_World_Cup_qualification_–_UEFA_Group_I) - Group I


### Confederations Cup

every four years (next in 2013 in Brazil and 2017 in Russia)

- Official - [`www.fifa.com/confederationscup`](http://www.fifa.com/confederationscup)

__Confederations Cup 2009 South Africa__

- Official - [`www.fifa.com/tournaments/archive/confederationscup/southafrica2009`](http://www.fifa.com/tournaments/archive/confederationscup/southafrica2009)
- Dates:  14 June - 28 June 2009
- Teams:  8 (from 6 confederations)
- Matches: 16

__Confederations Cup 2013 Brasil__ 

- Dates:   15 June - 30 June 2013
- Teams:   8 (from 6 confederations)
- Matches: 16


#### Wikipedia

- [2009_FIFA_Confederations_Cup](http://en.wikipedia.org/wiki/2009_FIFA_Confederations_Cup)
- [2013_FIFA_Confederations_Cup](http://en.wikipedia.org/wiki/2013_FIFA_Confederations_Cup)




## Questions? Comments?

Send them along to the
[Open Sports & Friends Forum/Mailing List](http://groups.google.com/group/opensport).
Thanks!


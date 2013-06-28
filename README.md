# World Cup

## What's `football.db`?

A free open public domain football (soccer) database & schema
for use in any (programming) language
(e.g. uses plain text fixtures/data sets).
More [`football.db` Project Site »](http://openfootball.github.io)

## Intro

Free open public domain football data for England / Europe. Events include:


Free open public domain football data for World Cup (e.g. Brazil 2014), World Cup Quali,
Confederations Cup (Brazil 2013) including all national teams. Example:

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


### Confederations Cup

every four years (next in 2013 in Brazil and 2017 in Russia)

#### FIFA Confederations Cup 2009 - South Africa

- official - [www.fifa.com/tournaments/archive/confederationscup/southafrica2009](http://www.fifa.com/tournaments/archive/confederationscup/southafrica2009)
- Dates:  14 June - 28 June
- Teams:  8 (from 6 confederations)
- Matches: 16


#### Wikipedia

- [2009_FIFA_Confederations_Cup](http://en.wikipedia.org/wiki/2009_FIFA_Confederations_Cup)






## Questions? Comments?

Send them along to the
[Open Sports & Friends Forum/Mailing List](http://groups.google.com/group/opensport).
Thanks!


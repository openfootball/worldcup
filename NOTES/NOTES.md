# Common football.db SQLite Queries

Example queries to get started with the football.db database.


Note: The event key for the world cup in Brazil 2014 is `world.2014`


## List World Cup 2014 Games

```sql
select t1.title, t2.title, g.*
from games g
left outer join teams t1 on t1.id = g.team1_id
left outer join teams t2 on t2.id = g.team2_id
inner join rounds r on r.id = g.round_id
inner join events e on e.id = r.event_id
where e.key = 'world.2014'
```


## List World Cup 2014 Teams

```sql
select t.*
from teams t
inner join event_teams et on et.team_id = t.id
inner join events e on e.id = et.event_id
where e.key = 'world.2014'
```


## List World Cup 2014 Rounds

```sql
select *
from rounds r
inner join events e on e.id = r.event_id
where e.key = 'world.2014'
```

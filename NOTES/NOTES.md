# Common football.db SQLite Queries

Example queries to get started with the football.db database.

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
inner join groups_teams gt on gt.team_id = t.id
inner join groups g on gt.group_id = g.id
inner join events e on e.id = g.event_id
where e.key = 'world.2014'
```

## List World Cup 2014 Rounds
```sql
select *
from rounds r
inner join events e on e.id = r.event_id
where e.key = 'world.2014'
```

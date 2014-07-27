
## Alternative (New) Folder Structure ?

Use

~~~
- 01--uruguay-1930
- 02--italy-1934
...
- 18--germany-2006
- 19--south-africa-2010
- 20--brazil-2014
~~~

Why? Why not?


## Notes on Format and Models

### 1930 (Uruguay)

### 1934 (Italy)

### 1938 (France)

- All knockout rounds. Replays if tied after extra time (30 min!). No penalty shootout.

- 15 Teams
- Straight knockout format. No groups.
    - If a match was tied after 90 minutes, then 30(!) minutes of extra time were played.
    - If the score was still tied after extra time, the match would be replayed.

How to model rounds for replays?  (separate round conntected to "regular" or all-in-one round w/flag replay?)
Do we connect matches too in db/model? e.g.

~~~~
First round replays

(8) 9 June     Cuba        2-1   Romania             @ Stade Chapou, Toulouse
(9) 9 June     Germany     2-4   Switzerland         @ Parc des Princes, Paris
~~~~

or

~~~~
Quarter-finals replays

(14) 14 June   Brazil        2-1   Czechoslovakia    @ Parc Lescure, Bordeaux
~~~~

### 1950 (Brazil)

### 1954 (Switzerland)


# RSSSF 

Yes, you can. Convert RSSSF pages to the (structured) Football.TXT format 
(for easy parsing and exporting to JSON, CSV, SQL and friends).
Samples include:

- [World Cup 1930 (Uruguay)](30full.txt)
- [World Cup 2014 (Brazil)](2014f.txt)
- [World Cup 2022 (Qatar)](2022f.txt)




## Notes & Trivia

Goal types (shorthands)

````
Total 70 goals (2 o, 1 f, 1 p, 6 h),

-- standard types
o => own goal
p => penalty

2-0 M. Rosas 52 o
3-1 M. Rosas 42 p

-- plus / extra types
f => free kick  (goal)
h => header    (goal scored with head)

1-0 Monti 81 f
1-0 Subiabre 67 h 
5-3 Gayón 75 h

-- seconds
1-0 Deşu 2 (95 sec)
```


in world cup qualifying


- todo
  - [ ]  use n/p (not/played) as (inline match) status for [cancelled] - why? why not?

- cancelled vs annulled
  - cancelled - match not played
  - annulled - match played (!) but declared void


```
24.3.22 @ Moskva          Russia        awd Poland        [awarded 0-3 because of suspension Russia]

21.9.22 @ São Paulo       Brazil        n/p Argentina     [declared void]

11.6.19 @ Colombo         Sri Lanka     awd Macao         [awarded 3-0]


 5.9.19 @ Pyongyang       North Korea   2-0 Lebanon       [annulled]
10.9.19 @ Colombo         Sri Lanka     0-1 North Korea   [annulled]
15.10.19 @ Pyongyang       North Korea   0-0 South Korea   [annulled]
14.11.19 @ Ashgabat        Turkmenistan  3-1 North Korea   [annulled]
19.11.19 @ Beirut          Lebanon       0-0 North Korea   [annulled]


13.3.22 @ Doha            Tonga         n/p Cook Islands  [Tonga withdrew due to aftermath volcanic eruption]

17.3.22 @ Doha            Cook Islands  0-2 Solomon I.    [annulled]
17.3.22 @ Doha            Tahiti        n/p Vanuatu       
20.3.22 @ Doha            Cook Islands  n/p Tahiti        
20.3.22 @ Doha            Solomon I.    n/p Vanuatu       
24.3.22 @ Doha            Vanuatu       n/p Cook Islands  
```


intercontinental playoff rounds:

note -  matches are duplicated!!
          move to the end to its own intcontinenatal playoff section??

rename to inter-confederation play-offs or such ???

```

▪ AFC/CONMEBOL Playoff

13.6.22 @ Al-Rayyan       Australia     0-0 Peru          (aet, 5-4 pen.)

## NB: Australia qualified

▪ OFC/CONCACAF Playoff

14.6.22 @ Al-Rayyan       Costa Rica    1-0 New Zealand

## NB: Costa Rica qualified
```
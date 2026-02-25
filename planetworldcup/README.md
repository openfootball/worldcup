# Planet Word Cup Format Notes


Yes, you can. Convert (or markup up) Planet World Cup pages 
for easy parsing and exporting to JSON, CSV, SQL and friends
thanks to the (structured) Football.TXT format. Samples include:

- [World Cup 2014 (Brazil)](wc14.txt)
- [World Cup 2010 (South Africa)](wc10.txt)


(Planet World Cup) Before:

```
SEMIFINALS

Jul 08  Belo Horizonte   Brazil          v Germany           1-7
Jul 09  Sao Paulo        Netherlands     v Argentina    (2-4)0-0

3rd/4th PLACE PLAY-OFF

Jul 12  Brasilia         Brazil          v Netherlands       0-3

WORLD CUP FINAL

Jul 13  Rio de Janeiro   Germany         v Argentina     aet 1-0
```

What's changed? <br>
-  Start round lines with a round marker `▪`; optional - no need to UPCASE for emphasis.
-  Start geo names, that is,  city/location and ground/stadium/venue with
   the geo marker `@`.
-  Change win after extra-time scores e.g. `aet 1-0` to `1-0 aet` and 
   win on penalties after extra-time score e.g. `(2-4)0-0` to `0-0 aet, 2-4 pen`.   


Football.TXT:

```
▪ Semifinals

Jul 08  @ Belo Horizonte   Brazil          v Germany           1-7
Jul 09  @ Sao Paulo        Netherlands     v Argentina         0-0 aet, 2-4 pen

▪ 3rd/4th Place Play-off

Jul 12  @ Brasilia         Brazil          v Netherlands       0-3

▪ World Cup Final

Jul 13  @ Rio de Janeiro   Germany         v Argentina         1-0 aet
```

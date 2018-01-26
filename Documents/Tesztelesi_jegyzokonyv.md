# Tesztelési jegyzõkönyv

Az elsõ teljesen mûködõképes verzió 2018 január 23-án készült el. Ez a verzió tartalmaz minden megbeszélt funkciót. 

# Tesztelési folyamat leírása

Elõször a regisztrációs rendszert teszteltük. Regisztráltunk egy felhasználót, megjelent az adatbázisban. Ezután regisztrálni próbáltuk mégegyszer, ekkor az error oldarra lettünk átirányítva ahol az ide illõ hibaüzenet fogadott. 

A bejelentkezési rendszer tesztelésével folytattuk. Rossz felhasználót írtunk be, átírányított az error oldalra a megfelelõ hibaüzenet kiséretében. Következõleg jó névvel, de rossz jelszóval próbálkoztunk. Ismét az error oldalra lettünk átirányítva, a megfelelõ hibaüzenettel. Ezután korrekt adatokat adtuk meg és át lettünk irányítva az admin oldalra. 

A menüsávon megjelent a felhasználónk neve és a menüpontok is. 

Az Upload formot teszteljük: Cím beírásával, szöveg beírásával kép tallózásával. A cikk közzététele sikeres, a bekezdések megjelennek. Nem kép formátumú fájl feltöltése nincs kezelve. Több rekord felvitele. 

Fõldal tesztelése: logóra kattintás, átirányít minket a fõoldalra. A feltöltött cikkeket kilistázza, azok megfelelõ formában jelennek meg, címhivatkozások továbbvisznek a cikkmegjelenítõ oldalra.

Admin fõoldal tesztelése. Main Page-re kattintva továbbvisz az admin fõoldalra, Upload-ra kattintva továbbvist a feltöltés oldalra, Logoutra kattintva kijelentkeztet. Cikklistában megjelennek az admin funkciók is. Az edit-re kattintva a szerkesztési formra leszünk átirányítva, a delete-re kattintva a cikk törlõdik. 

Menüsáv tesztelése Update Edit és ArticleViewer oldalakon. Minden menüpont az általa megjelölt helyre visz.

Article Viewer. A kép megfelelõ formában jelenik meg, alatta a cím és a cikk is. A back hivatkozásra kattintva visszavisz a Fõoldalra. Bejelentkezve is a fõoldalra kerülünk az admin felület helyett. Kijelentkezett állapotban a menüsávban a Contribute felirat szerepel, rákattintva itt is elvégezzük a login és regisztráció tesztjét, minden ugyanúgy zajlik.

Edit form tesztje. Átírjuk a címet, a tartalmat és új képet töltünk fel. A változások mentésre kerülnek. Kép változtatása elvárt, formátum probléma itt sincs kezelve.


## Tesztelési jegyzõkönyv 1.0-ás verzióhoz
| Funkció                  | Teszten átment? |
|-------------------------|-----------------|
| Regisztráció     | igen  |
| Bejelentkezés    | igen  |
| Nav bar          | igen  |
| Admin nav bar    | igen  |
| Fõoldal          | igen  |
| Admin fõoldal    | igen  |
| Cikk megjelenítõ | igen  |
| Upload form      | igen  |
| Kép tallózó      | igen[hiányos] |
| Edit form        | igen |

### Az elfogadható mûködõképesség ismérvei

A tesztelési jegyzõkönyv alapján a program megfelelt az elvárásoknak

*Tesztet végezte: Baráth Tamás*


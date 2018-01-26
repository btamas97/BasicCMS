# Jegyzõkönyv
A megrendelõk és a fejlesztõk összeültek, hogy megtárgyalják a projektet. A megbeszélés helyszíne Budapest Top Stories Kft, idõpontja 2018.december 18.

### Fejlesztõ
Baráth Tamás

### Megrendelõ
Top Stories Kft.

A megrendelõ felvázolta igényeit, amelyet egyeztetett a fejlesztõvel.

- Webes felület
- Cikkek közzététele
- Cikkek módosítása
- Cikkek böngészése
- Regisztrációs és bejelentkezési rendszer
- Cikkek elõnézetének listázása a fõoldalon
- Teljes cikk megjelenítése új oldalon.
- Maximum 40 napos fejlesztési idõ

### Részletes programfunkciók a megbeszéltek alapján:


- Navigációs sáv, ez minden oldalon megtalálható (kivéve az error megjelenítõt)
    - Kattintható logó és verziószám megjenítése
    - "Contribute" felirat melyre kattintva elérhetõ a bejelentkezési és regisztrációs felület
    - Bejelentkezés után legyenek elérhetõek az admin funkciók hivatkozásai
    - "Main page" mely visszavisz a kezdõlap admin verziójára
    - Upload, rá kattintva a feltöltési formra kerülünk
    - Névre szóló üdvözlõ üzenet a felhasználónak
    - "Logout" hivatkozás kijelentkezéshez
- Fõoldal
    - Cikk elõnézetek listázása
    - Indexkép megjelenítése az elõnézet mellett négyzet  alakban
    - Cím megjelenítése erre kattintva tekinthetjük meg a teljes cikket
    - Szerzõ és dátum megjelenítése
    - 350 karakteres elõnézet a cikk szövegébõl
- Admin fõoldal
     - Bejelentkezés után érhetõ el
     - Tartalma megegyezik a fõoldallal
     - Kiegészítés
        - "edit" hivatkozás a szerzõ mellett rákattitnva a szerkesztõ formra visz
        - "delete" hivatkozás megjelenítése a szerzõ mellett, rákattintva törli az adott cikket
- Teljes cikk megjelenítõ
   - Kép megjelenítése a cikk szélességében
   - Cím nagyobb vastagabb betûvel
   - szerzõ és dátum megjelenítése kisebb betûvel
     - bejelentkezés után emellett elérhetõ az "edit" és "delete" felirat is. funkciójuk azonos az admin fõoldalban leírtakkal.
   - Cikk szövegének megjelenítése bekezdésekkel
   - Cikk alján vissza gomb ami visszavisz a Fõoldalra
- Update form
   - Ezen keresztül tölthetünk fel új cikkeket
   - Cím mezõ
   - Szerzõnek automatikusan az éppen belépve elvõ felhasználót adja meg
   - Dátum automatikusan a közzétevés idõpontja
   - Cikk tartalmának szövegdoboz. 
   - Kép tallózó amellyel kiválaszthatjuk a cikk képét
   - Feltöltés gomb: rákattintva a cikk bekerül az adatbázisba és kikerül az oldalra
- Edit form 
   - Szerkezete megegyezik az Upload formmal
   - Szerkeszteni kívát cikk címe megjelenik a cím mezõben 
   - Szerkeszteni kívánt cikk tartalma pedig a tartalom szövegdobozában
   - Megjeleníti a cikk képét kicsiben
   - Mentés gomb rákattintva mentjük a változtatásokat
- Bejelentkezési és regisztrációs felület
   - A "Contribute" fekiratra kattintva érhetõ el
   - "username" és "password mezõkbõl áll
   - Belépéshez a "Login" gomb használható
   - Regisztrációhoz a "Register" gomb használható
   - A két gomb a mezõk alatt egymás mellett helyezkedik el különbözõ színnel

- Az oldal HTML, CSS, PHP és MySQL segítségével készüljön el

A megbeszélteket a fejlesztõ elfogadta, és megvalósíthatónak tekintette.



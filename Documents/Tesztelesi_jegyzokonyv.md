# Tesztel�si jegyz�k�nyv

Az els� teljesen m�k�d�k�pes verzi� 2018 janu�r 23-�n k�sz�lt el. Ez a verzi� tartalmaz minden megbesz�lt funkci�t. 

# Tesztel�si folyamat le�r�sa

El�sz�r a regisztr�ci�s rendszert tesztelt�k. Regisztr�ltunk egy felhaszn�l�t, megjelent az adatb�zisban. Ezut�n regisztr�lni pr�b�ltuk m�gegyszer, ekkor az error oldarra lett�nk �tir�ny�tva ahol az ide ill� hiba�zenet fogadott. 

A bejelentkez�si rendszer tesztel�s�vel folytattuk. Rossz felhaszn�l�t �rtunk be, �t�r�ny�tott az error oldalra a megfelel� hiba�zenet kis�ret�ben. K�vetkez�leg j� n�vvel, de rossz jelsz�val pr�b�lkoztunk. Ism�t az error oldalra lett�nk �tir�ny�tva, a megfelel� hiba�zenettel. Ezut�n korrekt adatokat adtuk meg �s �t lett�nk ir�ny�tva az admin oldalra. 

A men�s�von megjelent a felhaszn�l�nk neve �s a men�pontok is. 

Az Upload formot tesztelj�k: C�m be�r�s�val, sz�veg be�r�s�val k�p tall�z�s�val. A cikk k�zz�t�tele sikeres, a bekezd�sek megjelennek. Nem k�p form�tum� f�jl felt�lt�se nincs kezelve. T�bb rekord felvitele. 

F�ldal tesztel�se: log�ra kattint�s, �tir�ny�t minket a f�oldalra. A felt�lt�tt cikkeket kilist�zza, azok megfelel� form�ban jelennek meg, c�mhivatkoz�sok tov�bbvisznek a cikkmegjelen�t� oldalra.

Admin f�oldal tesztel�se. Main Page-re kattintva tov�bbvisz az admin f�oldalra, Upload-ra kattintva tov�bbvist a felt�lt�s oldalra, Logoutra kattintva kijelentkeztet. Cikklist�ban megjelennek az admin funkci�k is. Az edit-re kattintva a szerkeszt�si formra lesz�nk �tir�ny�tva, a delete-re kattintva a cikk t�rl�dik. 

Men�s�v tesztel�se Update Edit �s ArticleViewer oldalakon. Minden men�pont az �ltala megjel�lt helyre visz.

Article Viewer. A k�p megfelel� form�ban jelenik meg, alatta a c�m �s a cikk is. A back hivatkoz�sra kattintva visszavisz a F�oldalra. Bejelentkezve is a f�oldalra ker�l�nk az admin fel�let helyett. Kijelentkezett �llapotban a men�s�vban a Contribute felirat szerepel, r�kattintva itt is elv�gezz�k a login �s regisztr�ci� tesztj�t, minden ugyan�gy zajlik.

Edit form tesztje. �t�rjuk a c�met, a tartalmat �s �j k�pet t�lt�nk fel. A v�ltoz�sok ment�sre ker�lnek. K�p v�ltoztat�sa elv�rt, form�tum probl�ma itt sincs kezelve.


## Tesztel�si jegyz�k�nyv 1.0-�s verzi�hoz
| Funkci�                  | Teszten �tment? |
|-------------------------|-----------------|
| Regisztr�ci�     | igen  |
| Bejelentkez�s    | igen  |
| Nav bar          | igen  |
| Admin nav bar    | igen  |
| F�oldal          | igen  |
| Admin f�oldal    | igen  |
| Cikk megjelen�t� | igen  |
| Upload form      | igen  |
| K�p tall�z�      | igen[hi�nyos] |
| Edit form        | igen |

### Az elfogadhat� m�k�d�k�pess�g ism�rvei

A tesztel�si jegyz�k�nyv alapj�n a program megfelelt az elv�r�soknak

*Tesztet v�gezte: Bar�th Tam�s*


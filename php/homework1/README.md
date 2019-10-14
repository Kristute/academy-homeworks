# PHP intro homework

Panaudota composer autoload funkcija užkrauti failus su skirtingais namespace'ais.
Papildomai panaudota konsolės nuspalvinimo biblioteka.

Taip pat, kviečiant kiekvieną funkciją testavausi, kaip jos veikia strict_types failuose
ir pastebėjau, kad metodai su griežtai nurodytomis parametrų ir grąžinimo reikšmėmis `Soft` ir `Strict`
meta TypeError klaidas ir būtent dėl to kviečiant jas `index.php` šių klaidų nepavyko pastebėti.

Papildomai pridėjau `additional_test.php` failą, kuriame testavausi. 

* Nfq/Akademija/root.php faile yra funkcija `calculateHomeWorkSum(...$numbers)`, kuri turi splat 
operatorių (`...`), jis leidžia paduoti bet kiek sveikųjų ir realiųjų skaičių argumentų.
Splat operatorių galima naudoti nuo PHP 5.6 versijos ir tik paskutinis parametras 
gali turėti splat operatorių.

* Nfq/Akademija/notTyped.php faile `calculateHomeWorkSum(...$numbers): int` funkcija skiriasi nuo 
pirmosios tuo, kad funkcija visada grąžins integer rezultatą, nepriklausomai nuo paduodamų
 argumentų tipų, kadangi grąžinimo tipas nurodytas (`: int`).

* Nfq/Akademija/soft.php funkcijoje `calculateHomeWorkSum(int...$numbers): int` atsiranda int tipas 
prieš splat operatorių, kuris reiškia, kad visi funkcijos parametrai bus int tipo. Jeigu bus 
paduodami ne int, tai juos pavers į int.

* Nfq/Akademija/strict.php funkcija yra tokia pat kaip `soft.php` faile, tačiau failo viršuje dar 
yra nurodyta `declare(strict_types=1)` sąlyga (statement). Praeitame faile šios sąlygos nebuvo, todėl
PHP "ignoravo" paduotą tipą ir tiesiog jį pasivertė į sau reikiamą (coercion). Kviečiant šią funkciją atskirai 
faile, kuris turi `declare(strict_types=1)` sąlygą (kaip "strict.php"), gausime TypeError klaidą. 
Galutiniai tipų deklaravimai ir strict tipai atsirado tik PHP 7, kadangi senesnių versijų PHP kodai
 vis dar plačiai naudojami, `declare(strict_types=1)` suteikia galimybę neperrašinėti viso kodo iš
 naujo.

[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/Nx0GzHxQ)
# ZH

Ebbe a könyvtárba kerül a **zárthelyi** megoldása. A feladatok papír alapon kerülnek kiadásra. A rendelkezésre álló idő 90 perc.

## Beadás és értékelés

> [!IMPORTANT]
> A zh feladatokat a laborokhoz hasonlóan pull request formájában kell beadni a határidő előtt.
> - Hozz létre egy **új branchet** `megoldas` néven, és ezen dolgozz.
> - Töltsd ki a `neptun.txt` fájlt a saját Neptun kódoddal.
> - Lehetőleg minden feladat után kommitolj és használj értelmes kommit üzeneteket.
> - A feladat végeztével **pushold** a megoldásodat és hozz létre egy **pull requestet**.
> - Ellenőrizd a pull request tartalmát és rendeld hozzá a laborvezetődet **reviewernek**.
> - A ZH végeztével töröld az általad létrehozott összes fájlt a laborgépről.

> [!CAUTION]
> A nem a fenti formában beadott megoldások nem lesznek értékelve!

## Általános információk

- A megoldás során semmilyen forrás nem használható a kiinduló repository-ban található, [központilag kiadott cheat sheet](CheatSheet.md) kivételével. A cheat sheetet módosítani nem lehet.

- Saját gépet nem lehet használni. A laborok hardver konfigurációját nem szabad megváltoztatni!

- A számonkért tananyag része a Git verziókezelő helyes használata is. A helytelen használatból adódó hibák (pl. rossz branch, nem feltöltött fájlok stb.) a ZH eredményét nagymértékben befolyásolhatják. Technikai segítséget - hacsak nem a laborgép hibájából történt valami - a felügyelő oktatók nem nyújthatnak.

## Technikai információk

- **XAMPP** elérési útvonala: `C:\Tools\xampp\xampp-control.exe`, a PHP és CSS fájlokat a `C:\Tools\xampp\htdocs\neptun` (saját Neptun kód) mappába kell tenni

- Weboldal elérési URL-je böngészőben: `http://localhost:8080/<neptun>/...` (a portszámot ellenőrizve XAMPP-ben)

- **MySQL Workbench** elérési útvonala: `C:\Program Files\MySQL Workbench\...` vagy hasonló

- **MySQL Workbench** connection létrehozása a "+" gombbal, tetszőleges névvel, default beállításokkal (a portszámot ellenőrizve XAMPP-ben)

- **Visual Studio Code** az asztalon található

- **GitExtensions** használata előtt a `Tools > Settings` ablak `Git > Config` opciója alatt meg kell adni a saját felhasználónevet és email címet

- Klónozáshoz és pusholáshoz egy **classic** Personal Access Tokenre lesz szükség; GitHub bejelentkezés után: [Settings -> Developer Settings -> Tokens (classic)](https://github.com/settings/tokens) -> **Generate new token (classic)** -> Note: ZH, Expiration: 7 nap, Select scopes: repo

## Formai hibák

- 90 perc utáni leadás a pull request (vagy az utolsó commit, a kettő közül a későbbi) időpontja alapján percenként 1 pont levonással jár!

- Formai hibás leadás esetén a hibát javítani kell (amennyiben lehetséges). Formai hibánként 1 pont levonás jár!
  - nem a laborvezetőhöz rendelt pull request
  - lezárt vagy mergelt pull request
  - nem megfelelő branch használata pull requestnél
  - neptun.txt nincs kitöltve
  - nincs screenshot
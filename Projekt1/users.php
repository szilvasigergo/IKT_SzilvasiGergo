- phpMyAdmin SQL Dump
- 5.0.2 verzió
- https://www.phpmyadmin.net/
-
- Gép: 127.0.0.1
- Létrehozás ideje: 2021. Okt 12. 23:17
- Kiszolgáló verziója: 10.4.11-MariaDB
- PHP verzió: 7.4.4

SET SQL_MODE =  " NO_AUTO_VALUE_ON_ZERO " ;
TRANZAKCIÓ INDÍTÁSA ;
SET time_zone =  " +00 : 00 " ;


/ * ! 40101 SET @OLD_CHARACTER_SET_CLIENT = @@ CHARACTER_SET_CLIENT */ ;
/ * ! 40101 SET @OLD_CHARACTER_SET_RESULTS = @@ CHARACTER_SET_RESULTS */ ;
/ * ! 40101 SET @OLD_COLLATION_CONNECTION = @@ COLLATION_CONNECTION */ ;
/ * ! 40101 SET NAMES utf8mb4 */ ;

-
- Adatbázis: `projekt1`
-

- ------------------------------------------------ --------

-
- Tábla szerkezet hozzá a táblához `users`
-
 ADATBÁZIS  LÉTREHOZÁSA projekt1 ;
 TÁBLÁZAT CREATE " users " (
  ` Id `  int ( 11 ) NOT NULL ,
  ` Uname `  varchar ( 25 ) COLLATE utf8_hungarian_ci NOT NULL ,
  ` Email `  varchar ( 40 ) COLLATE utf8_hungarian_ci NOT NULL ,
  ` PWD `  varchar ( 50 ) COLLATE utf8_hungarian_ci NOT NULL ,
  ` Fullname `  varchar ( 40 ) COLLATE utf8_hungarian_ci NOT NULL ,
  " aktív "  tinyint ( 1 ) DEFAULT NULL ,
  ` Rang `  int ( 1 ) DEFAULT NULL ,
  ` ban '  bit ( 1 ) DEFAULT NULL ,
  ` Reg_time ` datetime DEFAULT NULL ,
  ` Log_time ` datetime DEFAULT NULL
) MOTOR = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_hungarian_ci;

-
- Indexek a kiírt táblákhoz
-

-
- A tábla indexei `users`
-
ALTER  TABLE  ` felhasználók '
  HOZZÁADÁS ELSŐ GOMB ( " id " );

-
- A kiírt táblák AUTO_INCREMENT értéke
-

-
- AUTO_INCREMENT a táblához `users`
-
ALTER  TABLE  ` felhasználók '
  MODIFY ` id `  int ( 11 ) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 17 ;
VÁLLALKOZZ ;

/ * ! 40101 SET CHARACTER_SET_CLIENT =@OLD_CHARACTER_SET_CLIENT */ ;
/ * ! 40101 SET CHARACTER_SET_RESULTS =@OLD_CHARACTER_SET_RESULTS */ ;
/ * ! 40101 SET COLLATION_CONNECTION =@OLD_COLLATION_CONNECTION */ ;
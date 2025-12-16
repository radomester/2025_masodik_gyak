# SQL

## Adattípusok

```sql
INT, DECIMAL(x,y), FLOAT, DOUBLE
CHAR, VARCHAR, NCHAR, NVARCHAR
DATE, TIME, DATETIME
BIT, BINARY, VARBINARY
```


## Séma definíció és adatbevitel

### Séma létrehozása és törlése

```sql
CREATE DATABASE [IF NOT EXISTS] <adatbázisnév>;

USE <adatbázisnév>;

DROP DATABASE [IF EXISTS] <adatbázisnév>;
```

### Tábla létrehozása, módosítása és törlése

```sql
CREATE TABLE <táblanév> (
    <oszlop1> <típus1> [<oszlopszintű megkötések>],
    <oszlop2> <típus2> [<oszlopszintű megkötések>],
    ...,
    [<táblaszintű megkötések>]
);
```

```sql
ALTER TABLE <táblanév> ADD <új oszlop> <típus> <megkötések>;

ALTER TABLE <táblanév> DROP COLUMN <oszlopnév>;

ALTER TABLE <táblanév> CHANGE <oszlopnév> <új oszlopnév> <új típus> <új megkötések>;
```

```sql
DROP TABLE [IF EXISTS] <táblanév>;
```

### Oszlopszintű megkötések

```sql
PRIMARY KEY
NOT NULL
AUTO_INCREMENT
UNIQUE
DEFAULT <érték>
```


### Táblaszintű megkötések

```sql
PRIMARY KEY(<oszlopnév1>, ..., <oszlopnévn>)

CONSTRAINT <név> FOREIGN KEY (<oszlopnév>) REFERENCES <táblanév>(<oszlopnév>)
```

### Adatok beszúrása

```sql
INSERT INTO <táblanév> (<oszlop1>, <oszlop2>, ...) VALUES(<érték1>, <érték2>, ...);

INSERT INTO <táblanév> VALUES(<érték1>, <érték2>, ...);
```

## Adatmódosító utasítások

```sql
UPDATE <táblanév>
SET <oszlop1>=<érték1>, ..., <oszlopn>=<értékn>
WHERE <szűrő feltétel>;
```

```sql
DELETE FROM <táblanév> WHERE <szűrő feltétel>;
```

## Lekérdezések

### Lekérdezés struktúrája

```sql
SELECT [DISTINCT] <kifejezés1> [AS <név1>], <kifejezés2> [AS <név2>], ..., <kifejezésn> [AS <névn>]
FROM <táblanév> [<illesztés1>, ..., <illesztésn>]
WHERE <feltétel>
GROUP BY <oszlop1>, ..., <oszlopn>
HAVING <feltétel>
ORDER BY <oszlop1> [ASC | DESC], ..., <oszlopn> [ASC | DESC]
LIMIT <érték>;
```

### Illesztések

```sql
CROSS JOIN <táblanév>

NATURAL JOIN <táblanév>

INNER JOIN <táblanév> ON <feltétel>

LEFT OUTER JOIN <táblanév> ON <feltétel>

RIGHT OUTER JOIN <táblanév> ON <feltétel>
```

### Feltétel operátorok

```sql
AND, OR, NOT
=, <>, <, <=, >, >=
(...) -- csoportosítás zárójellel
LIKE 'minta'
IS [NOT] NULL
BETWEEN ... AND ...
```

### Beágyazott lekérdezések

```sql
1) FROM paraméterként
2) WHERE feltételben
3) SELECT paraméterként
```

### Aggregációs függvények

```sql
SUM(<kifejezés>)
COUNT(<kifejezés>)
AVG(<kifejezés>)
MIN(<kifejezés>)
MAX(<kifejezés>)
```

### Fontosabb beépített függvények

```sql
IFNULL(<érték>, <érték NULL helyett>)
CONCAT(<string1>, ..., <stringn>)
CHAR_LENGTH(<string>)
UPPER(<string1>), LOWER(<stringn>)
CURDATE(), NOW()
YEAR(<date>), MONTH(<date>), WEEK(<date>), DAY(<date>)
DATEDIFF(<date1>, <date2>), TIMEDIFF(<date1>, <date2>)
```

# HTML

## Oldal váza

```html
<!DOCTYPE html>
<html lang="hu">
    <head>
        (Metaadatok)
    </head>

    <body>
        ...
    </body>
</html>
```

## Metaadatok

```html
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cím</title>
<link rel="stylesheet" type="text/css" href="style.css">
```

## Szemantikus elemek

```html
<header>...</header>
<main>...</main>
<nav>...</nav>
<aside>...</aside>
<section>...</section>
<article>...</article>
<footer>...</footer>
```

## Általános attribútumok

```html
<... id="...">
<... class="...">
<... title="...">

<!-- Az alábbi helyett legtöbbször CSS-t ajánlott használni! -->
<... style="..."> 
```

## Alapvető elemek

```html
<div>...</div>
<span>...</span>
<h1>...</h1>, ..., <h6>...</h6>
<p>...</p>
<img src="image.png" alt="An image" width="800" height="600" />
<br>
<a href="index.php" target="_blank|_self"></a>
<!-- ... -->
```

## Listák és táblázatok

```html
<ol>...</ol>
<ul>...</ul>
<li>...</li>

<table>...</table>
<tr>...</tr>
<th>...</th>
<td>...</td>
<thead>...</thead>
<tbody>...</tbody>
```

## Űrlapok

```html
<form action="insert.php" method="post">...</form>
<label for="myInput">...</label>
<input id="myInput" type="..." name="..." .../>
<textarea rows="...">...</textarea>
<select name="...">...</select>
<option value="...">...</option>

<fieldset>...</fieldset>
<legend>...</legend>
```

### Input típusok és attribútumok

```html
<!-- Input típusok -->
text
email
password
number
radio
checkbox
file
date
color
submit

<!-- Input attribútumok (típustól is függenek) -->
type="..."
name="..."
value="..."
placeholder="..."
readonly
required
disabled
min="..."
max="..."
step="..."
minlength="..."
maxlength="..."
```

# CSS

## Szabályok

```css
selector {
    tulajdonsag1: ertek1;
    tulajdonsag2: ertek2 !important;
    ...
}
```

## Szelektorok

```css
/* Egyszerű szelektorok */
element {...}
#id {...}
.class {...}
[attributum="ertek"] {...}

/* Összetett szelektorok */
selector1 > selector2 {...}
selector1 selector2 {...}
selector1, selector2 {...}

/* Pseudo-osztályok */
:visited {...}
:disabled {...}
:first-child {...}
:nth-child(even) {...}
:nth-child(odd) {...}
:hover {...}
```

## Fontosabb tulajdonságok és értékeik
```css
/* Szöveg*/
text-align: left|center|right|justify;
color: <színkód>|<színnév>;
font-family: "<elsődleges betűtípus>"[, "<másodlagos betűtípus>"];
font-size: <méret>px;
font-weight: normal|bold|bolder;

/* Lista */
list-style-type: circle|square|disc|none;

/* Táblázat */
border-collapse: collapse|separate;

/* Blokk */
[max-]width: <méret>px|%;
[max-]height: <méret>px|%;
margin[-top|right|bottom|left]: auto|<méret>px;
padding[-top|right|bottom|left]: <méret>px;
border[-top|right|bottom|left]: <méret>px solid|dashed|dotted <színkód>|<színnév>;
background-color: <színkód>|<színnév>;
box-sizing: border-box|content-box;

/* Elrendezés */
display: block|flex;
justify-content: center|flex-start|flex-end|space-between;
align-items: center|flex-start|flex-end|baseline;
flex-direction: column|row;
flex-wrap: wrap|nowrap;
flex-grow: 1|0;
flex-shrink: 1|0;
gap: <méret>px;

```

# PHP

## Alapok

```php
<?php 
// Komment
die($hibauzenet);
exit($hibakod);
echo $message;
print $message;
printf('Hello, %s!', $name);
htmlspecialchars("<h1>Hello</h1>");
?>
```

## Változók

```php
// Típusok
$v = 12; 
$v = 12.5;
$v = false;
$v = "text";
$v = [1, 2, 3];
$v = new stdClass();
$v = null;

// Vizsgálat
isset($v);
unset($v);
empty($v);

// Típusellenőrzés és beállítás
is_integer($v);
is_string($v);
(int)$v;

// Hibakeresés
var_dump($v);
print_r($v);
```

## Operátorok

```php
Aritmetikai: `+`, `-`, `*`, `/`, `%`, `**`
Értékadó: `=`, `+=`, `-=`, `*=`, `/=`, `%=`, `**=`
Érték növelő/csökkentő: `$v++`, `$v--`, `++$v`, `--$v`
Összehasonlító: `==`, `!=`, `===`, `!==`, `<`, `>`, `<=`, `>=`, `<=>`
Logikai: `&&`, `||`, `!`, `and`, `or`, `xor`
String összefűző: `.`, `.=`
Feltételes értékadó operátorok: `?:`, `??`
```

```php
$result = $condition ? $true : $false;
$result = $var ?? $default; 
```

## Stringek

```php
// Szimpla idézőjel
$str = 'Hello: \' \\';
$str = 'Hello, ' . $name . '!';

// Dupla idézőjel
$str = "Hello: \", \\, \$, \n ...";
$str = "Hello, $name and {$name}s from {$date['year']}!";

// Utasítások
$str = "Hello, world!";
$str[0]; // H
substr($str, 0, 5); // Hello
strlen($str); // 13
strpos($str, "world"); // 7
str_replace("world", "php", $str); // Hello, php!
sprintf("Hello, %s!", "world"); // Hello, world!
strtoupper($str); // HELLO, WORLD!
strtolower($str); // hello, world!
trim("  Hello, world!  "); // Hello, world!
explode(" ", $str); // ['Hello', 'world!']
implode(" ", ["Hello,", "world!"]); // Hello, world!
```

## Tömbök

```php
// Indexelt
$array = ['string', 12, false];
$array[] = 'következő';
$array[10] = 10;
$var = $array[3];

// Utasítások (indexelt)
$indxd = [2, 3, 1, 4, 5];
unset($indxd[3]); // [2, 3, 1, 5]
count($indxd); // 5
in_array(3, $indxd) // true
array_pop($indxd); // 5
array_push($indxd, 6); // [2, 3, 1, 4, 6]
array_reverse($indxd); // [6, 4, 1, 3, 2]
sort($indxd); // [1, 2, 3, 4, 6]
rsort($indxd); // [6, 4, 3, 2, 1]

// Asszociatív
$array = ['név' => 'Ferenc', 'kor' => 31, 'házas' => true];
$array['város'] = 'Budapest';
$array['született'] = [1993, 10, 25];
$var = $array['név']; // Ferenc

// Utasítások (asszociatív)
$assoc = ['b' => 3, 'a' => 2, 'c' => 1];
unset($array['b']); // ['a' => 2, 'c' => 1]
in_array(1, $assoc); // true
array_key_exists('a', $assoc); // true
asort($assoc); // ['c' => 1, 'a' => 2, 'b' => 3]
arsort($assoc); // ['b' => 3, 'a' => 2, 'c' => 1]
ksort($assoc); // ['a' => 2, 'b' => 3, 'c' => 1]
krsort($assoc); // ['c' => 1, 'b' => 3, 'a' => 2]
```

## Vezérlő utasítások

### Elágazás

```php
if (condition) {
    ...
} elseif (condition) {
    ...
} else {
    ...
}

switch ($var) {
    case value1:
        ...
        break;
    case value2:
        ...
        break;
    default:
        ...
        break;
}
```

### Ciklusok

```php
while ($condition) {
    ...
}

for ($i=0; $i<10; $i++) {
    ...
}

foreach ($array as $value) {
    ...
}

foreach ($array as $key => $value) {
    ...
}
```

## Függvények

```php
function functionName($param1, $param2 = "default") {
    ...
    return $value;
}

$out = functionName($in1, $in2);
```

## Hibakezelés

```php
try {
    ...
} catch (Exception $e) {
    echo 'Hiba: ' . $e->getMessage();
} finally {
    ...
}
```

## Sablon generálás

```php
<div><?= $var ?></div>
```

```php
<?php if($condition): ?>
    <div>...</div>
<?php else: ?>
    <div>...</div>
<?php endif; ?>
```
```php
// Lehetséges szerkezetek:
if(...): ... elseif(...): ... else: ... endif;
while(...): ... endwhile;
for(...): ... endfor;
foreach(...): ... endforeach;
switch(...): case ...: ... endswitch;
```

```php
header("Location: index.php");
http_response_code(404);
```

## Bemenetek

```php
<?php
// index.php?name=John&age=30
$name = $_GET['name'];
$age = $_GET['age'];
```

```php
<?php
$name = $_POST['name'];
$age = $_POST['age'];
?>
<form action="insert.php" method="post">
    <input type="text" name="name" />
    <input type="number" name="age" />
    <input type="submit"/>
</form>
```

## Űrlap validálás

```php
if (empty($_POST)) {
   echo 'Nincs űrlap adat.';
}

if (!isset($_POST['name'])) {
    echo "Nincs név mező megadva!";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "Érvénytelen email cím.";
}

// További filterek
FILTER_VALIDATE_BOOL
FILTER_VALIDATE_INT
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_EMAIL
```

## Adatbázis kezelés

```php
try {
  $dbname = "info2";
  $db = new PDO("mysql:host=localhost;dbname=$dbname", "root", "");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  ...
  
} catch (PDOException $e) {
  die('Hiba: ' . $e->getMessage());
}
```

```php
$escaped = $db->quote($value);

$query = "SELECT ...";
$db->exec($query);
$result = $db->query($query);

$stmt = $db->prepare($query);
$stmt->bindParam(':param1', $value1, PDO::PARAM_STR);
$stmt->bindParam(':param2', $value2, PDO::PARAM_INT);
$stmt->bindParam(':param3', $value3, PDO::PARAM_BOOL);
$stmt->execute();
$result = $stmt;

$count = $result->rowCount();
$rows = $result->fetchAll();

while ($row = $result->fetch(PDO::FETCH_NUM)) {
    echo $row[0];
}
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $row['column_name'];
}
while ($obj = $result->fetchObject()) {
    echo $obj->column_name;
}

$result->closeCursor();
```

## Állapotkezelés

### Sütik

```php
setcookie('name', 'value', time() + 3600);
$value = $_COOKIE['name'];
```

### Session

```php
session_start();
$_SESSION['name'] = 'value';
$value = $_SESSION['name'];
unset($_SESSION['name']);
session_destroy();
```
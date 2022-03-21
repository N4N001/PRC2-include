<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Chůva index.php v akci</title>
</head>
<body>

<nav> 
  <ul>
    <li><a href="./">Úvod</a></li>
    <li><a href="?page=sluzby">Služby</a></li>
    <li><a href="?page=onas">O nás</a></li>
    <li><a href="?page=kontakt">Kontakt</a></li>
  </ul>
</nav>

<?php
$page = filter_input(INPUT_GET, "page");

// všimněte si doplněného vykřičníku v podmínce

if (!isset($page)) {
  $page = "uvod";
}

include_once "includes/uvod.php";

?>

</body>
</html>
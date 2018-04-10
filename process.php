<?php

require('config/dbconfig.php');

// making sure, bad boys 'n girls don't do anything harmful
$product = $_GET['product'];
$type = $_GET['type'];

// creating a (more or) less fancy HTML-table and getting data out of the db
echo("<table><tr><th>Produkt</th><th>Ersatzprodukt</th><th>Anwendungsbeispiel</th><th>Weitere Hinweise</th><th>Vegan?</th></tr>");
$stmt = $pdo->query('SELECT product, replacement, usecase, notes, vegan FROM contents WHERE product LIKE ' . $pdo->quote($product) . ' ORDER BY product ASC');
while($row = $stmt->fetch()) {
    echo("<tr><td>" . $row['product'] . "</td><td>" . $row['replacement'] . "</td><td>" . $row['usecase'] . "</td><td>" . $row['notes'] . "</td><td>" . $row['vegan'] . "</td></tr>");
}
echo("</table>");
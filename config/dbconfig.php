<?php

$dbconfig['host'] = 'localhost';
$dbconfig['user'] = 'USERNAME';
$dbconfig['base'] = 'veplace';
$dbconfig['pass'] = 'PASSWORD';
$dbconfig['char'] = 'utf8';

try {
    $pdo = new PDO('mysql:host='.$dbconfig['host'].';dbname='.$dbconfig['base'].';charset='.$dbconfig['char'].';', $dbconfig['user'], $dbconfig['pass']);
}
catch(PDOException $e) {
    exit('Unable to connect Database.');
}

echo('dbconfig.php sucessfully loaded <br />');
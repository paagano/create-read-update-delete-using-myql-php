<?php 
$db  = new PDO(
"mysql:host=localhost;port=3306;dbname=testdb",
"root", 
""
);

$db->setAttribute(
PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION
);

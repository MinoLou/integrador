
<?php
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$json2 = '[{"nombre":"Paul Mc Cartney","usuario":"PaulMacca42","pais":"Inglaterra","email":"paul@beatles.com","hash":"$2y$10$WfoMIdp0LWh6QyWtzwA7ge7xEtnP9AP8JErmDBVwZW80lgCS3pZPO"},{"nombre":"Paul Mc Cartney","usuario":"PaulMacca42","pais":"Argentina","email":"paul@beatles.com","hash":"$2y$10$WfoMIdp0LWh6QyWtzwA7ge7xEtnP9AP8JErmDBVwZW80lgCS3pZPO"},{"nombre":"Paul Mc Cartney","usuario":"PaulMacca42","pais":"Inglaterra","email":"paul@beatles.com","hash":"$2y$10$WfoMIdp0LWh6QyWtzwA7ge7xEtnP9AP8JErmDBVwZW80lgCS3pZPO"},{"nombre":"Paul Mc Cartney","usuario":"PaulMacca42","pais":"Argentina","email":"paul@beatles.com","hash":"$2y$10$WfoMIdp0LWh6QyWtzwA7ge7xEtnP9AP8JErmDBVwZW80lgCS3pZPO"},{"nombre":"Paul Mc Cartney","usuario":"PaulMacca42","pais":"Inglaterra","email":"paul@beatles.com","hash":"$2y$10$WfoMIdp0LWh6QyWtzwA7ge7xEtnP9AP8JErmDBVwZW80lgCS3pZPO"},{"nombre":"Paul Mc Cartney","usuario":"PaulMacca42","pais":"Argentina","email":"paul@beatles.com","hash":"$2y$10$WfoMIdp0LWh6QyWtzwA7ge7xEtnP9AP8JErmDBVwZW80lgCS3pZPO"}]';

var_dump(json_decode($json));
echo "<br>";
var_dump(json_decode($json2, true));

?>

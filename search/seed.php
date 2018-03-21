<?php
$con = new PDO('mysql:host=localhost;dbname=search', 'root', '');
$con->query("insert into people (name, email) values ('jahed', 'jahed@gmail.com'))");
$con->query("insert into people(name, email) values('hasan', 'hasan@gmail.com')");
$con->query("insert into people(name, email) values('jh', 'jh@gmail.com')");
$con->query("insert into people(name, email) values('jhb', 'jhb@gmail.com')");
$con->query("insert into people(name, email) values('j', 'j@gmail.com')");

?>
<?php
define('HOST', 'mysql.soares-hamon.svc');
define('USUARIO', 'user');
define('SENHA', 'pass');
define('DB', 'testdb');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

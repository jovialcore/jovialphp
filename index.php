<?php

$name = $_GET['name'] ?? 'world';

header('Content-Type: text/html; charset=utf-8');

printf('Hello %s', $name);

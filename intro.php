<?php
require_once __DIR__ . '/entrypoint.php';

$name = $request->query->get('name', 'Mr nobody');//naem is the name attribute from the form, the 2nd parameter is for situations where name is not set/'empty'

$response->setContent(sprintf('Whats your name? %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));


<?php
require_once __DIR__ . '/entrypoint.php';

$response->setContent('Thanks for comming, you can now leave! ');

$response->send();

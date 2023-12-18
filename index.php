<?php 
require_once 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env.local', __DIR__.'/.env');




$pageTitle = 'Tableau de bord';

include __DIR__ . '/templates/header.php';

include __DIR__ . '/templates/hero.php';

include __DIR__ . '/templates/last.php';

include __DIR__ . '/templates/footer.php';
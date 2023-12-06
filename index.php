<?php 

require 'classes/Book.php';
require 'classes/Publisher.php';

use Artemis\Book;
use Artemis\Publisher;
$editeur_1 =  new Publisher(2, "Gallimard");
$livre_1 = new Book(
    1,
    'Le seigneur des anneaux',
    'Un livre de fantasy',
    '123456789',
    1,
    1);
    $livre_1->getAuthor_id();
    $editeur_1->getAuthor_id();

    


    // Affichage

echo 'Voici le livre : '.$livre_1->getTitle(). '<br>';
echo 'Il est publié par la maison d\'édition  : '.$editeur_1->getName(). '<br>';

// var_dump($livre_1);
// var_dump($editeur_1);

die();






































include __DIR__ . '/templates/header.php';

include __DIR__ . '/templates/hero.php';

include __DIR__ . '/templates/last.php';

include __DIR__ . '/templates/footer.php';

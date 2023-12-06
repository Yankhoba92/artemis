<?php 
require __DIR__ . './classes/Ebook.php';

use Artemis\Book;
$ebook = new Ebook(
    2,
    "Macroon à la plage",
    "Les aventure du président",
    3,
    4);
    
$ebook->setIsAugmented(true)
        ->setAvailability(30)
        ->setIsDownloadable(false); 


        var_dump($ebook);
        die(0);
include __DIR__ . '/templates/header.php';

include __DIR__ . '/templates/hero.php';

include __DIR__ . '/templates/last.php';

include __DIR__ . '/templates/footer.php';

<?php
    include_once __DIR__ . '/product.php';
    include_once __DIR__ . '/user.php';

     $food = new FoodProduct('DogFood', 'Food Type', 9.99, true);
     $game = new GameProduct('DogGame', 'Game Type', 12.99, true);
     $dogBed = new DogBedProduct('DogBed', 'Bed Type', 39.99, true);
     $unsignedUser = new User();
     $signedUser = new SignedUser();

    echo('<pre>');
        var_dump($unsignedUser);
    echo('</pre>');

     echo('<pre>');
        var_dump($food);
    echo('</pre>');



   
    $signedUser->setDiscount();


    echo('<pre>');
        var_dump($signedUser);
    echo('</pre>');


    echo('<pre>');
        var_dump($food->getDiscount());
    echo('</pre>');

    echo('<pre>');
        var_dump($game->getDiscount());
    echo('</pre>');

    echo('<pre>');
        var_dump($unsignedUser->addProduct('croccantini','cibo',20.00, true));
    echo('</pre>');


?>
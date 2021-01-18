<?php

    // D'abord on appele les fichiers qui contient la classe Employe et Agence :
    require_once ('Employe.class.php');
    require_once ('Agence.class.php');


    // Ensuite on crée des objets à partir de la classe Employe:

    $employe1 = new Employe();
    $employe1->setPrime(100, 2020);
    $employe1->setModeResto('resto', 'Amiens');
    $employe1->chequeVacance(2020);
    echo '<br>';
    
    $employe2 = new Employe();
    $employe2->setPrime(200, 2019);
    $employe2->setModeResto('ticket', 'Paris');
    $employe2->chequeVacance(2019);
    echo '<br>';

    $employe3 = new Employe();
    $employe3->setPrime(300, 2018);
    $employe3->setModeResto('ticket', 'Lille');
    $employe3->chequeVacance(2018);
    echo '<br>';

    $employe4 = new Employe();
    $employe4->setPrime(100, 2017);
    echo '<br>';

    $employe5 = new Employe();
    $employe5->setPrime(100, 2016);





?>
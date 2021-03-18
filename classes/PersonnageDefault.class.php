<?php

    // D'abord on appele le fichier 'Personnage.class.php' qui contient la classe Personnage qui est la parente de la classe PersonnageDefault :
    require ('Personnage.class.php');


    /* 
    On crée la classe-enfant PersonnageDefault et on la modifie de sorte qu'à la création d'un Personnage par défaut, 
    celui-ci ait pour nom "Loper", pour prénom "Dave", son age est de 18 ans et son sexe "masculin" 
    */

    class PersonnageDefault extends Personnage
    {
        private $_nom;
        private $_prenom;
        private $_age;
        private $_sexe;
        
        function __construct()
        { 
            $this->setNom("Loper"); 
            $this->setPrenom("Dave"); 
            $this->setAge(18); 
            $this->setSexe("Masculin"); 
        }
    
    }


?>
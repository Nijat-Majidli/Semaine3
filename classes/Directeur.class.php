<?php

    // D'abord on appele le fichier 'Employe.class.php' qui contient la classe Employe qui est la parente de la classe Directeur :
    require ('Employe.class.php');


    // On crée la classe-enfant Directeur :

    class Directeur extends Employe
    {
        
        // On écrit une méthode (fonction) qui nous affiche le montant de prime et la date de transfert  :
        
        public function calculPrime($salaireAnnuel, $anneeEmbauche)
        {    
            $salaireDirecteur = $this->setSalaire($salaireAnnuel);

            $ancienneteDirecteur = $this->getAnciennete(); 
                        
            $prime = $salaireDirecteur*0.07 + ($salaireDirecteur*0.03) * $ancienneteDirecteur;

            $objetDate = new DateTime();
            
            $today = $objetDate->format("d-m-Y");

            echo "Le " . $today . " ordre de transfert a été envoyé à la banque pour un montant de " . $prime . " euros de prime.";
            echo '<br>';
        }
    }


?>
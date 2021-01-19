<?php

    // D'abord on appele le fichier 'Agence.class.php' qui contient la classe Agence qui est la parente de la classe Employe :
    require ('Agence.class.php');


    // On crée la classe fille Employe :

    class Employe extends Agence
    {
        // Les attributs privé :
        private $_nom;
        private $_prenom;
        private $_dateEmbauche;
        private $_fonction;
        private $_salaire;
        private $_service;
        private $_experience;


        // Les attributs constante :
        const AGE_PETIT = array(0,1,2,3,4,5,6,7,8,9,10);
        const AGE_MOYEN = array(11,12,13,14,15);
        const AGE_GRAND = array(16,17,18); 


        // D'abord on écrit les méthodes accesseurs (getters) qui nous renvoient la valeur de chaque attribut privé :

        public function getNom()
        { 
            return $this->_nom;  
        }

        public function getPrenom()
        { 
            return $this->_prenom;  
        }

        public function getDateEmbauche()
        {
            return $this->_dateEmbauche;  
        }

        public function getFonction()
        { 
            return $this->_fonction;  
        }

        public function getSalaire()
        { 
            return $this->_salaire;  
        }

        public function getService()
        { 
            return $this->_service;  
        }

        public function getExperience()
        { 
            return $this->_experience;  
        }


        // Ensuite il faut écrire les méthodes mutateurs (setters) pour attribuer une valeur à chaque attribut privé :

        public function setNom($nomEmploye)
        { 
            return $this->_nom = $nomEmploye;  
        }

        public function setPrenom($prenomEmploye)
        { 
            return $this->_prenom = $prenomEmploye;  
        }

        public function setDateEmbauche($anneeEmbauche)
        {
            return $this->_dateEmbauche = $anneeEmbauche;  
        }

        public function setFonction($fonctionEmploye)
        { 
            return $this->_fonction = $fonctionEmploye;  
        }

        public function setSalaire($salaireAnnuel)
        { 
            return $this->_salaire = $salaireAnnuel;  
        }

        public function setService($serviceEmploye)
        { 
            return $this->_service = $serviceEmploye;  
        }
        
        public function setExperience($anneeEmbauche)
        {   
            $objetDate = new DateTime();
            
            $anneeActuelle = $objetDate->format("Y");

            return $this->_experience = ($anneeActuelle - $this->setDateEmbauche($anneeEmbauche));     // Différence entre l'année actuelle et l'année d'embauche 
        }
        


        // On écrit une méthode mutateur (setter) qui nous affiche le montant de prime et la date de transfert  :
        
        public function setPrime($salaireAnnuel, $anneeEmbauche)
        {    
            $salaireEmploye = $this->setSalaire($salaireAnnuel);

            $ancienneteEmploye = $this->setExperience($anneeEmbauche); 
                        
            $prime = $salaireEmploye*0.05 + ($salaireEmploye*0.02)*$ancienneteEmploye;

            $objetDate = new DateTime();
            
            $today = $objetDate->format("d-m-Y");

            echo "Le " . $today . " ordre de transfert a été envoyé à la banque pour un montant de " . $prime . " euros de prime.";
            echo '<br>';
        }

        

        // On écrit une méthode qui nous affiche si l'employé a le droit d’avoir des Chèques Vacances ou non  :

        public function chequeVacance($anneeEmbauche)
        {
            $ancienneteEmploye = $this->setExperience($anneeEmbauche);
            
            if($ancienneteEmploye>1)
            {
                echo 'Vous avez le droit d’avoir des chèques de vacances.';
                echo '<br>';
            }
            else
            {
                echo 'Vous n\'avez pas le droit d’avoir des chèques de vacances.';
                echo '<br>';
            }
        }



        // On écrit une méthode qui nous affiche  si l’employé a le droit d’avoir des Chèques Noël ou non  :

        public function chequeNoel($ageEnfant, $nombreEnfant)
        {
            if (!is_int($ageEnfant) || !is_int($nombreEnfant))     // S'il ne s'agit pas d'un nombre entier.
            {
                echo 'L\'age et le nombre d\'enfant doivent être un nombre entier';
                echo '<br>';
                return;
            }
            
            // Maintenant on vérifie qu'on nous donne bien soit une « AGE_PETIT », soit une « AGE_MOYEN », soit une « AGE_GRAND »

            if(in_array($ageEnfant, self::AGE_PETIT))     
            {  
                    $nombreCheque = $nombreEnfant;
                    
                    echo 'Vous avez le droit d’avoir ' . $nombreCheque . ' chèques de Noël chacun de 20 euros';
                    echo '<br>';
                    return;
            }

            if(in_array($ageEnfant, self::AGE_MOYEN))     
            {  
                    $nombreCheque = $nombreEnfant;
                    
                    echo 'Vous avez le droit d’avoir ' . $nombreCheque . ' chèques de Noël chacun de 30 euros';
                    echo '<br>';
                    return;
            }
            
            if(in_array($ageEnfant, self::AGE_GRAND))  
            {
                    $nombreCheque = $nombreEnfant;
                    
                    echo 'Vous avez le droit d’avoir ' . $nombreCheque . ' chèques de Noël chacun de 50 euros';
                    echo '<br>';
                    return;
            }
            
            else
            {
                echo 'Vous n\'avez pas le droit d’avoir des chèques de Noël.';
                echo '<br>';
            }
        }


    }





?>
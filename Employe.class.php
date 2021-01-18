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
   


        // Puis on écrit une méthode mutateur(setter) qui nous retourne le nombre d'année d'ancienneté d'un employé :
        
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
            if($ageEnfant>=0 || $ageEnfant<=10)
            {
                echo 'Vous avez le droit d’avoir des chèques de Noël.';
                
                $nombreCheque = $ageEnfant*$nombreEnfant;
            }
            else
            {
                echo 'Vous n\'avez pas le droit d’avoir des chèques de Noël.';
                echo '<br>';
            }
        }


    }





?>
<?php

    class Directeur
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
            $salaireDirecteur = $this->setSalaire($salaireAnnuel);

            $ancienneteDirecteur = $this->setExperience($anneeEmbauche); 
                        
            $prime = $salaireDirecteur*0.07 + ($salaireDirecteur*0.03)*$ancienneteDirecteur;

            $objetDate = new DateTime();
            
            $today = $objetDate->format("d-m-Y");

            echo "Le " . $today . " ordre de transfert a été envoyé à la banque pour un montant de " . $prime . " euros de prime.";
            echo '<br>';
        }
    }


?>
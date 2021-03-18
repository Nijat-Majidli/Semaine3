<?php

    class Personnage
    {
        private $_nom;
        private $_prenom;
        private $_age;
        private $_sexe;


        // D'abord on écrit les méthodes accesseurs (getters) qui nous renvoient la valeur de chaque attribut :
        
        public function getNom()
        { 
            return $this->_nom;  
        }

        public function getPrenom()
        { 
            return $this->_prenom;  
        }

        public function getAge()
        { 
            return $this->_age;  
        }

        public function getSexe()
        { 
            return $this->_sexe;  
        }

        
        // Ensuite il faut écrire les méthodes mutateurs (setters) pour attribuer une valeur à chaque attribut :

        public function setNom($nomEmploye)
        { 
            return $this->_nom = $nomEmploye;  
        }

        public function setPrenom($prenomEmploye)
        { 
            return $this->_prenom = $prenomEmploye;  
        }

        public function setAge($ageEmploye)
        { 
            return $this->_age = $ageEmploye;  
        }

        public function setSexe($sexeEmploye)
        { 
            return $this->_sexe = $sexeEmploye;  
        }
    
    }




?>
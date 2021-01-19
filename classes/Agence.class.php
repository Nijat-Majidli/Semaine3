<?php

    class Agence
    {
        // Les attributs privé :
        private $_nomAgence;
        private $_adresseAgence;
        private $_codePostalAgence;
        private $_villeAgence;
        private $_resto;


        // D'abord on écrit les méthodes accesseurs (getters) qui nous renvoient la valeur de chaque attribut privé :

        public function getNomAgence()
        { 
            return $this->_nomAgence;  
        }

        public function getAdresseAgence()
        { 
            return $this->_adresseAgence;  
        }

        public function getCodePostalAgence()
        { 
            return $this->_codePostalAgence;  
        }

        public function getVilleAgence()
        { 
            return $this->_villeAgence;  
        }


        // Ensuite il faut écrire les méthodes mutateurs (setters) pour attribuer une valeur à chaque attribut privé :

        public function setNomAgence($nomAgence)
        { 
            return $this->_nomAgence = $nomAgence;  
        }

        public function setAdresseAgence($adresseAgence)
        { 
            return $this->_adresseAgence = $adresseAgence;  
        }

        public function setCodePostalAgence($codePostalAgence)
        { 
            return $this->_codePostalAgence = $codePostalAgence;  
        }

        public function setVilleAgence($villeAgence)
        { 
            return $this->_villeAgence = $villeAgence;  
        }



        // On écrit une méthode mutateur (setter) qui nous retourne le mode de restauration de chaque agence :

        public function setModeResto($modeResto, $nomAgence)
        { 
            $this->_resto = $modeResto; 

            $agence = $this->setNomAgence($nomAgence);       

            echo 'Le mode de restauration de l\'agence ' . $agence . ' est ' . $this->_resto = $modeResto . '.' ;
            echo '<br>';
        }

    }


?>
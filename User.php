<?php

    class User {
        
        /* Member variables */
       private $name;
       private $surname;
       private $monthlyCosts = array();
       private $subject = array();
       
        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }
    
        /**
         * @return mixed
         */
        public function getSurname()
        {
            return $this->surname;
        }
    
        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }
    
        /**
         * @param mixed $surname
         */
        public function setSurname($surname)
        {
            $this->surname = $surname;
        }
        
        /**
         * @return multitype:
         */
        public function getMonthlyCosts()
        {
            return $this->monthlyCosts;
        }
    
        /**
         * @param multitype: $monthlyCosts
         */
        public function setMonthlyCosts($monthlyCosts)
        {
            $this->monthlyCosts = $monthlyCosts;
        }
    
    }
?>
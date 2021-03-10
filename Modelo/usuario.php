<?php
    class Usuario{
        private $id;
        private $user;
        private $email;
        private $senha;
        private $sexo;
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i; 
        }

        public function getUser(){
            return $this->user;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function getSexo(){
            return $this->sexo;
        }

        public function setUser($u){
            $this->user = $u;
        }
        public function setEmail($e){
            $this->email = $e;
        }
        public function setSenha($s){
            $this->senha = $s;
        }
        public function setSexo($s){
            $this->sexo = $s;
        }
    }
?>  

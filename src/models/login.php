<?php
    class LoginModel {
        private $username="";
        private $password="";

        function construct($username, $password){
            $this->username = $username;
            $this->password = $password;
        }

        public function getUsername(){
            return $this->username;
        }
        public function setUsername($username){
            $this->username = $username;
        }

        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password = $password;
        }

        public static function CheckLogin(LoginModel $login): bool{
            $username = $login->getUsername();
            $password = $login->getPassword();
            $query = "SELECT Id_usuario FROM Usuarios WHERE Username = '$username' AND Password = '$password'";
            $dbconn = new MySQLdb();
            $data = $dbconn->query($query);
            return count($data) > 0;

        }
    }
?>
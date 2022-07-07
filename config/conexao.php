<?php

    class Conexao{
        static $host = 'sql202.epizy.com';
        static $user = 'epiz_32120399';
        static $pass = 'UiJuA3jVlTnF';
        static $database = 'epiz_32120399_projeto_final';
        static $port = '3306';
        static $con;

        public static function getConnection(){
            if(!self::$con){
                self::$con = new mysqli(self::$host, self::$user,self::$pass, self::$database, self::$port);
                if(self::$con->connect_error){
                    echo "Ocorreu um erro" . self::$con->connect_error;
                    die();
                }
            }
            return self::$con;
        }
    }
?>
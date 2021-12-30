<?php 

    class conect {


            private static $instance;

            private static function  getcon() {
                
                $host = 'localhost';
                $bd_name = 'teste_higor';
                $username = 'root';
                $password = '';


                if(!isset(self::$instance)) {
                    self::$instance = new PDO("mysql:host=$host;dbname=$bd_name;charset=utf8,
                    $username,$password");
                } else {

                    return self::$instance;

                }
            }


    }


?>
<?php 
    namespace App\Model;

    class Connect{

        private static $instace;//VARIAVEL PARA PEGAR A INSTANCIA

        public static function getCon(){
            if(!isset(self::$instace)){
                //CRIA UMA INSTANCIA PARA CONEXÃO DO BANCO DE DADOS VIA PDO
                self::$instace = new \PDO('mysql:host=localhost;dbname=tasklist','root','');
            }
    
            return self::$instace;
        }
    }
?>
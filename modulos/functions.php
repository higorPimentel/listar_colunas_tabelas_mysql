<?php 

date_default_timezone_set('America/Sao_Paulo');
$tipo_requisicao = $_POST['tipo_requisicao'];



    //require_once('cn.php');
    session_start();    
    //$_SESSION['conn'] = $conn;    




        if($tipo_requisicao ==1) {
            echo(valida_conexao());
        } elseif ($tipo_requisicao ==2) { 
           // echo(select_itens_cad());
        }


function valida_conexao() {

    $host = $_POST['host'];
    $database= $_POST['database'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $cn = mysqli_connect($host,$username,$password, $database);

        if($cn) {
            $conect = 0;
        } else {
            $conect = 1;
        }

        return $conect; 


}



?>
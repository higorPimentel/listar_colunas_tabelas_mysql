<?php 


ini_set('error_reporting', E_ALL & ~E_STRICT & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('America/Sao_Paulo');
$tipo_requisicao = $_POST['tipo_requisicao'];



    //require_once('cn.php');
    session_start();    
    //$_SESSION['conn'] = $conn;    




        if($tipo_requisicao ==1) {
            echo(valida_conexao());
        } elseif ($tipo_requisicao ==2) { 
            echo(list_cols_tables());
        }



function list_cols_tables() {

    $host = $_POST['host'];
    $bd_name= $_POST['database'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $cn = mysqli_connect($host,$username,$password, $bd_name);


    $query_shw = "SHOW TABLES FROM $bd_name";
    $process_query = mysqli_query($cn,$query_shw);
    $lns = $process_query->num_rows;
    
    
    
        /*   ITERA SOBRE CADA TABELA   */
        for ($i=0; $i < $lns;$i++) { 
           
              $tabela = mysqli_fetch_assoc($process_query);
              $tabela = $tabela['Tables_in_' . $bd_name];
    
         
              $query_tb = "SHOW COLUMNS FROM  $tabela";
              $process_query2 = mysqli_query($cn,$query_tb);
              $lns2 = $process_query2->num_rows;
             
             
                /* ITERA SOBRE AS COLUNAS DAS TABELAS  */
                for ($k=0; $k < $lns2;$k++) {  
    
                        $colunas = mysqli_fetch_assoc($process_query2);
                       
                        $colunas_array [] = $arrayName = array('Tabela' => $tabela,
                                                               'Field'  =>  $colunas['Field'],
                                                               'Type'  =>  $colunas['Type']
                                           );
    
                    }
                    
           
    
        }


        $array_ret  = array('qtd_tabelas' => $lns,
                            'qtd_colunas' => $lns2,
                            'dados_colunas' => $colunas_array
    
    );
    
    return json_encode($array_ret);

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
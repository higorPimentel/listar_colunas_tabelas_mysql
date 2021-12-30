<?php 



$host = 'localhost';
$bd_name = 'teste_higor';
$username = 'root';
$password = '';


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


print_r(json_encode($colunas_array));


?>
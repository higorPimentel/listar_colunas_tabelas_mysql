<?php
     include_once('includes/topo.php');
     include_once('includes/modal_load.php');
     
?>
<body>


    <form class="frm_registro" id='frm_regist'>
                    
             <div class="row">	
                <div class="grupo_cxs col-6">
                    <h1>Listar Colunas e Tabelas  - Mysql</h1>
                </div>
            </div>

            <div class="row">	
                <div class="grupo_cxs col-6" >
                    <input class='btns' type="button" value="?">
                </div>
            </div>

            <div class='barra_separa'></div>
                
            <div class="row">	
                <div class="grupo_cxs col-6" > 
                     <h2>Dados de Conexão</h2>
                </div>    
            </div>    
                    <div class="row">	
                            <div class="grupo_cxs col-3" >
                                <label class='lb_text'>Server Host</label>
                                <input class="cx_text" type="text" id="cx_host">											
                            </div>	
                            <div class="grupo_cxs col-3" >
                                <label class='lb_text'>Database</label>
                                <input class="cx_text" type="text" id="cx_database">											
                            </div>	
                    </div>

                    <div class="row">	
                            <div class="grupo_cxs col-3" >
                                <label class='lb_text'>Username</label>
                                <input class="cx_text" type="text" id="cx_username">											
                            </div>	
                            <div class="grupo_cxs col-3" >
                                <label class='lb_text'>Password</label>
                                <input class="cx_text" type="text" id="cx_password">											
                            </div>	
                    </div>
                    <div class="row">	
                            <div class="grupo_cxs col-4" id="grupo_cx_id">
                                <p class='info_database'>> Status - Disconnected</p>
                            </div>
                    </div>

                    <div class="row">	
                            <div class="grupo_cxs col-5  grupo_btns" id="grupo_cx_id">
                                <input class='btns' type="button" value="Testar Conexão" id='btn_tst_con'>
                                <input class='btns' type="button" value="Listar Colunas" id='btn_list_table'>
                        </div>
                    </div>

                    <div class='barra_separa'></div>

                    <div  class="row">	
                            <div class="grupo_cxs col-6" id="grupo_cx_id">
                             
                            <div class='bloc_item'>
                                <p class='tit_result'>Qtd Tabelas Listadas:</p>
                                <p id='result_table'>00000</p>
                            </div>
                            
                            <div class='bloc_item'>
                                <p class='tit_result'>Qtd Colunas Listadas:</p>
                                <p id='result_cols'>00000</p>
                            </div>
                            
                                <div class='container_table'>
                                        <table id='table_list'  class='frmt_tabela_fretes'>
                                        </table>
                                </div>
                            </div>
                     </div>

                    
    </form>

  <?php 
  
    include_once('includes/scripts.php');
  
  ?>
    
</body>
</html>
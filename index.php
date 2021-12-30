<?php
     include_once('includes/topo.php');
?>
<body>


    <form class="frm_registro">
                    
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
                            <div class="grupo_cxs col-3" id="grupo_cx_id">
                                <p class='info_database'>> Database Disconect</p>
                            </div>
                    </div>

                    <div class="row">	
                            <div class="grupo_cxs col-3 grupo_btns" id="grupo_cx_id">
                                <input class='btns' type="button" value="Testar Conexão" id='btn_tst_con'>
                                <input class='btns' type="button" value="Listar Colunas">
                        </div>
                    </div>

                    
    </form>

  <?php 
  
    include_once('includes/scripts.php');
  
  ?>
    
</body>
</html>

let btn_tst_con = document.querySelector("#btn_tst_con")
btn_tst_con.addEventListener('click', valida_conexao,true)



function valida_conexao () {


    let  tipo_requisicao = 1
    let host = $("#cx_host").val()
    let database = $("#cx_database").val()
    let username = $("#cx_username").val()
    let password = $("#cx_password").val()


        desabilita_msgs()


    $.ajax({
        method:'POST',
        url:'modulos/functions.php',
        data:
        {
            tipo_requisicao:tipo_requisicao,
            host:host,
            database:database,
            username:username,
            password:password
        },
        success:function(retorno){
            
            if(retorno ==0) {
                $('.msg_sucesso').html('A conexão com o banco de dados obteve Exito.') 
                exibe_sucess()
            } else {
                $('.msg_erro').html('Erro ao tentar conectar com o banco de dados!!!') 
                exibe_erro()
            }

                
        }

    })


}
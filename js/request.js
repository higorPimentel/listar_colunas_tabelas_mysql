
let btn_tst_con = document.querySelector("#btn_tst_con")
btn_tst_con.addEventListener('click', valida_conexao,true)

let btn_list_table = document.querySelector("#btn_list_table")
btn_list_table.addEventListener('click', list_table,true)



window.addEventListener('load', inicia_app,true)


function inicia_app() {

    conect_bd = 0
}


function list_table() {


     let tipo_requisicao = 2
     let host = $("#cx_host").val()
     let database = $("#cx_database").val()
     let username = $("#cx_username").val()
     let password = $("#cx_password").val()
    
        if(conect_bd ==0) {
            $('.msg_erro').html('Não foi Localizado nenhuma conexão ativa !!') 
            exibe_erro()
            return
        }

     
            $('.container_modal').css('display','block')

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

                    data_return = JSON.parse(retorno)
                    
                    gerar_table_list()
                    console.log(data_return)
                    $('.container_modal').css('display','none')

            }

        })

}


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
                $('.info_database').html('> Status - Connected') 
                $('.info_database').css('backgroundColor','rgba(85,107,47,0.6)') 
                $('.info_database').css('color','white') 
               
                conect_bd = 1
                exibe_sucess()
                
                
            } else {
                $('.msg_erro').html('Erro ao tentar conectar com o banco de dados!!!') 
                $('.info_database').html('> Status - Disconnected') 
                $('.info_database').css('backgroundColor','#ddd7d7') 
                $('.info_database').css('color','#414c5a') 
               
                conect_bd = 0
                exibe_erro()

            }

                
        }

    })
}


function gerar_table_list(){


	var cod = 1	
	let itm = 0
	// var new_table = document.querySelector('.frmt_tabela_fretes')
	 tbl = '';	
	 tbl +='<tr>'	
	 tbl +='<th>Id. Item</th>'
	 tbl +='<th>Tabela</th>'
	 tbl +='<th>Nome Coluna</th>'	
	 tbl +='<th>Tipo</th>'
	
	 tbl +='</tr>'
	
	
	for(let i = 0; i < data_return.dados_colunas.length; i++) { 

        if (cod === 3) {
            cod = 1
        }
        

        if (cod === 1) {
            var cls = 'styline_line_table_2'
        } else if (cod === 2) {
            var cls = 'styline_line_table_1'
        }

            tbl +=`<tr>`
            tbl +=`<td class=${cls} id=it${[i]}>${[i]}</td>`
            tbl +=`<td class=${cls} id=it${[i]}>${data_return.dados_colunas[i].Tabela}</td>`
            tbl +=`<td class=${cls} id=it${[i]}>${data_return.dados_colunas[i].Field}</td>`
            tbl +=`<td class=${cls} id=it${[i]}>${data_return.dados_colunas[i].Type}</td>`
   
                
    tbl +='</tr>'

    cod++;
    itm ++;	
    

    }


        $('#table_list').html(tbl);
        $('#result_table').html(data_return.qtd_tabelas);
        $('#result_cols').html(itm);
       

}


let txt_focus = document.querySelector("#frm_regist")

txt_focus.addEventListener('focus', insere_foco_txt,true)
txt_focus.addEventListener('blur', remove_foco_txt,true)



function insere_foco_txt(event){    

    let elemnt =  event.srcElement.id
    let  type_element  = elemnt.substr(0,2) 
    
    
    if(type_element =='cx') {
         $(`#${elemnt}`).css('box-shadow','0px 0px 10px  #00CED1')

        }
 
 }

 function remove_foco_txt(event){    

    let elemnt =  event.srcElement.id
    let  type_element  = elemnt.substr(0,2) 
    
    
    if(type_element =='cx') {
         $(`#${elemnt}`).css('box-shadow','none')

        }
 
 }




function exibe_erro() {

    $('.msg_erro').css('display','block')
    setTimeout(() => {
        inibie_erro()
    }, 6000);
}

function inibie_erro() {
    $('.msg_erro').css('display','none')
}



function exibe_sucess() {

    $('.msg_sucesso').css('display','block')
    setTimeout(() => {
        inibie_sucess()
    }, 6000);
}

function inibie_sucess() {
    $('.msg_sucesso').css('display','none')
}

function desabilita_msgs() {
    $('.msg_sucesso').css('display','none')
    $('.msg_erro').css('display','none')
}


var posicionAvatarBiologia=0; // almacena la posicion del avatar de la ova para su animacion

/***********************************************************/
/***********************************************************/
/***********************************************************/
/**********************ANIMACIONES**************************/
/***********************************************************/
/***********************************************************/


var animacionAvatarBiologia=null; // almacena la animacion del avatar de biologia

/**
 * Inicia la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function startAnimacionInicioBiologia() {  // use a one-off timer
    stopAnimacionInicioBiologia();
    animacionAvatarBiologia= setInterval(function(){
        moverAvatarBiologia();
    },200);
}

/**
 * Detiene la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function stopAnimacionInicioBiologia() {
    clearTimeout(animacionAvatarBiologia);
}



/**
 * Cambia la animacion del avatar de biologia.
 *  
 * @return {String} Nothing.
 */
function moverAvatarBiologia(){    
    
    if(posicionAvatarBiologia>=limiteAvatar){
        posicionAvatarBiologia =0;
    }
    
    switch(posicionAvatarBiologia){
        case 0:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/conjuntos/avatarBocaCerrada.png";            
            
            break;
            
        case 1:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/conjuntos/avatarNube.png";
            break;  
                                                 
        case 2:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/conjuntos/avatarNube.png";            
            break;                             
    }           
    posicionAvatarBiologia++;            
}





/**
 * Muestra con efecto una determinada imagen oculta con extension png, a partir de su clase
 * 
 * @param {String} clase : Clase del elemento oculto
 * @return {String} Nothing.
 * @description para mas informacion visitar el siguiente enlace http://vagabundia.blogspot.com/2010/01/efectos-elementales-con-jquery.html
 */
function verEtapasMitosis(clase){       
    $('.'+clase).attr('src', 'Vista/imagenes/secuenciacion/divisionCelular/'+clase+'.png');    
    $('.'+clase).fadeIn();
//$('.'+clase).css('display', 'inline');    
}





/******************************************************/
/******************************************************/
/**************PREGUNTAS SELECCION*********************/
/******************************************************/
/******************************************************/










function validarJuego03(tipo){    
    var pregunta1= document.getElementById("txtJuego03Campo01").value;
    var pregunta2= document.getElementById("txtJuego03Campo02").value;
    var pregunta3= document.getElementById("txtJuego03Campo03").value;
    var pregunta4= document.getElementById("txtJuego03Campo04").value;
     
    if(tipo==1){       
        if(pregunta1==40 && pregunta2==20 && pregunta3==20 && pregunta4==50){
            mensajeGeneral("Felicidades has completado la actividad");
            correcto.playclip();
            document.getElementById("txtJuego03Campo01").disabled="disabled";
            document.getElementById("txtJuego03Campo02").disabled="disabled";
            document.getElementById("txtJuego03Campo03").disabled="disabled";
            document.getElementById("txtJuego03Campo04").disabled="disabled";
        } 
    }else{
        if(pregunta1==40 && pregunta2==20 && pregunta3==20 && pregunta4==50){
            mensajeGeneral("Has completado la actividad satisfactoriamente");
        }else{
            mensajeGeneral("Recuerda que no has completado la actividad");
            error.playclip();
        }  
    }
    
    
}







/**************************************/
/**************************************/
/***********VENTANAS INDEPENDIENTES****/
/**************************************/
/**************************************/


/**
 * Abre un fancybox en especifico
 * 
 * 
 * @return {String} Nothing.
 */
function abrirZoomMitosis(){
    $.fancybox({
        'showCloseButton': false,
        'transitionIn': 'fade',
        'hideOnOverlayClick':false, //bloquear click externo
        'scrolling': 'no',
        'href': '#divZoomMitosis',
        'onClosed': function () {            
        }
    });
}

/**
 * Abre un fancybox en especifico del subtema de conectores
 * 
 * 
 * @return {String} Nothing.
 */

function abrirTema(id){        
    
    $.fancybox({
        'showCloseButton': true,
        'transitionIn': 'fade',
        'hideOnOverlayClick':false, //bloquear click externo
        'scrolling': 'no',
        'href': '#div'+id+'conjuntos',
        'onClosed': function () {            
        }
    });
} 




/**
 * Abre un sub fancybox en especifico 
 * 
 * 
 * @return {String} Nothing.
 */
function abrirConector(id){            
    $.fancybox({
        'showCloseButton': false,
        'transitionIn': 'fade',
        'hideOnOverlayClick':false, //bloquear click externo
        'scrolling': 'no',
        'href': '#div'+id+'conjuntos',
        'onClosed': function () {            
        }
    });
}




function navegacionMenu(pagina,tema){        
    posicionSecuencia= parseInt(pagina);
    secuenciaOva(tema);    
} 



function reproducirAudio(id){    
    document.getElementById(id).load();
    document.getElementById(id).play();    
}


function detenerAudio(id){    
    document.getElementById(id).pause();    
}













var posicionAvatarMatematicaNino=0; // almacena la posicion del avatar de la ova para su animacion
/***********************************************************/
/***********************************************************/
/***********************************************************/
/**********************ANIMACIONES**************************/
/***********************************************************/
/***********************************************************/


var animacionAvatarMatematicaNino=null; // almacena la animacion del avatar de MatematicaNino

/**
 * Inicia la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function startAnimacionInicioMatematicaNino() {  // use a one-off timer
    stopAnimacionInicioMatematicaNino();
    animacionAvatarMatematicaNino= setInterval(function(){
        moverAvatarMatematicaNino();
    },200);
}

/**
 * Detiene la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function stopAnimacionInicioMatematicaNino() {
    clearTimeout(animacionAvatarMatematicaNino);
}



/**
 * Cambia la animacion del avatar de MatematicaNino.
 *  
 * @return {String} Nothing.
 */
function moverAvatarMatematicaNino(){    
    
    if(posicionAvatarMatematicaNino>=3){
        posicionAvatarMatematicaNino =0;
    }
    
    switch(posicionAvatarMatematicaNino){
        case 0:
            document.getElementById('avatarMatematicaNino').src = "Vista/imagenes/universo/conjuntos/avatarBocaCerradaNino.png";            
            
            break;
            
        case 1:
            document.getElementById('avatarMatematicaNino').src = "Vista/imagenes/universo/conjuntos/avatarNubeNino.png";
            break;  
                                                 
        case 2:
            document.getElementById('avatarMatematicaNino').src = "Vista/imagenes/universo/conjuntos/avatarNubeNino.png";            
            break;                             
    }           
    posicionAvatarMatematicaNino++;            
}







var posicionAvatarMatematicaNina=0; // almacena la posicion del avatar de la ova para su animacion
/***********************************************************/
/***********************************************************/
/***********************************************************/
/**********************ANIMACIONES**************************/
/***********************************************************/
/***********************************************************/


var animacionAvatarMatematicaNina=null; // almacena la animacion del avatar de MatematicaNina

/**
 * Inicia la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function startAnimacionInicioMatematicaNina() {  // use a one-off timer
    stopAnimacionInicioMatematicaNina();
    animacionAvatarMatematicaNina= setInterval(function(){
        moverAvatarMatematicaNina();
    },200);
}

/**
 * Detiene la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function stopAnimacionInicioMatematicaNina() {
    clearTimeout(animacionAvatarMatematicaNina);
}



/**
 * Cambia la animacion del avatar de MatematicaNina.
 *  
 * @return {String} Nothing.
 */
function moverAvatarMatematicaNina(){    
    
    if(posicionAvatarMatematicaNina>=3){
        posicionAvatarMatematicaNina =0;
    }
    
    switch(posicionAvatarMatematicaNina){
        case 0:
            document.getElementById('avatarMatematicaNina').src = "Vista/imagenes/universo/conjuntos/avatarBocaCerradaNina.png";            
            
            break;
            
        case 1:
            document.getElementById('avatarMatematicaNina').src = "Vista/imagenes/universo/conjuntos/avatarNubeNina.png";
            break;  
                                                 
        case 2:
            document.getElementById('avatarMatematicaNina').src = "Vista/imagenes/universo/conjuntos/avatarNubeNina.png";            
            break;                             
    }           
    posicionAvatarMatematicaNina++;            
}

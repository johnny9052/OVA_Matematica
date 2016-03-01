
/**
* Función que se ejecuta al arrastrar el elemento. 
**/
function start(e) {
    e.dataTransfer.effecAllowed = 'move'; // Define el efecto como mover (Es el por defecto)
    e.dataTransfer.setData("Text", e.target.id); // Coje el elemento que se va a mover
    e.target.style.opacity = '0.4'; 
}

/**
* Función que se ejecuta se termina de arrastrar el elemento. 
**/
function end(e){
    e.target.style.opacity = ''; // Restaura la opacidad del elemento			
    e.dataTransfer.clearData("Data");			
}

/**
* Función que se ejecuta cuando un elemento arrastrable entra en el elemento desde del que se llama. 
**/
function enter(e) {
    return true;
}

/**
* Función que se ejecuta cuando un elemento arrastrable esta sobre el elemento desde del que se llama. 
* Devuelve false si el objeto se puede soltar en ese elemento y true en caso contrario.
**/
function over(e) {
    if ((e.target.className == "contenedorPieza") || (e.target.id == "contenedorPiezas")|| (e.target.id == "contenedoresJuego02") || (e.target.id == "contenedoresJuego04") || (e.target.id == "contenedoresJuego05"))
        return false;
    else
        return true;
}

/**
* Muestra un mensaje de advertencia si el navegador no soporta Drag & Drop. (En Windows no lo soportan ni IE ni Safari)
**/
function comprobarnavegador() {
    if( 
        (navigator.userAgent.toLowerCase().indexOf('msie ') > -1) || 
        ((navigator.userAgent.toLowerCase().indexOf('safari') > -1) && (navigator.userAgent.toLowerCase().indexOf('chrome') == -1)))
        {
        alert("Tu navegador no soporta correctamente las funciones Drag & Drop de HTML5. Prueba con otro navegador.");
    }

}



/*******************************************/
/*******************************************/
/**************ACCIONES POR OVA*************/
/*******************************************/
/*******************************************/


/**********************CONJUNTOS JUEGO 01******************************/



/**
* Función que se ejecuta cuando un elemento arrastrable se suelta sobre el elemento desde del que se llama. 
**/
function dropConjuntos(e,numeroJuego){
    e.preventDefault(); // Evita que se ejecute la accion por defecto del elemento soltado.
    var elementoArrastrado = e.dataTransfer.getData("Text");
    e.target.appendChild(document.getElementById(elementoArrastrado)); // Coloca el elemento soltado sobre el elemento desde el que se llamo esta funcion
    
    switch(numeroJuego){
        case 1:
            comprobarPuzzleConjuntosJuegoUno(1);
            break;
        case 2:
            comprobarPuzzleConjuntosJuegoDos(1);
            break;
        
        case 4:
            comprobarPuzzleConjuntosJuegoCuatro(1);
            break;
            
            
        case 5:
            comprobarPuzzleConjuntosJuegoCinco(1);
            break;
    }        
}



/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzleConjuntosJuegoUno(tipo){
    if(tipo==1){
        if((document.getElementById('pieza1ConjuntosJuegoUno').parentNode.id=='unoConjuntosJuegoUno') &&
            (document.getElementById('pieza4ConjuntosJuegoUno').parentNode.id=='dosConjuntosJuegoUno') &&
            (document.getElementById('pieza2ConjuntosJuegoUno').parentNode.id=='tresConjuntosJuegoUno') &&
            (document.getElementById('pieza3ConjuntosJuegoUno').parentNode.id=='cuatroConjuntosJuegoUno'))
            
            {
            mensajeGeneral('Felicidades, has terminado la secuencia.');
            correcto.playclip();
        }
    }else{
        if((document.getElementById('pieza1ConjuntosJuegoUno').parentNode.id=='unoConjuntosJuegoUno') &&
            (document.getElementById('pieza4ConjuntosJuegoUno').parentNode.id=='dosConjuntosJuegoUno') &&
            (document.getElementById('pieza2ConjuntosJuegoUno').parentNode.id=='tresConjuntosJuegoUno') &&
            (document.getElementById('pieza3ConjuntosJuegoUno').parentNode.id=='cuatroConjuntosJuegoUno'))
            
            {
            mensajeGeneral('Completaste la actividad satisfactoriamente');
        }else{
            mensajeGeneral('Recuerda que no has completado la actividad');
            error.playclip();
        }
    }
}




/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzleConjuntosJuegoDos(tipo){
    
    if(tipo==1){
        if(((document.getElementById('pieza1ConjuntosJuegoDos').parentNode.id=='unoConjuntosJuegoDos') ||
            (document.getElementById('pieza1ConjuntosJuegoDos').parentNode.id=='dosConjuntosJuegoDos') ||
            (document.getElementById('pieza1ConjuntosJuegoDos').parentNode.id=='tresConjuntosJuegoDos')) &&
        
        ((document.getElementById('pieza2ConjuntosJuegoDos').parentNode.id=='cuatroConjuntosJuegoDos') ||
            (document.getElementById('pieza2ConjuntosJuegoDos').parentNode.id=='cincoConjuntosJuegoDos') ||
            (document.getElementById('pieza2ConjuntosJuegoDos').parentNode.id=='seisConjuntosJuegoDos')) &&
        
        ((document.getElementById('pieza3ConjuntosJuegoDos').parentNode.id=='cuatroConjuntosJuegoDos') ||
            (document.getElementById('pieza3ConjuntosJuegoDos').parentNode.id=='cincoConjuntosJuegoDos') ||
            (document.getElementById('pieza3ConjuntosJuegoDos').parentNode.id=='seisConjuntosJuegoDos')) &&
        
        ((document.getElementById('pieza4ConjuntosJuegoDos').parentNode.id=='unoConjuntosJuegoDos') ||
            (document.getElementById('pieza4ConjuntosJuegoDos').parentNode.id=='dosConjuntosJuegoDos') ||
            (document.getElementById('pieza4ConjuntosJuegoDos').parentNode.id=='tresConjuntosJuegoDos')) &&
        
        ((document.getElementById('pieza5ConjuntosJuegoDos').parentNode.id=='cuatroConjuntosJuegoDos') ||
            (document.getElementById('pieza5ConjuntosJuegoDos').parentNode.id=='cincoConjuntosJuegoDos') ||
            (document.getElementById('pieza5ConjuntosJuegoDos').parentNode.id=='seisConjuntosJuegoDos')))
            
            
            {
            mensajeGeneral('Felicidades, has terminado la secuencia.');
            correcto.playclip();
        }
    }else{
        if(((document.getElementById('pieza1ConjuntosJuegoDos').parentNode.id=='unoConjuntosJuegoDos') ||
            (document.getElementById('pieza1ConjuntosJuegoDos').parentNode.id=='dosConjuntosJuegoDos') ||
            (document.getElementById('pieza1ConjuntosJuegoDos').parentNode.id=='tresConjuntosJuegoDos')) &&
        
        ((document.getElementById('pieza2ConjuntosJuegoDos').parentNode.id=='cuatroConjuntosJuegoDos') ||
            (document.getElementById('pieza2ConjuntosJuegoDos').parentNode.id=='cincoConjuntosJuegoDos') ||
            (document.getElementById('pieza2ConjuntosJuegoDos').parentNode.id=='seisConjuntosJuegoDos')) &&
        
        ((document.getElementById('pieza3ConjuntosJuegoDos').parentNode.id=='cuatroConjuntosJuegoDos') ||
            (document.getElementById('pieza3ConjuntosJuegoDos').parentNode.id=='cincoConjuntosJuegoDos') ||
            (document.getElementById('pieza3ConjuntosJuegoDos').parentNode.id=='seisConjuntosJuegoDos')) &&
        
        ((document.getElementById('pieza4ConjuntosJuegoDos').parentNode.id=='unoConjuntosJuegoDos') ||
            (document.getElementById('pieza4ConjuntosJuegoDos').parentNode.id=='dosConjuntosJuegoDos') ||
            (document.getElementById('pieza4ConjuntosJuegoDos').parentNode.id=='tresConjuntosJuegoDos')) &&
        
        ((document.getElementById('pieza5ConjuntosJuegoDos').parentNode.id=='cuatroConjuntosJuegoDos') ||
            (document.getElementById('pieza5ConjuntosJuegoDos').parentNode.id=='cincoConjuntosJuegoDos') ||
            (document.getElementById('pieza5ConjuntosJuegoDos').parentNode.id=='seisConjuntosJuegoDos')))
            
            
            {
            mensajeGeneral('Completaste la actividad satisfactoriamente');
        }else{
            mensajeGeneral('Recuerda que no has completado la actividad');
            error.playclip();
        }
    }
}










/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzleConjuntosJuegoCuatro(tipo){
    
    if(tipo==1){
        if(((document.getElementById('pieza1ConjuntosJuegoCuatro').parentNode.id=='unoConjuntosJuegoCuatro')) &&
            
            ((document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            
            ((document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            
            ((document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            
            
            ((document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            
            
            ((document.getElementById('pieza6ConjuntosJuegoCuatro').parentNode.id=='seisConjuntosJuegoCuatro') ||
                (document.getElementById('pieza6ConjuntosJuegoCuatro').parentNode.id=='sieteConjuntosJuegoCuatro')) &&
            
            
            ((document.getElementById('pieza7ConjuntosJuegoCuatro').parentNode.id=='seisConjuntosJuegoCuatro') ||
                (document.getElementById('pieza7ConjuntosJuegoCuatro').parentNode.id=='sieteConjuntosJuegoCuatro')) &&
            
            
            ((document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            
            ((document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            ((document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')))
                
                
                {
            mensajeGeneral('Felicidades, has terminado la secuencia.');
            correcto.playclip();
        }   
    }else{
        if(((document.getElementById('pieza1ConjuntosJuegoCuatro').parentNode.id=='unoConjuntosJuegoCuatro')) &&
            
            ((document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza2ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            
            ((document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza3ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            
            ((document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza4ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            
            
            ((document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza5ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            
            
            ((document.getElementById('pieza6ConjuntosJuegoCuatro').parentNode.id=='seisConjuntosJuegoCuatro') ||
                (document.getElementById('pieza6ConjuntosJuegoCuatro').parentNode.id=='sieteConjuntosJuegoCuatro')) &&
            
            
            ((document.getElementById('pieza7ConjuntosJuegoCuatro').parentNode.id=='seisConjuntosJuegoCuatro') ||
                (document.getElementById('pieza7ConjuntosJuegoCuatro').parentNode.id=='sieteConjuntosJuegoCuatro')) &&
            
            
            ((document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza8ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            
            ((document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza9ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')) &&
            
            ((document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='dosConjuntosJuegoCuatro') ||
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='treConjuntosJuegoCuatro') ||
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='cuatroConjuntosJuegoCuatro') ||
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='cincoConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='ochoConjuntosJuegoCuatro') ||
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='nueveConjuntosJuegoCuatro') ||                
                (document.getElementById('pieza10ConjuntosJuegoCuatro').parentNode.id=='diezConjuntosJuegoCuatro')))
                
                
                {
            mensajeGeneral('Has terminado la actividad satisfactoriamente');
        }else{
            mensajeGeneral("Recuerda que no has terminado la actividad");
            error.playclip();
        }
    }
}






/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzleConjuntosJuegoCinco(tipo){
    if(tipo==1){
        if((document.getElementById('pieza1ConjuntosJuegoCinco').parentNode.id=='unoConjuntosJuegoCinco') &&
            (document.getElementById('pieza2ConjuntosJuegoCinco').parentNode.id=='dosConjuntosJuegoCinco') &&
            (document.getElementById('pieza3ConjuntosJuegoCinco').parentNode.id=='tresConjuntosJuegoCinco') &&
            (document.getElementById('pieza4ConjuntosJuegoCinco').parentNode.id=='cuatroConjuntosJuegoCinco') &&            
            (document.getElementById('pieza5ConjuntosJuegoCinco').parentNode.id=='unoConjuntosJuegoSeis'))            
            {
            mensajeGeneral('Felicidades, has terminado la secuencia.');
            correcto.playclip();
        }
    }else{
        if((document.getElementById('pieza1ConjuntosJuegoCinco').parentNode.id=='unoConjuntosJuegoCinco') &&
            (document.getElementById('pieza2ConjuntosJuegoCinco').parentNode.id=='dosConjuntosJuegoCinco') &&
            (document.getElementById('pieza3ConjuntosJuegoCinco').parentNode.id=='tresConjuntosJuegoCinco') &&
            (document.getElementById('pieza4ConjuntosJuegoCinco').parentNode.id=='cuatroConjuntosJuegoCinco') &&            
            (document.getElementById('pieza5ConjuntosJuegoCinco').parentNode.id=='unoConjuntosJuegoSeis'))     
            
            {
            mensajeGeneral('Has completado la actividad satisfactoriamente');
        }else{
            mensajeGeneral('Recuerda que no has completado la actividad');
            error.playclip();
        }
    }
}
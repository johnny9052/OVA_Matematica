<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <!--JAVASCRIPTS PROPIOS DE LA OVA-->
        <script type="text/javascript" src="Vista/js/ovaNavegacion.js"></script>  
        <script type="text/javascript" src="Vista/js/efectos/dragAndDrop.js"></script>          

        <title></title>      
    </head>
    <body>




        <!--OVA CONJUNTOS-->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->

        <!--PRIMER NIVEL-->
        <div style="display: none;">
            <div id="div1conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">INFORMACIÓN OVA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="1" class="alineacionIzquierda">
                                <label class="subtituloDorado">TÍTULO:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Introduccion a la teoria de conjuntos</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">DESCRIPCIÓN:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"></label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Idioma:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Español</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Autores:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Profesor Departamento de Matemáticas Universidad de Caldas Leonel L. Palomá Parra.</label><br/>
                                <label class="texto">Estudiantes de Geologia Karol Tatiana Dussan Tapias, </label>
                                <label class="texto">Maydy Alejandra Ortiz Trujillo.</label><br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Entidad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Universidad de Caldas y Ministerio de Educación Nacional</label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                <label class="titulo">PROCESOS FORMATIVOS</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Tipo:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Auto aprendizaje.</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Tipo <br/> Interactividad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"> 
                                    &nbsp;&nbsp;&nbsp;*Activa (para los contenidos interactivos)<br/>
                                    &nbsp;&nbsp;&nbsp;*Expositiva <br/>
                                    &nbsp;&nbsp;&nbsp;*Mixto</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Recurso:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Es de distintos tipos: ejercicio,texto y autoevaluación.</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Nivel <br/> Interactividad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Medio</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Población:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Estudiantes Universidad de Caldas.</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Contexto:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Educación superior</label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--SEGUNDO NIVEL-->
        <div style="display: none;">
            <div id="div2conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">BIENVENIDO</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>  
                        <tr>
                            <td>
                                <audio id="audio2Conjuntos" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaMatematica/Vista/audio/conjuntos/Track2.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3">
                                <img id="avatarBienvenidaCelula" src="Vista/imagenes/universo/conjuntos/avatarNube.png" class="avatar"/>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--TERCER NIVEL-->
        <div style="display: none;">
            <div id="div3conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">              
                    <tr>
                        <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                            <?php
                            include("Vista/menusNavegacion/menuConjuntos.php");
                            ?>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                            <label class="texto">Anterior</label>
                        </td> 
                        <td colspan="1">
                            <span class="titulo">OBJETIVOS</span>
                        </td>    
                        <td>
                            <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                            <label class="texto">Siguiente</label>
                        </td>
                    </tr>    
                    <tr>
                        <td class="linea" colspan="3">
                            -----------------------------------------------------------------------------------------------------------
                        </td>
                    </tr> 

                    <tr>                            
                        <td colspan="3" class="alineacionIzquierda">
                            <label class="subtituloDorado">
                                General<br/>
                            </label>                           
                        </td>                     
                    </tr>


                    <tr>                            
                        <td colspan="3" class="alineacionIzquierda">
                            <label class="texto">
                                &nbsp;&nbsp; Introducción a la teoría de conjuntos<br/>
                            </label>                          
                        </td>                     
                    </tr>



                    <tr>
                        <td colspan="3" class="alineacionIzquierda">
                            <label class="subtituloDorado">
                                Específicos<br/>
                            </label>                           
                        </td>
                    </tr>


                    <tr>
                        <td colspan="3" class="alineacionIzquierda">
                            <label class="texto">
                                &nbsp;&nbsp; 1. Introducción a la lógica matemática<br/>
                                &nbsp;&nbsp; 2. Conectivos lógicos . <br/>
                                &nbsp;&nbsp; 3. Relación entre conectivos lógicos y operaciones entre conjuntos.<br/>
                                &nbsp;&nbsp; 4. Conjuntos numéricos y sus características. <br/>
                                &nbsp;&nbsp; 5. Operaciones entre números  y sus propiedades.<br/>
                                &nbsp;&nbsp; 6. Enunciar, plantear y modelar problemas de la vida real que involucran la teoría de conjuntos.<br/>
                            </label>                           
                        </td>
                    </tr>



                    <tr>
                        <td class="linea" colspan="3">
                            -----------------------------------------------------------------------------------------------------------
                        </td>
                    </tr>
                </table>
            </div>
        </div>



        <!--CUARTO NIVEL-->
        <div style="display: none;">
            <div id="div4conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEMA 1: introducción a la lógica matemática</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   
                        <tr>
                            <td>
                                <audio id="audio1Conjuntos" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaMatematica/Vista/audio/conjuntos/Track1.mp3">
                                </audio>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/universo/conjuntos/tema1.png">
                            </td>                            
                        </tr>                   


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--QUINTO NIVEL-->
        <div style="display: none;">
            <div id="div5conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">PROPOSICIÓN CERRADA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">Es una oración gramatical enunciativa que se expresa de tal manera que puede decirse de ella si es verdadera o falsa, así que es una frase del idioma español con una característica especial. Estas se notan con letras de alfabeto y no puede ser verdadera y falsa simultáneamente. Puesto que ello conduciría a una contradicción. <br/>

                                    <br/>
                                    A verdadero y falso se les denomina valores de verdad de la proposición, y los abreviaremos con V y F respectivamente.<br/>                                   
                                </label>                                                                
                            </td>                            
                        </tr>
                        <tr>
                            <td colspan="3">
                                <br/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <img class="imagenOva" onmouseover="mouseoversound.playclip();" src="Vista/imagenes/universo/conjuntos/ejemplo1.png">
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--SEXTO NIVEL-->
        <div style="display: none;">
            <div id="div6conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Axioma</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto"> Una proposición cerrada que aceptamos siempre como verdadera se le llama axioma.<br/>                                    
                                </label>
                            </td>                            
                        </tr>
                        <tr>
                            <td colspan="3">
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="imagenOvaSinEfecto" onmouseover="mouseoversound.playclip();"  src="Vista/imagenes/universo/conjuntos/ejemplo2.png">                          
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--SEPTIMO NIVEL-->
        <div style="display: none;">
            <div id="div7conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Teorema</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <span class="texto">
                                    Una proposición cerrada cuya verdad puede ser demostrada a partir de procesos lógicos, axiomas y definiciones se le llama teorema. <br/>
                                    <br/>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img class="imagenOva" onmouseover="mouseoversound.playclip();" src="Vista/imagenes/universo/conjuntos/ejemplo3.png">                          
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--CUARTO NIVEL-->
        <div style="display: none;">
            <div id="div8conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD #1</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleConjuntosJuegoUno(2);avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3" width="100%" height="100%">
                                <table border="0" class="fondoJuego01">
                                    <tr>
                                        <td width="40%" height="100%">                                            
                                            <table border="1" id="puzzle" class="estiloTabla">
                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="unoConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoBlanco">
                                                            Todo numero real elevado al cuadrado es positivo.<br/>
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="dosConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoBlanco">
                                                            Los ángulos internos de un triángulo suman 180o
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="tresConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoBlanco">
                                                            En Marte hay agua
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="cuatroConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,1)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="textoBlanco">
                                                            Los números 4 y 5 satisfacen la ecuación Cuadrática  <br/>
                                                            x2 + 6x − 5 = 0.
                                                        </label>
                                                    </td>
                                                </tr>
                                            </table>                                            
                                        </td>

                                        <td colspan="2" width="5%" height="100%">

                                        </td>

                                        <td colspan="2" width="55%" height="100%">
                                            <table width="100%" height="100%" border="0">  
                                                <tr>
                                                    <td width="100%" height="100%">
                                                        <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,1)">                                                                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1ConjuntosJuegoUno" src="Vista/imagenes/juegos/conjuntos/juego01/opciones/1.png" alt="pieza1ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2ConjuntosJuegoUno" src="Vista/imagenes/juegos/conjuntos/juego01/opciones/2.png" alt="pieza2ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                                                                                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3ConjuntosJuegoUno" src="Vista/imagenes/juegos/conjuntos/juego01/opciones/3.png" alt="pieza3ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4ConjuntosJuegoUno" src="Vista/imagenes/juegos/conjuntos/juego01/opciones/4.png" alt="pieza4ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>                            
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--QUINTO NIVEL-->
        <div style="display: none;">
            <div id="div9conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEMA 2: Conectivos lógicos</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    Los procesos (conectivos) lógicos entre otros, son términos no definidos que enriquecen el alfabeto de la lógica matemática. Pues a partir de un conjunto determinado de proposiciones cerradas, axiomas y teoremas; junto con los conectivos lógicos 
                                    se pueden construir proposiciones compuestas que no siempre son cerradas. <br/>
                                    <br/>

                                    Entre los conectivos más usados a la hora de trabajar en conjuntos están:<br/>
                                    <br/>

                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td width="25%">

                            </td>
                            <td width="50%">
                                <table border="1" width="100%" class="estiloTabla">
                                    <tr>
                                        <td>
                                            <label class="subtituloDorado">Conectivo</label>
                                        </td>

                                        <td>
                                            <label class="subtituloDorado">Símbolo</label>
                                        </td>

                                        <td>
                                            <label class="subtituloDorado">Contenido</label>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <label class="texto">Y</label>
                                        </td>

                                        <td>
                                            <label class="texto">∧</label>
                                        </td>

                                        <td>
                                            <img onmouseover="mouseoversound.playclip();" src="Vista/imagenes/universo/conjuntos/verinformacion.png" style="width: 150px; height: 50px;" onclick="abrirConector('9-1');" class="efectoAumento">
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">O</label>
                                        </td>

                                        <td>
                                            <label class="texto">∨</label>
                                        </td>

                                        <td>
                                            <img onmouseover="mouseoversound.playclip();" src="Vista/imagenes/universo/conjuntos/verinformacion.png" onclick="abrirConector('9-2');" class="efectoAumento">
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">Entonces </label>
                                        </td>

                                        <td>
                                            <label class="texto">↦</label>
                                        </td>

                                        <td>
                                            <img onmouseover="mouseoversound.playclip();" src="Vista/imagenes/universo/conjuntos/verinformacion.png" onclick="abrirConector('9-3');" class="efectoAumento">
                                        </td>

                                    </tr>    


                                    <tr>
                                        <td>
                                            <label class="texto">Negación  </label>
                                        </td>

                                        <td>
                                            <label class="texto"> ¬</label>
                                        </td>

                                        <td>
                                            <img onmouseover="mouseoversound.playclip();" src="Vista/imagenes/universo/conjuntos/verinformacion.png" onclick="abrirConector('9-4');" class="efectoAumento">
                                        </td>
                                    </tr>    

                                </table>
                            </td>

                            <td width="25%">

                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--SEXTO NIVEL-->
        <div style="display: none;" class="ventana">
            <div id="div9-1conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    El proceso lógico ^ es otro conectivo lógico dentro del sistema de la lógica matemática, el cual actúa ante dos flujos de entrada P y Q  <br/>
                                    para obtener como resultado el flujo de salida, P^Q, léase P y Q. <br/>
                                    <br/>                                  
                                </label>                                                                
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/propiedadY.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td  colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/otros/regresar.png" onclick="abrirTema(9);">
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--SEPTIMO NIVEL-->
        <div style="display: none;" class="ventana">
            <div id="div9-2conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0" width="100%">
                    <tbody>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    El proceso lógico.. es un conectivo lógico, dentro del sistema de la lógica matemática el cual actúa ante dos flujos de entrada, proceso binario para obtener como resultado 
                                    un flujo de salida. Dadas las proposiciones P y Q,  la función de este proceso es construir la frase o proposición, se lee P o Q                                    
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/propiedadO.png">
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td  colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/otros/regresar.png" onclick="abrirTema(9);">
                            </td>
                        </tr>

                </table>
            </div>
        </div>


        <!--OCTAVO NIVEL-->

        <div style="display: none;" class="ventana">
            <div id="div9-3conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0" width="100%">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/propiedadentonces.png">
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td  colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/otros/regresar.png" onclick="abrirTema(9);">
                            </td>
                        </tr>

                </table>
            </div>
        </div>



        <!--OCTAVO NIVEL-->
        <div style="display: none;" >
            <div id="div9-4conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0" width="100%">
                    <tbody>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    El proceso lógico.. es un conectivo lógico, dentro del sistema de la lógica matemática el cual actúa ante dos flujos de entrada, proceso binario para obtener como resultado 
                                    un flujo de salida. Dadas las proposiciones P y Q,  la función de este proceso es construir la frase o proposición, se lee P o Q
                                    <br/>
                                    <br/>                                 
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/propiedadesnegacion.png">
                            </td>
                        </tr>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td  colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/otros/regresar.png" onclick="abrirTema(9);">
                            </td>
                        </tr>

                </table>
            </div>
        </div>



        <!--NOVENO NIVEL-->
        <div style="display: none;">
            <div id="div10conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD #2</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleConjuntosJuegoDos(2);avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     



                        <tr>
                            <td colspan="3">
                                <table class="fondoJuego02" border="0" width="100%" height="100%"> 
                                    <tr>
                                        <td width="45%" height="50%">                                            
                                        </td>

                                        <td width="55%" height="50%" >
                                            <table border="0" width="100%" height="100%">
                                                <tr>
                                                    <td width="50%">
                                                        <table width="200px" height="300px" border="1" class="estiloTabla">
                                                            <tr>
                                                                <td  class="campo">
                                                                    <img src="Vista/imagenes/juegos/conjuntos/juego02/uveabajo.png" width="70px" height="70px">
                                                                </td>

                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="unoConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,2)">                                                
                                                                    </div>
                                                                </td>

                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="dosConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,2)">                                                
                                                                    </div>
                                                                </td>

                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="tresConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,2)">                                                
                                                                    </div>
                                                                </td>


                                                            </tr>

                                                            <tr>
                                                                <td class="campo">
                                                                    <img src="Vista/imagenes/juegos/conjuntos/juego02/uvearriba.png"  width="70px" height="70px">
                                                                </td>


                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="cuatroConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,2)">                                                
                                                                    </div>
                                                                </td>

                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="cincoConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,2)">                                                
                                                                    </div>
                                                                </td>


                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="seisConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,2)">                                                
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </table>
                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td width="35%">

                                        </td>

                                        <td width="65%">
                                            <table border="0" width="100%" height="100%">
                                                <tr>
                                                    <td width="50%">
                                                        <div id="contenedoresJuego02" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,2)">                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1ConjuntosJuegoDos" src="Vista/imagenes/juegos/conjuntos/juego02/1.png" alt="pieza1ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2ConjuntosJuegoDos" src="Vista/imagenes/juegos/conjuntos/juego02/5.png" alt="pieza2ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3ConjuntosJuegoDos" src="Vista/imagenes/juegos/conjuntos/juego02/2.png" alt="pieza3ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)"> 
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4ConjuntosJuegoDos" src="Vista/imagenes/juegos/conjuntos/juego02/4.png" alt="pieza4ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5ConjuntosJuegoDos" src="Vista/imagenes/juegos/conjuntos/juego02/3.png" alt="pieza5ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>


                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--ONCEAVO NIVEL-->
        <div style="display: none;">
            <div id="div11conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0"> 
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo"> TEMA 3: Relación entre conectivos lógicos y operaciones entre conjuntos</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Las operaciones entre conjuntos están íntimamente ligadas a los procesos lógicos ∧,∨   y  ¬.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/operacionesConjuntos.png" />
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--DOCEAVO NIVEL-->
        <div style="display: none;">
            <div id="div12conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD #3</span>
                            </td>    
                            <td>
                                <img onclick="validarJuego03(2);avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    

                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOvaSinEfecto" src="Vista/imagenes/universo/conjuntos/actividad3.png"/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <label class="texto">
                                                1. ¿Cuántas personas estudian sólo Biología?
                                            </label>
                                        </td>

                                        <td>
                                            <input id="txtJuego03Campo01" type="text" x-webkit-speech onchange="validarJuego03(1);">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label class="texto">
                                                2. ¿Cuántas personas estudian sólo Matemáticas?
                                            </label>
                                        </td>

                                        <td>
                                            <input id="txtJuego03Campo02" type="text" x-webkit-speech onchange="validarJuego03(1);">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">
                                                3. ¿Cuántas personas estudian sólo Química?
                                            </label>
                                        </td>

                                        <td>
                                            <input id="txtJuego03Campo03" type="text" x-webkit-speech onchange="validarJuego03(1);">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label class="texto">
                                                4. ¿Cuántas personas no estudian en estos pregrados?
                                            </label>
                                        </td>

                                        <td>
                                            <input id="txtJuego03Campo04" type="text" x-webkit-speech onchange="validarJuego03(1);">
                                        </td>
                                    </tr>


                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--TRECEAVO NIVEL-->
        <div style="display: none;">
            <div id="div13conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEMA 4: CONJUNTOS NUMÉRICOS Y SUS CARACTERÍSTICAS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/conjuntosnumericos.png"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--CATORCEAVO NIVEL-->
        <div style="display: none;">
            <div id="div14conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">CONJUNTOS NUMÉRICOS Y SUS CARACTERÍSTICAS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Es fácil ver que no existe módulo para la suma, no existen los inversos aditivos ni los inversos multiplicativos. Si la idea fuera construir un campo,una buena forma sería hacerlo por partes. El primer paso es agregar a los números naturales el módulo aditivo: el cero. Y los respectivos inversos aditivos,los números negativos. A este nuevo conjunto se le llama el conjunto de los números enteros. Notado: <br/><br/>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/conjuntosnumericos2.png"/>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--QUINCEAVO NIVEL-->
        <div style="display: none;">
            <div id="div15conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">LOS NÚMEROS RACIONALES</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/numerosprimos.png"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--QUINCEAVO NIVEL-->
        <div style="display: none;">
            <div id="div16conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">LOS NÚMEROS IRRACIONALES</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/numerosirracionales.png"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--QUINCEAVO NIVEL-->
        <div style="display: none;">
            <div id="div17conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">LOS NÚMEROS REALES</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/numerosreales.png"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--DIECISEISAVO NIVEL-->
        <div style="display: none;">
            <div id="div18conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD #4</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleConjuntosJuegoCuatro(2);avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 



                        <tr>
                            <td colspan="3">
                                <table class="fondoJuego04">
                                    <tr>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="alineacionCentro" style="padding-left: 35px">
                                            <table border="1" class="estiloTabla">
                                                <tr>
                                                    <td>

                                                    </td>

                                                    <td class="textoBlanco">
                                                        N
                                                    </td>

                                                    <td class="textoBlanco">
                                                        Z
                                                    </td>

                                                    <td class="textoBlanco">
                                                        Q
                                                    </td>

                                                    <td class="textoBlanco">
                                                        I
                                                    </td>

                                                    <td class="textoBlanco">
                                                        R
                                                    </td>                                        
                                                </tr>


                                                <tr>
                                                    <td class="textoBlanco">
                                                        SUMA
                                                    </td>

                                                    <td class="campo">
                                                        <div  class="contenedorPieza" id="unoConjuntosJuegoCuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">                                                
                                                        </div>
                                                    </td>
                                                    <td class="campo">
                                                        <div  class="contenedorPieza" id="dosConjuntosJuegoCuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">                                                
                                                        </div>
                                                    </td>
                                                    <td class="campo">
                                                        <div  class="contenedorPieza" id="treConjuntosJuegoCuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">                                                
                                                        </div>
                                                    </td>
                                                    <td class="campo">
                                                        <div  class="contenedorPieza" id="cuatroConjuntosJuegoCuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">                                                
                                                        </div>
                                                    </td>
                                                    <td class="campo">
                                                        <div  class="contenedorPieza" id="cincoConjuntosJuegoCuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">                                                
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td class="textoBlanco">
                                                        MULTIPLICACION
                                                    </td>

                                                    <td class="campo">
                                                        <div  class="contenedorPieza" id="seisConjuntosJuegoCuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">                                                
                                                        </div>
                                                    </td>

                                                    <td class="campo">
                                                        <div  class="contenedorPieza" id="sieteConjuntosJuegoCuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">                                                
                                                        </div>
                                                    </td>

                                                    <td class="campo">
                                                        <div  class="contenedorPieza" id="ochoConjuntosJuegoCuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">                                                
                                                        </div>
                                                    </td>

                                                    <td class="campo">
                                                        <div  class="contenedorPieza" id="nueveConjuntosJuegoCuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">                                                
                                                        </div>
                                                    </td>

                                                    <td class="campo">
                                                        <div  class="contenedorPieza" id="diezConjuntosJuegoCuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">                                                
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="3">
                                            <table border="0" width="100%" height="100%">
                                                <tr>
                                                    <td width="50%">
                                                        <div id="contenedoresJuego04" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,4)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5ConjuntosJuegoCuatro" src="Vista/imagenes/juegos/conjuntos/juego04/5.png" alt="pieza5ConjuntosJuegoCuatro" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza9ConjuntosJuegoCuatro" src="Vista/imagenes/juegos/conjuntos/juego04/9.png" alt="pieza9ConjuntosJuegoCuatro" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1ConjuntosJuegoCuatro" src="Vista/imagenes/juegos/conjuntos/juego04/1.png" alt="pieza1ConjuntosJuegoCuatro" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7ConjuntosJuegoCuatro" src="Vista/imagenes/juegos/conjuntos/juego04/7.png" alt="pieza7ConjuntosJuegoCuatro" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza10ConjuntosJuegoCuatro" src="Vista/imagenes/juegos/conjuntos/juego04/10.png" alt="pieza10ConjuntosJuegoCuatro" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4ConjuntosJuegoCuatro" src="Vista/imagenes/juegos/conjuntos/juego04/4.png" alt="pieza4ConjuntosJuegoCuatro" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8ConjuntosJuegoCuatro" src="Vista/imagenes/juegos/conjuntos/juego04/8.png" alt="pieza8ConjuntosJuegoCuatro" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2ConjuntosJuegoCuatro" src="Vista/imagenes/juegos/conjuntos/juego04/2.png" alt="pieza2ConjuntosJuegoCuatro" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6ConjuntosJuegoCuatro" src="Vista/imagenes/juegos/conjuntos/juego04/6.png" alt="pieza6ConjuntosJuegoCuatro" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3ConjuntosJuegoCuatro" src="Vista/imagenes/juegos/conjuntos/juego04/3.png" alt="pieza3ConjuntosJuegoCuatro" draggable="true" ondragstart="start(event)" ondragend="end(event)"> 
                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div19conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEMA 5: OPERACIONES CON NÚMEROS REALES</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                                           

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Operar correctamente los números reales es de gran importancia en las matemáticas, de tal forma que debemos reconocer y emplear las propiedades adecuadas en cada operación matemática, esto se logra al relacionar las propiedades que se cumplen en cada operación.
                                    Las operaciones matemáticas principales  son dos la suma y la multiplicación, y cada una de ellas posee un inverso respectivo, en el caso de la suma es la resta o  inverso aditivo y para la multiplicación la división o inverso multiplicativo.
                                    Como suele presentarse inconvenientes especialmente en operaciones que involucran números fraccionarios; recordaremos algunas reglas básicas para realizar operaciones:

                                </label>
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3">
                                <br/>
                            </td>    
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table width="100%" class="alineacionCentro">
                                    <tr>
                                        <td>                                                                                        
                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" onclick="abrirConector('17-1');" src="Vista/imagenes/universo/conjuntos/suma.png"/>                                            
                                        </td>


                                        <td>                                                                                        
                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" onclick="abrirConector('17-3');" src="Vista/imagenes/universo/conjuntos/multiplicacion.png"/>                                            
                                        </td>                                        


                                        <td>                                                                                        
                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" onclick="abrirConector('17-4');" src="Vista/imagenes/universo/conjuntos/division.png"/>                                            
                                        </td>                                        

                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div17-1conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>   

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                                           

                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOvaSinEfecto" src="Vista/imagenes/universo/conjuntos/infoSuma.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td  colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/otros/regresar.png" onclick="abrirTema(19);">
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div17-2conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody> 

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                                           

<!--                        <tr>
                            <td colspan="3">
                                <img class="imagenOva" src="Vista/imagenes/universo/conjuntos/infoResta.png">
                            </td>
                        </tr>-->


                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();"  class="imagenOvaSinEfecto" src="Vista/imagenes/otros/construccion.jpg">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td  colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/otros/regresar.png" onclick="abrirTema(19);">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div17-3conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>  

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                                           

                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOvaSinEfecto"  src="Vista/imagenes/universo/conjuntos/infoMultiplicacion.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td  colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/otros/regresar.png" onclick="abrirTema(19);">
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div17-4conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>   

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                                           

                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOvaSinEfecto"  src="Vista/imagenes/universo/conjuntos/infoDivision.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td  colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/otros/regresar.png" onclick="abrirTema(19);">
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--DIECIOCHOAVO NIVEL-->
        <div style="display: none;">
            <div id="div20conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">PROPIEDAD DISTRIBUTIVA QUE COMBINA LAS OPERACIONES DE PRODUCTO Y SUMA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/conjuntos/propiedaddistributiva.png">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div21conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD #5</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleConjuntosJuegoCinco(2);avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td colspan="3">
                                <table border="0" width="100%" height="100%">
                                    <tr>

                                        <td>
                                            <table border="0" width="100%" height="100%" class="fondoJuego05">
                                                <tr>

                                                    <td width="10%">

                                                    </td>

                                                    <td width="65%" >
                                                        <div id="contenedoresJuego05" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,5)"> 
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1ConjuntosJuegoCinco" src="Vista/imagenes/juegos/conjuntos/juego05/asociativa.png" alt="pieza1ConjuntosJuegoCinco" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2ConjuntosJuegoCinco" src="Vista/imagenes/juegos/conjuntos/juego05/conmutativa.png" alt="pieza2ConjuntosJuegoCinco" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3ConjuntosJuegoCinco" src="Vista/imagenes/juegos/conjuntos/juego05/distributiva.png" alt="pieza3ConjuntosJuegoCinco" draggable="true" ondragstart="start(event)" ondragend="end(event)"> 
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4ConjuntosJuegoCinco" src="Vista/imagenes/juegos/conjuntos/juego05/elementoneutro.png" alt="pieza4ConjuntosJuegoCinco" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5ConjuntosJuegoCinco" src="Vista/imagenes/juegos/conjuntos/juego05/reciproco.png" alt="pieza5ConjuntosJuegoCinco" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                        </div>
                                                    </td>    



                                                    <td>
                                                        <table border="0" class="alineacionIzquierda">
                                                            <tr>
                                                                <td class="textoBlanco">
                                                                    A.	2+9=9+2
                                                                </td>     

                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="unoConjuntosJuegoCinco" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,5)">                                                
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="textoBlanco">
                                                                    B. 3(5-8)= 3*5 -3*8
                                                                </td> 

                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="dosConjuntosJuegoCinco" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,5)">                                                
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td class="textoBlanco"> 
                                                                    C. 9765*1=9765
                                                                </td> 

                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="tresConjuntosJuegoCinco" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,5)">                                                
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td class=" textoBlanco">
                                                                    D. (45+12)+8=45+(12+8)
                                                                </td>    
                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="cuatroConjuntosJuegoCinco" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,5)">                                                
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="textoBlanco">
                                                                    E. 85*1/85=1
                                                                </td>  
                                                                <td class="campo">
                                                                    <div  class="contenedorPieza" id="unoConjuntosJuegoSeis" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropConjuntos(event,5)">                                                
                                                                    </div>
                                                                </td>
                                                            </tr>                                                                                                            
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>




                                    </tr>
                                </table>
                            </td>                        
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--VEINTEAVO NIVEL-->
        <div style="display: none;">
            <div id="div22conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">
                                    TEMA 6: Enunciar, plantear y modelar problemas de la vida real que involucrán la teoría de conjuntos.
                                </span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    La matemática es una disciplina  que tiene un carácter científico que ejercita nuestra actividad mental. Por lo tanto es importante que sintamos gusto por esta ciencia que nos permite razonar de manera lógica, segura, sin posibilidad de 
                                    error y necesaria en cualquier actividad de nuestra vida.<br/><br/>
                                </label>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();"  class="imagenOva" src="Vista/imagenes/universo/conjuntos/modeladoproblema.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div23conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD #6</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   
                        <tr>
                            <td>
                                <audio id="audio3Conjuntos" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaMatematica/Vista/audio/conjuntos/Track3.mp3">
                                </audio>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  


                        <tr>
                            <td colspan="1">
                                <img id="avatarMatematicaNino" src="Vista/imagenes/universo/conjuntos/avatarNubeNino.png"/>
                            </td>

                            <td colspan="1">

                            </td>

                            <td colspan="1">
                                <img id="avatarMatematicaNina" src="Vista/imagenes/universo/conjuntos/avatarNubeNina.png"/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img  class="imagenOvaSinEfecto" src="Vista/imagenes/juegos/conjuntos/juego06/fondo.png">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">1. Propón una forma de solucionar tal problemática</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <textarea class="descripcion">                                    
                                </textarea>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">2. Resuélvelo a través de fraccionarios</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <textarea class="descripcion">                                    
                                </textarea>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">3. Explica por qué da esa solución</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <textarea class="descripcion">                                    
                                </textarea>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div24conjuntos" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menuConjuntos.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">DOCUMENTOS DE AYUDA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('conjuntos');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionIzquierda" width="100%" height="100%">
                                <table class="fondoDocumentosExternos imagenOvaSinEfecto" border="0">
                                    <tr>
                                        <td heigth="30%"></td>
                                        <td class="alineacionIzquierda">
                                            &nbsp;&nbsp;&nbsp; <a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.youtube.com/watch?v=ZdCOwyZqWp8"><span class="textoBlancoGrande">1. http://www.youtube.com/watch?v=ZdCOwyZqWp8 </span></a> <br/>                                
                                            &nbsp;&nbsp;&nbsp; <a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.youtube.com/watch?v=D4cuZt1mL4s"><span class="textoBlancoGrande">2. http://www.youtube.com/watch?v=D4cuZt1mL4s </span></a> <br/>                                
                                            &nbsp;&nbsp;&nbsp; <a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.youtube.com/watch?v=xK_qKI88Y8E"><span class="textoBlancoGrande">3. http://www.youtube.com/watch?v=xK_qKI88Y8E </span></a> <br/>                                
                                            &nbsp;&nbsp;&nbsp; <a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.youtube.com/watch?v=aCQaUQQdF-Q"><span class="textoBlancoGrande">4. http://www.youtube.com/watch?v=aCQaUQQdF-Q </span></a> <br/>                                                                                                                             
                                        </td>
                                    </tr>                                  
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <!--        <div style="display: none;">
                    <div id="div?tema" style="overflow: hidden;" class="ventana">
                        <table border="0">
                            <tbody>
                                <tr>
                                    <td>
                                        <img onclick="retroceder('tema');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                        <label class="texto">Anterior</label>
                                    </td> 
                                    <td colspan="1">
                                        <span class="titulo">TITULO</span>
                                    </td>    
                                    <td>
                                        <img onclick="avanzar('tema');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                        <label class="texto">Siguiente</label>
                                    </td>
                                </tr>    
                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>                                           
                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>-->

    </body>
</html>

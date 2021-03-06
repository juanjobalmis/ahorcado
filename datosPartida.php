<?php

function InicializaDatosJuego() {
    $_SESSION['palabras'] = array(
        "REUTILIZAR",
        "REDUCIR",
        "RECICLAR",
        "ECOLOGIA",
        "GRIS",
        "VERDE",
        "AMARILLO",
        "RESIDUO",
        "COMPOST");

    $_SESSION['definiciones'] = array(
        "De la regla de las 3 Rs, ¿cual es la segunda?",
        "De la regla de las tres 3 Rs, ¿cuál es la primera?",
        "De la regla de las tres 3 Rs, ¿cuál es la tercera?",
        "¿Cuál es Ciencia que estudia las relaciones entre los seres vivos y de éstos con el 
            medio físico-químico que les rodea?",
        "¿Qué color tiene el contenedor en el que se tiran los rsu?",
        "¿Qué color tiene el contenedor en el que se tira el vidrio?",
        "¿Qué color tiene el contenedor en el que se tira el plástico, el tetrabrik y el papel 
            de aluminio?",
        "Material resultante de un proceso de fabricación, transformación, consumo o 
            limpieza, cuando su poseedor o productor lo destina al abandono.",
        "Degradación de la materia orgánica para formarla en un compuesto 
            químicamente estable.");
    $_SESSION['imagenes'] = array(
        "./imagenes/imgJPG/reutilizar.jpg",
        "./imagenes/imgJPG/reducir.jpg",
        "./imagenes/imgJPG/reciclar.jpg",
        "./imagenes/imgJPG/cuidar-el-medio-ambiente.jpg", 
        "./imagenes/imgJPG/contenedores.jpg",
        "./imagenes/imgJPG/contenedores.jpg",
        "./imagenes/imgJPG/contenedores.jpg",
        "./imagenes/imgJPG/rsu.jpg",
        "./imagenes/imgJPG/compost.jpg");
    
     $_SESSION['jugando'] = false;
}

function EstableceDatosPartida() {
    $indiceAleatorioPalabras = rand(0, count($_SESSION['palabras']) - 1);
    $_SESSION['definicion'] = $_SESSION['definiciones'][$indiceAleatorioPalabras];
    $_SESSION['palabra'] = str_split($_SESSION['palabras'][$indiceAleatorioPalabras]);
    $_SESSION['imagen'] = $_SESSION['imagenes'][$indiceAleatorioPalabras];
    $_SESSION['acertadas'] = array();
    $_SESSION['falladas'] = array();
}

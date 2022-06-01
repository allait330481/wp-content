<?php

add_action('admin_menu', 'random_menu_page');

function random_menu_page(){
    add_menu_page('Dough', 'Dough!', 'manage_options', 'dough', 'page_render', 'dashicons-smiley');
}


function page_render(){
    echo '
    <h1>Dough:</h1>
    <p>Dit thema is speciaal gebouwt zodat jullie kunnen leren orienteren in hoe je een thema bouwt en onderhoudt. <br>
    Deze pagina is een van de voorbeelden van wat jij zelf nog kan inbrengen binnen het admin menu van Wordpress zelf. <br>
    Vaak wordt dit soort functionaliteiten gemaakt voor plugins zodat je de instellingen daarvan goed kan scheiden. Ook kan je thema opties bieden.</p>
    
    <br>
    
    <h2>Maar waarom Dough?</h2>
    <p>Dough (deeg in het engels) kan je natuurlijk kneden tot wat jij zelf wil maken. Pizza? Brood? Koekjes? Noem het maar op.<br>
    En dat is dus precies hoe jullie dit gaan gebruiken. Kneed met dit thema je eigen! Hernoem het naar (bijvoorbeeld) iets wat je leuk vind
    Voeg functies toe die je zelf wil zien en maak er vooral wat leuks van!</p>
    
    <img class="temp" src="'. get_stylesheet_directory_uri() . '/assets/img/dough.png' . '" style="width: 25%">
    ';
}
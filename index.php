<?php
require 'simple_html_dom.php';

$html = file_get_html('SITE_WEB');

/* Récuperer Tous les Liens */
foreach($html->find('a') as $element) 
       echo $element->href . '<br />';

/* Récuperer Tous les Images */
foreach($html->find('img') as $element) 
       echo $element->src . '<br />';

?>
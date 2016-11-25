<?php
require simple_html_dom.php;
$html = file_get_html('http://www.google.com/');
foreach($html->find('a') as $element) 
       echo $element->href . '<br>';
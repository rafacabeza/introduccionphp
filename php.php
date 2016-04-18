<?php

/**
 * Html2Pdf Library - example
 *
 * HTML => PDF converter
 * distributed under the LGPL License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2016 Laurent MINGUET
 */
require_once dirname(__FILE__).'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();
    
    
        echo '<style type="text/css">';
    include dirname(__FILE__).'/css/default.css';
        echo '</style>';    
    
    
    include dirname(__FILE__).'/parte01.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf( 'P', 'A4', 'es', true, 'UTF-8', array(30, 30, 20, 20));
    $html2pdf->writeHTML($content);
    $html2pdf->Output('exemple01.pdf');
} catch (Html2PdfException $e) {
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}




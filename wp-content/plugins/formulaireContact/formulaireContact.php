<?php
/**
 * Plugin Name: FormulaireContact
 *Plugin URI: http://wordpress.org/plugins/formulaireContact/
 *Author: Aissata BA
 */

 function formulaire_de_contact() {
     ob_start();
     include 'form.php';
     traitement();
     $formulaire = ob_get_clean();
     return $formulaire;
 }


 function traitement() {
    if(!empty($_POST)) {
        die('le formulaire a été soumis');
    }
 }
add_shortcode( 'aissata_contact_form', 'formulaire_de_contact' );
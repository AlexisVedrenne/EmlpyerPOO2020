<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './Classes/Employe.php';
include './includes/Traitement.php';

try {
    Traitement::instanciationUnEmploye();
    echo '<br>';
    Traitement::instanciarionUnEmployeErreur();
    Traitement::instanciationUnEmploye();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
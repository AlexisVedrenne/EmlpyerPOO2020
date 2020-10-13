<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './Classes/Employe.php';
include './includes/Traitement.php';
include './Classes/Projet.php';
include './Classes/EmployeInformaticien.php';
try {
    Traitement::instanciationUnEmploye();
    echo '<br>';
    Traitement::instanciationProjetV1();
    echo '<br>';
    Traitement::instanciationImformaticien();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
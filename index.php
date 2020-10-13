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
include './Classes/EmployeNonInFormation.php';
try {

    Traitement::instanciationProjetV1();
    echo '<br>';
    Traitement::instanciationImformaticien();
    echo '<br>';
    Traitement::instanciationNonInformaticien();
    echo '<br>';
    Traitement::testGaintAnnuel();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
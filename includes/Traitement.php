<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Traitement
 *
 * @author vedrenne.alexis
 */
class Traitement {
    public static function instanciationUnEmploye():void{
        $unEmploye=new Employe(1,"Dupont","Jacques", new DatatTime("12/07/1980"),1000.00);
        $nom=$unEmploye->getNom();
        echo "L'employé instancié s'appelle " . $nom;
    }
}

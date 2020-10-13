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

    public static function instanciationUnEmploye(): void {
        $unEmploye = new Employe(1, "Dupont", "Jacques", new DateTime("1980/07/12"), 1000.00);
        echo $unEmploye;
    }

    public static function instanciationUnEmployeErreur(): void {
        $unEmploye = new Employe(1, "Dupont", "Jacques", new DateTime("1980/07/12"), 800.00);
        echo $unEmploye;
    }

    public static function instanciationProjetV1(): void {
        $unProjet = new Projet('PR7', 'Librairie Gelistout', 102);
        echo $unProjet;
    }

    public static function instanciationImformaticien(): void {
        $informaticien=new EmployeInformaticien(2,"Dimont","Patrik",new DateTime("1980/07/12"),1200,new Projet('PR7', 'Librairie Gelistout', 102));
        echo $informaticien;
    }

}

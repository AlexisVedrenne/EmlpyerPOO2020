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
        $unEmploye=new Employe(1,"Dupont","Jacques", new DateTime("1980/07/12"),1000.00);
        echo $unEmploye;
    }
}

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

    public static function instanciationProjetV1(): void {
        $unProjet = new Projet('PR7', 'Librairie Gelistout', 102);
        echo $unProjet;
    }

    public static function instanciationImformaticien(): void {
        $informaticien = new EmployeInformaticien(2, "Dimont", "Patrik", new DateTime("1980/07/12"), 1200, new Projet('PR7', 'Librairie Gelistout', 102));
        echo $informaticien;
    }

    public static function instanciationImformaticienV2(): void {
        $informaticien = new EmployeInformaticien(2, "Dimont", "Patrik", new DateTime("1980/07/12"), 1200, new Projet('PR7', 'Librairie Gelistout', 102));
        echo $informaticien;
        echo "<br>";
        $informaticien->setSalaireM(200);
        echo "Nouvelle prime :" . $informaticien->getPrimeM();
    }

    public static function instanciationNonInformaticien(): void {
        $nonInformaticien = new EmployeNonInFormation(4, "Durvant", 'Hèlène', new DateTime("1987/06/12"), 1200.00);
        echo $nonInformaticien;
        echo "<br>";
        $nonInformaticien->setPrimeA(14000);
        echo "Nouvelle prime: " . $nonInformaticien->getPrimeA();
    }

    public static function testGaintAnnuel() {
        $informaticien = new EmployeInformaticien(2, "Dimont", "Patrik", new DateTime("1980/07/12"), 1200, new Projet('PR7', 'Librairie Gelistout', 102));
        $informaticien->setPrimeM(200);
        echo "<p>";
        echo $informaticien;
        echo "</p>";
        $nonInformaticien = new EmployeNonInFormation(4, "Durvant", 'Hèlène', new DateTime("1987/06/12"), 1300);
        $nonInformaticien->setPrimeA(1200);
        echo "<p>";
        echo $nonInformaticien;
        echo "</p>";
        $nonInformaticien = new EmployeNonInFormation(5, "Durvant", 'Hèlène', new DateTime("1987/06/12"), 1300);
        $nonInformaticien->setPrimeA(1400);
        echo "<p>";
        echo $nonInformaticien;
        echo "</p>";
        
    }

}

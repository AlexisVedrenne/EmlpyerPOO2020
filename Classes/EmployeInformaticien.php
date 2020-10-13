<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeInformaticien
 *
 * @author vedrenne.alexis
 */
class EmployeInformaticien extends Employe {

    private int $primeM;
    private Projet $projet;

    public function __construct(int $num, string $pNom, string $pPrenom, DateTime $pddn, float $pSalaire, Projet $unProjet) {
        parent::__construct($num, $pNom, $pPrenom, $pddn, $pSalaire);
        $this->primeM = 0;
        $this->projet = $unProjet;
    }

    function setPrimeM(int $primeM): void {
        if ($primeM < (0.3 * parent::getSalaireM())) {
            $this->primeM = $primeM;
        }
    }

    function getPrimeM(): int {
        return $this->primeM;
    }

    public function __toString(): string {
        return "Informaticien: " . parent::__toString() . "<br>" . $this->projet->__toString() . "<br>" . "- Gaint annuel :" . $this->gaintAnnuel();
    }

    public function gaintAnnuel(): float {
        return (parent::getSalaireM() + $this->getPrimeM()) * 12;
    }

}

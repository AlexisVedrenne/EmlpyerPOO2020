<?php namespace  ClassesMetier\DRH ;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeNonInFormation
 *
 * @author Alexis
 */
class EmployeNonInFormation extends Employe {

    private int $primeA;

    public function __construct(int $num, string $pNom, string $pPrenom, DateTime $pddn, float $pSalaire) {
        parent::__construct($num, $pNom, $pPrenom, $pddn, $pSalaire);
        $this->primeA = 0;
    }

    public function getPrimeA(): int {
        return $this->primeA;
    }

    public function setPrimeA(int $primeA): void {
        if ($primeA < parent::getSalaireM()) {
            $this->primeA = $primeA;
        }
        else{
            $this->primeA+= parent::getSalaireM()-$primeA;
        }
    }

    public function __toString(): string {
        return parent::__toString() . "<br>" . "- Gaint annuel :" . $this->gaintAnnuel();
    }

    public function gaintAnnuel(): float {
        return (parent::getSalaireM()+$this->getPrimeA())*12;
    }
}

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
    
    public function __construct(int $num, string $pNom, string $pPrenom, DateTime $pddn, float $pSalaire,Projet $unProjet) {
        parent::__construct($num, $pNom, $pPrenom, $pddn, $pSalaire);
        $this->primeM= 0;
    }
    function setPrimeM(int $primeM): void {
        if(!(($this->getPrimeM()/parent::getSalaireM())*30)>parent::getSalaireM()){
            $this->primeM=$primeM;
        }
    }
    function getPrimeM(): int {
        return $this->primeM;
    }


}

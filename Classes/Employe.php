<?php

Class Employe{
protected int $numero;
protected string $nom;
protected string $prenom;
protected DateTime $dateDeNaissance;
protected float $salaireM;

public function __construct(int $num , string $pNom , string $pPrenom , DateTime $pddn , float $pSalaire){
    $this->numero = $num;
    $this->nom=$pNom;
    $this->prenom=$pPrenom;
    $this->dateDeNaissance=$pddn;
    $this->salaireM=$pSalaire;
}

}
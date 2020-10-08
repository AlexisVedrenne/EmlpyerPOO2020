<?php

Class Employe {

    protected int $numero;
    protected string $nom;
    protected string $prenom;
    protected DateTime $dateDeNaissance;
    protected float $salaireM;

    public function __construct(int $num, string $pNom, string $pPrenom, DateTime $pddn, float $pSalaire) {
        $this->numero = $num;
        $this->nom = $pNom;
        $this->prenom = $pPrenom;
        $this->dateDeNaissance = $pddn;
        $this->salaireM = $pSalaire;
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getDateDeNaissance(): DateTime {
        return $this->dateDeNaissance;
    }

    public function getSalaireM(): float {
        return $this->salaireM;
    }

    function setSalaireM(float $salaireM): void {
        $this->salaireM = $salaireM;
    }

}

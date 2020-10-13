<?php namespace  ClassesMetier\DRH;

abstract Class Employe {

    protected int $numero;
    protected string $nom;
    protected string $prenom;
    protected DateTime $dateDeNaissance;
    protected float $salaireM;

    private const MINSALAIRE = 1000;

    public function __construct(int $num, string $pNom, string $pPrenom, DateTime $pddn, float $pSalaire) {
        $this->numero = $num;
        $this->nom = $pNom;
        $this->prenom = $pPrenom;
        $this->dateDeNaissance = $pddn;
        $this->setSalaireM($pSalaire);
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
        if ($salaireM >= self::MINSALAIRE) {
            $this->salaireM = $salaireM;
        } else {
            throw new Exception("Le salaire ne doit pas être inférieur à " . self::MINSALAIRE);
        }
    }

    public function __toString(): string {
        return (string) $this->numero . " - " . $this->getNom() . " - " . $this->getPrenom() . " - " . $this->getDateDeNaissance()->format('d/m/Y') . " - "
                . $this->getSalaireM();
    }

    public abstract function gaintAnnuel():float;
        
}

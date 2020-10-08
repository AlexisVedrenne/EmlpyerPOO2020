<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Projet
 *
 * @author vedrenne.alexis
 */
class Projet {
    private string $codeProjet;
    private string $nomProjet;
    private int $dureePrevue;
    
    public function __construct(string $codeProjet,string $nomProjet,int $dureePrevue):void{
        $this->codeProjet=$codeProjet;
        $this->nomProjet=$nomProjet;
        $this->dureePrevue=$dureePrevue;
    }
    function getCodeProjet(): string {
        return $this->codeProjet;
    }

    function getNomProjet(): string {
        return $this->nomProjet;
    }

    function getDureePrevue(): int {
        return $this->dureePrevue;
    }

    function setDureePrevue(int $dureePrevue): void {
        $this->dureePrevue = $dureePrevue;
    }

}

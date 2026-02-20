<?php

namespace App\Entity;

class Contact
{
    public function __construct(
        private string $nom,
        private string $prenom,
        private string $telephone,
        private string $profession
    ) {}

    public function getNom(): string { return $this->nom; }
    public function getPrenom(): string { return $this->prenom; }
    public function getTelephone(): string { return $this->telephone; }
    public function getProfession(): string { return $this->profession; }
}
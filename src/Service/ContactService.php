<?php

namespace App\Service;

use App\Entity\Contact;

class ContactService
{
    private array $contacts = [];

    public function add(Contact $contact): void
    {
        $this->contacts[] = $contact;
    }

    public function all(): array
    {
        return $this->contacts;
    }
}
<?php

namespace App\Service;

use App\Entity\Contact;

class ContactService
{
    /** @var Contact[] */
    private array $contacts = [];

    public function add(Contact $contact): void
    {
        $this->contacts[] = $contact;
    }

    /**
     * @return Contact[]
     */
    public function all(): array
    {
        return $this->contacts;
    }
}

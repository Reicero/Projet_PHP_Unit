<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Entity\Contact;
use App\Service\ContactService;

class ContactServiceTest extends TestCase
{
    public function testAddContact(): void
    {
        $service = new ContactService();

        $contact = new Contact(
            'Dupont',
            'Alice',
            '0600000000',
            'Dev'
        );

        $service->add($contact);

        $this->assertCount(1, $service->all());
        $this->assertSame('Dupont', $service->all()[0]->getNom());
    }
}
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function a_contact_add_to_contactBook()
    {
        $this->withoutExceptionHandling();
        $res = $this->post("/contact", [
            'name' => 'emran',
            'phoneNumber' => '09175414381'
        ]);
        $res->assertOk();
        $this->assertCount(1, Book::all());

    }
}

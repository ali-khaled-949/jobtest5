<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InvoiceApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     public function test_get_all_invoices()
    {
        $response = $this->getJson('/api/invoices');

        $response->assertOk()  // Asserts status code 200
                 ->assertJsonStructure([  // Checks the JSON structure
                     '*' => [
                         'id', 'vendor_name', 'amount', 'due_date', 'description'
                     ]
                 ]);
    }
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Contact;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_contact(): void
    {
        $data = [
            "name"      => "Teste Pessoa",
            "email"     => "teste@exemplo22222.com", // email e unico nao pode haver dois
            "phone"     => "11999990000",
            "cep"       => "12345678",
            "street"    => "Rua Teste",
            "district"  => "Bairro Teste",
            "city"      => "Cidade Teste",
            "state"     => "SP teste"
        ];

        $response = $this->post('/api/contact', $data);

        $response->assertStatus(200); 
        
    }
     /** @test */
     public function test_update_contact()
     {
         $contact = Contact::factory()->create();
 
         $response = $this->put("/api/contact/{$contact->id}", [
            "name" => 'Nome Atualizado',
             'email' => $contact->email,
             "phone" => $contact->phone,
             "cep"  => $contact->cep,
             "street" => $contact->street,
             "district" => $contact->district,
             "city" => $contact->city,
             "state"   => $contact->state,
         ]);
 
         $response->assertStatus(200);
        
     }
 
     /** @test */
     public function test_delete_contact()
     {
         $contact = Contact::factory()->create();
 
         $response = $this->delete("/api/contact/{$contact->id}");
 
         $response->assertStatus(200);
       
     }
 
     /** @test */
     public function test_List_contact()
     {
         Contact::factory()->count(3)->create();
 
         $response = $this->get('/api/contact');
 
         $response->assertStatus(200);
        
     }
}

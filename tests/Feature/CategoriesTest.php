<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_categories_index()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_categories_edit()
    {
        $response = $this->get('categories.edit');
        $response->assertStatus(200);
    }
    public function test_categories_show()
    {
        $response = $this->get('categories.show');
        $response->assertStatus(200);
    }
    public function test_categories_create()
    {
        $response = $this->get(route('categories.create'));
        $response->assertStatus(200);
    }
    public function test_categories_store()
    {
        $data = [
            'name' => 'Example name',
            'description' => 'Example description'
        ];
        $response = $this->post(route('categories.store'), $data);
        $response->assertJson($data);
        $response->assertStatus(200);
    }
}

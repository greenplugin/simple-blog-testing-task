<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryRequestTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @inheritdoc
     */
    public function testCategoryCreateRequestError()
    {
        $response = $this->post('/manager/categories', [
            'title' => '',
            'slug' => 'wrong slug'
        ]);

        $response
            ->assertStatus(302)
            ->assertSessionHasErrors(['slug', 'title']);
    }

    /**
     * @inheritdoc
     */
    public function testCategoryCreateRequestSuccess()
    {
        $response = $this->post('/manager/categories', [
            'title' => 'title',
            'slug' => 'slug'
        ]);

        $response
            ->assertRedirect('/manager/categories');
    }
}

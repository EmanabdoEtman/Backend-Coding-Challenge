<?php


namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class repositoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    /** @test */
    public function user_get_top_repository_data()
    {   $length=10;
        $response = $this->get('/topRepo?length='.$length);  
        
         $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'full_name',
                    'description',
                    'repo_url',
                    'language',
                    'number_of_stars',
                    'created_at' 
                ]
            ]
        ]);

 
    }
    /** @test */
    public function user_get_repository_by_language_data()
    {   
        $length=10;
        $language='php';
        $response = $this->get('/filterbylanguage?length='.$length.'&language='.$language);  
        
         $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'full_name',
                    'description',
                    'repo_url',
                    'language',
                    'number_of_stars',
                    'created_at' 
                ]
            ]
        ]);

 
    }
    /** @test */
    public function user_get_repository_by_date_data()
    {   
        $length=10;
        $date='2021-06-10';
        $response = $this->get('/filterbydate?length='.$length.'&date='.$date);  
        
         $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'full_name',
                    'description',
                    'repo_url',
                    'language',
                    'number_of_stars',
                    'created_at' 
                ]
            ]
        ]);

 
    }
      

    
}

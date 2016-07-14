<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class QuotesTest extends TestCase
{
	use DatabaseMigrations;

    public function test_an_admin_can_view_all_the_quotes()
    {
    	$user = factory(App\User::class)->create();
    	$this->actingAs($user);

    	$quote = factory(App\Quote::class)->create();
    	
    	$this->visit('/dashboard/quotes')
    		->see($quote->title);
    }
}

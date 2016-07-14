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

    public function test_display_a_form_when_an_admin_is_adding_a_new_quote()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

        $this->visit('/dashboard/quotes/create')
            ->see('Create Quote');
    }

    public function test_it_saves_a_quote_on_the_database()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user);

        $this->visit('/dashboard/quotes/create')
            ->type('New quote', 'title')
            ->press('Save')

            ->seeInDatabase('quotes', [
                'title' => 'New quote'
            ]);
    }

    public function test_it_shows_an_edit_form_when_editing_a_quote()
    {
         $user = factory(App\User::class)->create();
         $this->actingAs($user);

         $quote = factory(App\Quote::class)->create();
         $this->visit('/dashboard/quotes/'.$quote->id.'/edit')
            ->see('Edit Quote')
            ->see($quote->title);
    }

    public function test_it_updates_a_quote_when_updating_a_form()
    {
         $user = factory(App\User::class)->create();
         $this->actingAs($user);

         $quote = factory(App\Quote::class)->create();
         $this->visit('/dashboard/quotes/'.$quote->id.'/edit')
            ->type('Updated quote', 'title')
            ->press('Update')

            ->seeInDatabase('quotes', [
                'id' => $quote->id,
                'title' => 'Updated quote'
            ]);
    }

    public function test_it_deletes_quote_from_the_database()
    {
         $user = factory(App\User::class)->create();
         $this->actingAs($user);

         $quote = factory(App\Quote::class)->create();

         $this->visit('dashboard/quotes/'.$quote->id)
            ->press('Delete')

            ->dontSeeInDatabase('quotes', [
                'id' => $quote->id,
                'title' => $quote->title
            ]);
    }
}

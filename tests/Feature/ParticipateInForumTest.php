<?php

namespace Tests\Feature;

use Tests\TestCase;

use Illuminate\Foundation\Testing\DatabaseMigrations;


class ParticipateInForumTest extends TestCase
{
    use DatabaseMigrations;
    function test_an_authenticated_user_may_participe_in_forum_threads(){



        $this->be($user = factory('App\User')->create());

        $thread = factory('App\Thread')->create();

        $reply = factory('App\Reply')->make();

        $this->post('/threads/.$thread->id./replies', $reply->toArray());

        $this->get($thread->path())
        ->assertSee($reply->body);

    }

}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

        function test_a_thread_has_replies(){
            $thread=  factory('App\Reply')->create();
            $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $thread->replies);

        }
        function test_a_thread_has_a_creator(){
            $thread=  factory('App\Reply')->create();

            $this->assertInstanceOf('App\User', $thread->creator);

        }

}

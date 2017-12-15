<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * test the list of users.
     *
     * @return void
     */
    public function testUsersList()
    {
        User::create([
            'name' => 'David García', 
            'email' => 'ccristhiangarcia@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Natalia Mutis', 
            'email' => 'nataliamutis@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $this->visit('/users')
            ->see('David García')
            ->see('Natalia Mutis');
    }
}

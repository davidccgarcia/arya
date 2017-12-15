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

    /**
    * test - create user
    *
    * @return void
    */
    public function testCreateUser()
    {
        $this->visit('/users')
            ->click('Create User')
            ->seePageIs('/users/create')
            ->see('Create User')
            ->type('My first user', 'name')
            ->type('firstuser@mail.com', 'email')
            ->type(bcrypt('123456'), 'password')
            ->press('Create')
            ->seePageIs('/users')
            ->see('My first user')
            ->seeInDatabase('users', [
                'name' => 'My first user', 
                'email' => 'firstuser@mail.com', 
                'password' => bcrypt('123456')
            ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // possible to assign multiple roles with array syntax
        // e.g. ['writer', 'admin']
        User::find(1)->assignRole('writer');
        User::find(2)->assignRole('moderator');
        User::find(3)->assignRole('super-admin');
    }
}

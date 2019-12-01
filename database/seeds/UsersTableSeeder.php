<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Bill Jherson';
        $user->dni = '76696120';
        $user->cip = '114708';
        $user->email = 'metalero.jherson.zl@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();

        factory(User::class, 20)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
      /*  DB::table('Users')-> insert ([
            'name'=>'Pipe',
            'email'=>'Felipe123@gmail.com.com',
            'password' => Hash::make('1234567'),
        ]); */
    }
}

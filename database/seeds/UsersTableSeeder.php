<?php

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
        DB::table('users')->insert([
            'created_at'=>\Carbon\Carbon::now(),
            'username'=>'root',
            'email'=>'root@root.com',
            'password'=>bcrypt('root'),
            'full_name'=>'Root User',
            'contact_no'=>'',
            'address'=>'',
            'status'=>1
        ]);
    }
}

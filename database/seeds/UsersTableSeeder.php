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
            'username'=>'admin123',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
            'full_name'=>'Root User',
            'contact_no'=>'',
            'address'=>'',
            'status'=>1
        ]);
    }
}

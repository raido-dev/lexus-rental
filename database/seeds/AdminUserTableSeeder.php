<?php

use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(LaraBooking\Models\User::class, 1)->create([
            'name' => 'Company Admin',
            'email' => 'admin@admin.com',
            'type' => 'admin',
            'password' => bcrypt('admin')
        ]);
    }
}

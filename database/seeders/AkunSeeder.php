<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@meravi.id',
                'level' => 'admin',
                'whatsapp' => '087805900800',
                'institution' => 'meravi',
                'position' => 'admin',
                'password' => Hash::make('syncore12345'),
            ],
            [
                'name' => 'user',
                'email' => 'user@meravi.id',
                'level' => 'user',
                'whatsapp' => '087805900800',
                'institution' => 'meravi',
                'position' => 'user',
                'password' => Hash::make('syncore12345'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

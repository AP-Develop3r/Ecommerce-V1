<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   

$useradmin=User::create([
	'name' => 'admin Anyelo',
	'email' => 'admin@gmail.com',
	'password' => Hash::make('admin'),
	'type' => '1',
	]);
            
$user1=User::create([
	'name' => 'usuario Marcos',
	'email' => 'user@gmail.com',
	'password' => Hash::make('admin'),
	'type' => '2',
	]);
$user1=User::create([
	'name' => 'usuario Moderador',
	'email' => 'moderador@gmail.com',
	'password' => Hash::make('admin'),
	'type' => '3',
	]);
    }
}

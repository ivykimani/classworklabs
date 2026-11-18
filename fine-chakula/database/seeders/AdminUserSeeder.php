<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class AdminUserSeeder extends Seeder
{
 public function run(): void
 {
 User::updateOrCreate(
 ['email' => 'admin@finechakula.com'],
 [
 'name' => 'System Administrator',
 'phone' => '0700000000',
 'password' => Hash::make('Admin12345'),
 'role' => 'admin',
 ]
 );
 }
}
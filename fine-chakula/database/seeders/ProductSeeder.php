<?php
namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
class ProductSeeder extends Seeder
{
 public function run(): void
 {
 $products = [
 [
 'name' => 'Chicken and Ugali',
 'category' => 'Main Meals',
 'description' => 'Grilled chicken served with ugali.',
 'price' => 450,
 'is_available' => true,
 ],
 [
 'name' => 'Beef Stew and Rice',
 'category' => 'Main Meals',
 'description' => 'Fresh beef stew served with rice.',
 'price' => 350,
 'is_available' => true,
 ],
 [
 'name' => 'Chips and Sausage',
 'category' => 'Snacks',
 'description' => 'Crispy chips served with sausage.',
 'price' => 250,
 'is_available' => true,
 ],
 [
 'name' => 'Fresh Juice',
 'category' => 'Drinks',
 'description' => 'Freshly prepared fruit juice.',
 'price' => 150,
 'is_available' => true,
 ],
 ];
 foreach ($products as $product) {
 Product::updateOrCreate(
 ['name' => $product['name']],
 $product
 );
 }
 }
}

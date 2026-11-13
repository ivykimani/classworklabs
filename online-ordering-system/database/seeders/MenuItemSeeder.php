<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('menu_items')->insert([
            [
                'name' => 'Classic Cheese Burger',
                'description' => 'Flame-grilled beef patty layered with melted cheddar cheese, crisp lettuce, ripe tomatoes, and signature gourmet sauce on a toasted bun.',
                'price' => 850,
                'image' => 'images/burger.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gourmet Pepperoni Pizza',
                'description' => 'Fresh hand-tossed dough topped with premium zesty tomato sauce, gooey mozzarella cheese, and generous slices of cured pepperoni shards.',
                'price' => 1200,
                'image' => 'images/pizza.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crunchy Caesar Salad',
                'description' => 'Crisp romaine hearts tossed in creamy garlic Caesar dressing, loaded with house-baked buttery croutons and shredded parmesan blocks.',
                'price' => 650,
                'image' => 'images/salad.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Flame-Grilled Nyama Choma',
                'description' => 'Tender, slow-roasted local goat meat seasoned with sea salt, grilled over charcoal, and served with a fresh side of kachumbari.',
                'price' => 1500,
                'image' => 'images/nyama-choma.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Swahili Chicken Biryani',
                'description' => 'Fragrant basmati rice infused with aromatic coastal spices, layered with tender marinated chicken cooked in a rich, flavorful thick sauce.',
                'price' => 950,
                'image' => 'images/biryani.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Loaded Garlic Fries',
                'description' => 'Crispy golden potato fries seasoned with roasted garlic herb sea salt dust and tossed in fresh finely-chopped garden parsley leaves.',
                'price' => 400,
                'image' => 'images/fries.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Honey BBQ Wings',
                'description' => 'Six pieces of crispy, deep-fried chicken wings tossed in a sweet and smoky hickory honey barbecue glaze, served with a cool ranch dip.',
                'price' => 750,
                'image' => 'images/wings.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Decadent Fudge Cake',
                'description' => 'A rich, moist slice of double chocolate layer cake smothered in smooth chocolate fudge frosting and topped with dark curls.',
                'price' => 500,
                'image' => 'images/cake.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mango Passion Smoothie',
                'description' => 'A refreshing chilled blend of real local mangoes and tangy passion fruit juice, freshly squeezed with zero artificial additives.',
                'price' => 350,
                'image' => 'images/mango_passion_smoothie.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


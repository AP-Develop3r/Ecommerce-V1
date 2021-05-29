<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        Product::create([
            'name' => 'Hallaca',
            'slug' => 'macbook-pro',
            'details' => 'Pollo, Carne y Chancho',
            'price' => 5.99,
            'shipping_cost' => 29.99,
            'description' => 'Plato tipico Venezolano: Hallaca ',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'hallaca2.jpg'
        ]);

        Product::create([
            'name' => 'Pan de Jamon',
            'slug' => 'vostro-3557',
            'details' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 1499.99,
            'shipping_cost' => 19.99,
            'description' => 'Dell Vostro 3557',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'pan.jpg'
        ]);

        Product::create([
            'name' => 'Pasticho',
            'slug' => 'iphone-11-pro',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 649.99,
            'shipping_cost' => 14.99,
            'description' => 'iPhone 11 Pro',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'pasticho.jpg'
        ]);

        Product::create([
            'name' => 'Marquesa',
            'slug' => 'remax-610d',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 8.99,
            'shipping_cost' => 1.89,
            'description' => 'Remax 610D Headset',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'marquesa.jpg'
        ]);

        Product::create([
            'name' => 'Chicha',
            'slug' => 'samsung-led-24',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 41.99,
            'shipping_cost' => 12.59,
            'description' => 'Samsung LED TV',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'chicha.jpg'
        ]);

        Product::create([
            'name' => 'Tequeño',
            'slug' => 'samsung-mv800',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 144.99,
            'shipping_cost' => 13.39,
            'description' => 'Samsung Digital Camera',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'teque.png'
        ]);

        Product::create([
            'name' => 'Quesillo',
            'slug' => 'gr5-2017',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 148.99,
            'shipping_cost' => 6.79,
            'description' => 'Huawei GR 5 2017',
            'category_id' => 2,
            'brand_id' => 3,
            'image_path' => 'quesillo.png'
        ]);
        Product::create([
            'name' => 'Gelatina',
            'slug' => 'gr5-2018',
            'details' => 'En vaso',
            'price' => 1.99,
            'shipping_cost' => 6.79,
            'description' => 'Sabor a fresa, manzana, uva, etc.',
            'category_id' => 2,
            'brand_id' => 6,
            'image_path' => 'gelatina.png'
        ]);
    }
}

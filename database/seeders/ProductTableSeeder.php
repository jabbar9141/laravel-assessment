<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $products = [
            [
                'name' => 'Samsung Official AKG Type-C Handfree Original',
                'base_price' => 3999,
            ],
            [
                'name' => 'MI Redmi AirDots 2 TWS Earphone Stereo Bass',
                'base_price' => 3499,
            ],
            [
                'name' => 'Xiaomi Mi TV Stick 4K',
                'base_price' => 12499,
            ],
            [
                'name' => 'Xiaomi MI Wireless Bluetooth Portable Pocket',
                'base_price' => 12499,
            ],
            [
                'name' => 'Samsung 25W Adapter Black (2 Pin)',
                'base_price' => 3399,
            ],
            [
                'name' => 'Samsung Galaxy Note 10 Clear View Case - Black',
                'base_price' => 4499,
            ],
            [
                'name' => 'OnePlus Warp Charge 65W Power Adapter',
                'base_price' => 6200,
            ],
            [
                'name' => 'Samsung Galaxy Smart Tag',
                'base_price' => 5099,
            ],
            [
                'name' => 'Samsung Galaxy S23 Ultra Silicone Case - Green',
                'base_price' => 6100,
            ],
            [
                'name' => 'Google Chromecast 4K with Google TV',
                'base_price' => 17399,
            ]
        ];

        foreach ($products as $product) {
            $product['created_at'] = now();
            $product['updated_at'] = now();
            Product::create($product);
        }

    }
}

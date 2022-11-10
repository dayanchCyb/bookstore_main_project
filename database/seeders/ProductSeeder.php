<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $objs = [
            [
                'category_id' => 1,
                'name' => 'The Happiness Hypothesis',
                'price' => 120.00,
                'barcode' => 234244234,
                'author' => 'Jonathan Haidt',

            ],
            [
                'category_id' => 1,
                'name' => 'Every thing is F*cked',
                'price' => 130.00,
                'barcode' => 324324223,
                'author' => 'Mark Manson',
            ],
            [
                'category_id' => 2,
                'name' => "Ferrari'sini Satan Bilge",
                'price' => 200.00,
                'barcode' => 355324223,
                'author' => 'Robin Sharma',

            ],[
                'category_id' => 2,
                'name' => "Millionaire Expat How to Build Wealth Living Overseas ",
                'price' => 170.00,
                'barcode' => 365324223,
                'author' => 'Andrew Hallam',

            ],
            [
                'category_id' => 2,
                'name' => "Rich Dad, Poor Dad ",
                'price' => 300.00,
                'barcode' => 6455324223,
                'author' => 'Robert Kiyosaki',

            ],
        ];

        foreach ($objs as $obj) {
            Product::create([
                'category_id' => $obj['category_id'],
                'name' => $obj['name'],
                'price' => $obj['price'],
                'barcode' => $obj['barcode'],
                'author' => $obj['author'],

            ]);
        }
    }
}

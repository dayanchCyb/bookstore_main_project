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
            ],
            [
                'category_id' => 1,
                'name' => 'Every thing is F*cked',
                'price' => 130.00,
                'barcode' => 324324223,

            ],
        ];
        foreach ($objs as $obj) {
            Product::create([
                'category_id' => $obj['category_id'],
                'name' => $obj['name'],
                'price' => $obj['price'],
                'barcode' => $obj['barcode'],
            ]);
        }
    }
}

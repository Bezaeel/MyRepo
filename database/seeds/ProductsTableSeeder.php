<?php

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
        //
        DB::table('products')->insert(['name'=>'Mini skirt black', 'title'=>'Mini skirt black edition', 'description'=>'mini skirt by @house_of_oti','price'=>70]);

        DB::table('products')->insert(['name'=>'T-shirt blue', 'title'=>'T-shirt blue edition', 'description'=>'T-shirt by @Trane','price'=>70]);

        DB::table('products')->insert(['name'=>'Maxi-gown blue', 'title'=>'Maxi-gown blue edition', 'description'=>'Maxi-gown by @fon','price'=>70]);
    }
}

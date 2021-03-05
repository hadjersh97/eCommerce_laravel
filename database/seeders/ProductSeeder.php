<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  

         DB::table('products')->insert(
         [
          [
             'name'=> 'LG mobile',
             'price'=>'200',
             'description'=>'A smarthpne with 4gb ram and much more features',
             'category'=>'mobile',
             'gallery'=>'https://www.lg.com/in/images/mobile-phones/md07518623/gallery/LMF100EMW-DZ-01.jpg',
         ],
         [
            'name'=> 'Opoo mobile',
            'price'=>'700',
            'description'=>'A smarthpne with 32 gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://i0.wp.com/i.gadgets360cdn.com/large/oopo_k7x_render_product_suning_1604408126745.jpg',
         ],
         [
            'name'=> 'Panasonic TV',
            'price'=>'500',
            'description'=>'A smart television  and much more features',
            'category'=>'tv',
            'gallery'=>'https://www.trustedreviews.com/wp-content/uploads/sites/54/2019/01/panasonic-gz2000-front.jpg',
         ],
         [
            'name'=> 'Sonny TV',
            'price'=>'800',
            'description'=>'A smart tvlevision and much more features',
            'category'=>'tv',
            'gallery'=>'https://i.gadgets360cdn.com/products/large/Sony-KDL-43W6603-DB-761x800-1592826564.jpg',
        ]
        ]);       
    }
}

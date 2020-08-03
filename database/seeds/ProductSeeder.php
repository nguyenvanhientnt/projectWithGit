<?php

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
//        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Quần đùi nam',
                'category_id' => 1,
                'price' => 200,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'ils06axkvv1dafawwlfj,oscimoawxs4tkjfoysfo,rn7bnjipaxskexrh4amy',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Áo thun nam',
                'category_id' => 1,
                'price' => 300,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'oscimoawxs4tkjfoysfo,rn7bnjipaxskexrh4amy',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Đồ bơi nam',
                'category_id' => 1,
                'price' => 200,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'rn7bnjipaxskexrh4amy',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 4,
                'name' => 'Đồ bơi nữ',
                'category_id' => 2,
                'price' => 100,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'dfd4ggwlyyufbjlbcfzx',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 5,
                'name' => 'Áo trẻ em',
                'category_id' => 3,
                'price' => 250,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'ko2v8yp8uclgyzhoycxe',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 6,
                'name' => 'Áo dài nữ',
                'category_id' => 2,
                'price' => 150,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'm9kasdkqneycqabzhyf0',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 7,
                'name' => 'Quần trẻ em',
                'category_id' => 3,
                'price' => 150,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'jpsro8mb8ehyhhxemswa',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 8,
                'name' => 'Váy nữ hoạ tiết',
                'category_id' => 2,
                'price' => 250,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'hm7xnsbc7wkv9msyuhwh',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 9,
                'name' => 'Váy công chúa',
                'category_id' => 3,
                'price' => 350,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'krq9ag9jvzioqf0uo7ro',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'id' => 10,
                'name' => 'Dép trẻ em',
                'category_id' => 3,
                'price' => 130,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'haznnsm4khhyzika6drh',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-32)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-32)->format('Y-m-d H:i:s'),
                'status' => 1
            ]
        ]);
//        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

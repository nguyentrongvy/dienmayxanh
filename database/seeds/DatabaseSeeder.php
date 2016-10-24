<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        \App\Admin::create([
        	'name' => 'NGuyễn trọng vỹ',
            'email'=> 'nguyentrongvy151995@gmail.com',
            'password'=>bcrypt('admin123')
        ]);

        \App\Categories::create([
         'name' => 'Khuyến mãi',
         'parent_id' => '0',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Bình nước nóng',
         'parent_id' => '0',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Bình Nước nóng Ariston',
         'parent_id' => '2',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Bình Nước Nóng Picenza',
         'parent_id' => '2',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Bình Nước Nóng Midea',
         'parent_id' => '2',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Bình Nước Nóng Electrolux',
         'parent_id' => '2',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);

        \App\Categories::create([
         'name' => 'Bình Nước Nóng Picenza',
         'parent_id' => '2',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);

        \App\Categories::create([
         'name' => 'Điều hòa',
         'parent_id' => '0',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);

        \App\Categories::create([
         'name' => 'Điều Hòa Panasonic',
         'parent_id' => '8',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);

        \App\Categories::create([
         'name' => 'Điều Hòa Daikin',
         'parent_id' => '8',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Điều Hòa Midea',
         'parent_id' => '8',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Điều Hòa Gree',
         'parent_id' => '8',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Dụng cụ cầm tay',
         'parent_id' => '0',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Dụng Cụ Cầm Tay Bosch',
         'parent_id' => '13',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Linh Kiện Bosch',
         'parent_id' => '13',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'Dụng Cụ Cầm tay Silk',
         'parent_id' => '13',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'MÁY SƯỞI',
         'parent_id' => '0',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
        \App\Categories::create([
         'name' => 'QUẠT CẮT GIÓ',
         'parent_id' => '0',
         'slug' => '',
         'set_title' => '',
         'meta_desc' => '',
         'meta_key' => ''
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // User::create([
          //   'name'=>'Rian sopyandi',
          //   'email'=>'sopyandirian12@gmail.com',
          //   'password'=>bcrypt('12345')
          // ]);
          // User::create([
            //   'name'=>'Anisa Fitria',
            //   'email'=>'anisafitria15@gmail.com',
            //   'password'=>bcrypt('54321')
            // ]);
          
            
    //   Post::create([
    //      'title'=>'Judul Berita Pertama',
    //      'slug'=>'judul-berita-pertama',
    //      'category_id'=>1,
    //      'user_id'=>1,
    //      'exerp'=>'Berita Pertama Ini Menceritakan tentang sesuatu yang
    //      membuat mata anda merinding yang harusnya bisa bersenang 
    //      senang saya sedan gbersama dengan takdir yan gselallu bersahaja 
    //      selalu ada si dalam hati saya masing masing',
    //      'body'=>'gbersama dengan takdir yan gselallu bersahaja 
    //      selalu ada si dalam hati saya masing masin Berita Pertama Ini Menceritakan tentang sesuatu yang
    //      membuat mata anda merinding yang harusnya bisa 
    //      senang saya sedan gbersama dengan takdir yan gselallu bersahaja Berita Pertama Ini Menceritakan tentang sesuatu yang
    //      membuat mata anda merinding yang harusnya bisa bersenang 
    //      senang saya sedan gbersama dengan takdir yan gselallu bersahaja'
    //   ]);
    //   Post::create([
    //     'title'=>'Judul Berita Kedua',
    //     'slug'=>'judul-berita-kedua',
    //     'category_id'=>3,
    //     'user_id'=>2,
    //     'exerp'=>'Berita Pertama Ini Menceritakan tentang sesuatu yang
    //     membuat mata anda merinding yang harusnya bisa bersenang 
    //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja 
    //     selalu ada si dalam hati saya masing masing',
    //     'body'=>'gbersama dengan takdir yan gselallu bersahaja 
    //     selalu ada si dalam hati saya masing masin Berita Pertama Ini Menceritakan tentang sesuatu yang
    //     membuat mata anda merinding yang harusnya bisa 
    //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja Berita Pertama Ini Menceritakan tentang sesuatu yang
    //     membuat mata anda merinding yang harusnya bisa bersenang 
    //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja'
    //  ]);
    //  Post::create([
    //     'title'=>'Judul Berita Ketiga',
    //     'slug'=>'judul-berita-ketiga',
    //     'category_id'=>2,
    //     'user_id'=>1,
    //     'exerp'=>'Berita Pertama Ini Menceritakan tentang sesuatu yang
    //     membuat mata anda merinding yang harusnya bisa bersenang 
    //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja 
    //     selalu ada si dalam hati saya masing masing',
    //     'body'=>'gbersama dengan takdir yan gselallu bersahaja 
    //     selalu ada si dalam hati saya masing masin Berita Pertama Ini Menceritakan tentang sesuatu yang
    //     membuat mata anda merinding yang harusnya bisa 
    //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja Berita Pertama Ini Menceritakan tentang sesuatu yang
    //     membuat mata anda merinding yang harusnya bisa bersenang 
    //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja'
    //  ]);
    //  Post::create([
    //     'title'=>'Judul Berita Keempat',
    //     'slug'=>'judul-berita-keempat',
    //     'category_id'=>1,
    //     'user_id'=>2,
    //     'exerp'=>'Berita Pertama Ini Menceritakan tentang sesuatu yang
    //     membuat mata anda merinding yang harusnya bisa bersenang 
    //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja 
    //     selalu ada si dalam hati saya masing masing',
    //     'body'=>'gbersama dengan takdir yan gselallu bersahaja 
    //     selalu ada si dalam hati saya masing masin Berita Pertama Ini Menceritakan tentang sesuatu yang
    //     membuat mata anda merinding yang harusnya bisa 
    //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja Berita Pertama Ini Menceritakan tentang sesuatu yang
    //     membuat mata anda merinding yang harusnya bisa bersenang 
    //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja'
    //  ]);
    //  Post::create([
      //     'title'=>'Judul Berita Kelima',
      //     'slug'=>'judul-berita-kelima',
      //     'category_id'=>3,
      //     'user_id'=>2,
      //     'exerp'=>'Berita Pertama Ini Menceritakan tentang sesuatu yang
      //     membuat mata anda merinding yang harusnya bisa bersenang 
      //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja 
      //     selalu ada si dalam hati saya masing masing',
      //     'body'=>'gbersama dengan takdir yan gselallu bersahaja 
      //     selalu ada si dalam hati saya masing masin Berita Pertama Ini Menceritakan tentang sesuatu yang
      //     membuat mata anda merinding yang harusnya bisa 
      //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja Berita Pertama Ini Menceritakan tentang sesuatu yang
      //     membuat mata anda merinding yang harusnya bisa bersenang 
      //     senang saya sedan gbersama dengan takdir yan gselallu bersahaja'
      //  ]);
      
      //Factory User
      User::factory(5)->create();
      Post::factory(10)->create();
      Category::create([
        'nama'=>'Web Programing',
        'slug'=>'web-programing'
      ]);
      Category::create([
        'nama'=>'Web Disign',
        'slug'=>'web-disign'
      ]);
      Category::create([
        'nama'=>'Web personal',
        'slug'=>'web-persona'
      ]);
    }
}

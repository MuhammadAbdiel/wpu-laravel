<?php

namespace Database\Seeders;

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

        User::create([
            'name' => 'Muhammad Abdiel Firjatullah',
            'username' => "muhammadabdiel",
            'email' => 'abdielfirdie@gmail.com',
            'password' => bcrypt('13122001')
        ]);

        // User::create([
        //     'name' => 'Subagyo Markonah',
        //     'email' => 'sukunahikona@gmail.com',
        //     'password' => bcrypt('0123456789')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id sed ut, perspiciatis quisquam nemo maxime quis, eligendi fuga dicta dolor nam harum! Minima, tempore fugit! Illum, odio. Odit accusamus adipisci sequi nesciunt, veritatis, similique ut nisi voluptatibus id rerum beatae?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id sed ut, perspiciatis quisquam nemo maxime quis, eligendi fuga dicta dolor nam harum! Minima, tempore fugit! Illum, odio.</p><p> Odit accusamus adipisci sequi nesciunt, veritatis, similique ut nisi voluptatibus id rerum beatae? Voluptatem ducimus vero odit id doloribus autem beatae, perferendis distinctio nulla corrupti natus aliquid explicabo repellat. Dignissimos ex autem, quos saepe numquam cupiditate magni sint, placeat molestiae voluptates natus enim. Dicta libero doloremque praesentium eum natus eligendi quia fuga architecto perferendis eveniet, corrupti fugiat ex quam cum aperiam facilis quidem, accusantium sit rem eius, nisi voluptatem ipsa! Eos perferendis quas perspiciatis consectetur illo! Dicta accusantium nisi praesentium pariatur aliquam ea illum explicabo, ipsum vel obcaecati excepturi ex placeat quam!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id sed ut, perspiciatis quisquam nemo maxime quis, eligendi fuga dicta dolor nam harum! Minima, tempore fugit! Illum, odio. Odit accusamus adipisci sequi nesciunt, veritatis, similique ut nisi voluptatibus id rerum beatae?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id sed ut, perspiciatis quisquam nemo maxime quis, eligendi fuga dicta dolor nam harum! Minima, tempore fugit! Illum, odio.</p><p> Odit accusamus adipisci sequi nesciunt, veritatis, similique ut nisi voluptatibus id rerum beatae? Voluptatem ducimus vero odit id doloribus autem beatae, perferendis distinctio nulla corrupti natus aliquid explicabo repellat. Dignissimos ex autem, quos saepe numquam cupiditate magni sint, placeat molestiae voluptates natus enim. Dicta libero doloremque praesentium eum natus eligendi quia fuga architecto perferendis eveniet, corrupti fugiat ex quam cum aperiam facilis quidem, accusantium sit rem eius, nisi voluptatem ipsa! Eos perferendis quas perspiciatis consectetur illo! Dicta accusantium nisi praesentium pariatur aliquam ea illum explicabo, ipsum vel obcaecati excepturi ex placeat quam!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id sed ut, perspiciatis quisquam nemo maxime quis, eligendi fuga dicta dolor nam harum! Minima, tempore fugit! Illum, odio. Odit accusamus adipisci sequi nesciunt, veritatis, similique ut nisi voluptatibus id rerum beatae?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id sed ut, perspiciatis quisquam nemo maxime quis, eligendi fuga dicta dolor nam harum! Minima, tempore fugit! Illum, odio.</p><p> Odit accusamus adipisci sequi nesciunt, veritatis, similique ut nisi voluptatibus id rerum beatae? Voluptatem ducimus vero odit id doloribus autem beatae, perferendis distinctio nulla corrupti natus aliquid explicabo repellat. Dignissimos ex autem, quos saepe numquam cupiditate magni sint, placeat molestiae voluptates natus enim. Dicta libero doloremque praesentium eum natus eligendi quia fuga architecto perferendis eveniet, corrupti fugiat ex quam cum aperiam facilis quidem, accusantium sit rem eius, nisi voluptatem ipsa! Eos perferendis quas perspiciatis consectetur illo! Dicta accusantium nisi praesentium pariatur aliquam ea illum explicabo, ipsum vel obcaecati excepturi ex placeat quam!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id sed ut, perspiciatis quisquam nemo maxime quis, eligendi fuga dicta dolor nam harum! Minima, tempore fugit! Illum, odio. Odit accusamus adipisci sequi nesciunt, veritatis, similique ut nisi voluptatibus id rerum beatae?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id sed ut, perspiciatis quisquam nemo maxime quis, eligendi fuga dicta dolor nam harum! Minima, tempore fugit! Illum, odio.</p><p> Odit accusamus adipisci sequi nesciunt, veritatis, similique ut nisi voluptatibus id rerum beatae? Voluptatem ducimus vero odit id doloribus autem beatae, perferendis distinctio nulla corrupti natus aliquid explicabo repellat. Dignissimos ex autem, quos saepe numquam cupiditate magni sint, placeat molestiae voluptates natus enim. Dicta libero doloremque praesentium eum natus eligendi quia fuga architecto perferendis eveniet, corrupti fugiat ex quam cum aperiam facilis quidem, accusantium sit rem eius, nisi voluptatem ipsa! Eos perferendis quas perspiciatis consectetur illo! Dicta accusantium nisi praesentium pariatur aliquam ea illum explicabo, ipsum vel obcaecati excepturi ex placeat quam!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

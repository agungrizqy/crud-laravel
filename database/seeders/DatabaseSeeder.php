<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(5)->create();
        // // User::create([
        // //     'name' => 'Agung Rizqy Wiryawan',
        // //     'email' => 'agungrizqy13@gmail.comn',
        // //     'password' => bcrypt('12345')
        // // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur
        //     adipisicing elit. Ut natus cum corporis quisquam, qui non.',
        //     'body' => '<p>
        //         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque dolorem quo
        //         recusandae adipisci dolor placeat aliquam hic saepe, modi numquam sunt ex
        //         dolores magnam id facilis possimus nihil enim asperiores nesciunt? Natus
        //         veritatis ab tenetur excepturi nisi, fugit non! Deleniti sapiente nam iste
        //         voluptates expedita quia recusandae quas cum aliquam!
        //         </p>
        //         <p>
        //         atque sapiente, sit molestiae, eos cumque ad, nemo magni maxime magnam quo
        //         pariatur nihil quis aliquam inventore blanditiis. Necessitatibus ducimus
        //         totam inventore tempora maiores cum nulla autem rerum animi illum
        //         consectetur quam ut magni placeat, nostrum assumenda unde libero quas cumque
        //         molestiae a nesciunt! Rem repellendus dolorum fuga error.
        //         </p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur
        //     adipisicing elit. Ut natus cum corporis quisquam, qui non.',
        //     'body' => '<p>
        //         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque dolorem quo
        //         recusandae adipisci dolor placeat aliquam hic saepe, modi numquam sunt ex
        //         dolores magnam id facilis possimus nihil enim asperiores nesciunt? Natus
        //         veritatis ab tenetur excepturi nisi, fugit non! Deleniti sapiente nam iste
        //         voluptates expedita quia recusandae quas cum aliquam!
        //         </p>
        //         <p>
        //         atque sapiente, sit molestiae, eos cumque ad, nemo magni maxime magnam quo
        //         pariatur nihil quis aliquam inventore blanditiis. Necessitatibus ducimus
        //         totam inventore tempora maiores cum nulla autem rerum animi illum
        //         consectetur quam ut magni placeat, nostrum assumenda unde libero quas cumque
        //         molestiae a nesciunt! Rem repellendus dolorum fuga error.
        //         </p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur
        //     adipisicing elit. Ut natus cum corporis quisquam, qui non.',
        //     'body' => '<p>
        //         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque dolorem quo
        //         recusandae adipisci dolor placeat aliquam hic saepe, modi numquam sunt ex
        //         dolores magnam id facilis possimus nihil enim asperiores nesciunt? Natus
        //         veritatis ab tenetur excepturi nisi, fugit non! Deleniti sapiente nam iste
        //         voluptates expedita quia recusandae quas cum aliquam!
        //         </p>
        //         <p>
        //         atque sapiente, sit molestiae, eos cumque ad, nemo magni maxime magnam quo
        //         pariatur nihil quis aliquam inventore blanditiis. Necessitatibus ducimus
        //         totam inventore tempora maiores cum nulla autem rerum animi illum
        //         consectetur quam ut magni placeat, nostrum assumenda unde libero quas cumque
        //         molestiae a nesciunt! Rem repellendus dolorum fuga error.
        //         </p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur
        //     adipisicing elit. Ut natus cum corporis quisquam, qui non.',
        //     'body' => '<p>
        //         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque dolorem quo
        //         recusandae adipisci dolor placeat aliquam hic saepe, modi numquam sunt ex
        //         dolores magnam id facilis possimus nihil enim asperiores nesciunt? Natus
        //         veritatis ab tenetur excepturi nisi, fugit non! Deleniti sapiente nam iste
        //         voluptates expedita quia recusandae quas cum aliquam!
        //         </p>
        //         <p>
        //         atque sapiente, sit molestiae, eos cumque ad, nemo magni maxime magnam quo
        //         pariatur nihil quis aliquam inventore blanditiis. Necessitatibus ducimus
        //         totam inventore tempora maiores cum nulla autem rerum animi illum
        //         consectetur quam ut magni placeat, nostrum assumenda unde libero quas cumque
        //         molestiae a nesciunt! Rem repellendus dolorum fuga error.
        //         </p>'
        // ]);

    }
}

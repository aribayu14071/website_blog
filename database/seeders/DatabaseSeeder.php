<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Ari Bayu Bastian',
            'username' => 'aribayubastian',
            'email' => 'bastian.bayu@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Nafisha Bastian',
        //     'email' => 'NafishaBastian@gmail.com',
        //     'password' => bcrypt('123456')
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
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, suscipit?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit aperiam nam cum. Quidem, eum sunt? Consectetur accusamus impedit at alias vero deserunt nesciunt omnis enim sit, itaque aperiam, non culpa numquam ad et reprehenderit distinctio corporis eligendi perferendis perspiciatis. Doloremque dolor asperiores adipisci debitis repellendus perferendis ipsam placeat veritatis iure explicabo est porro, reiciendis impedit consequuntur? Perspiciatis provident similique vel. Eius, quod, eligendi consequatur atque accusamus consectetur voluptatum recusandae pariatur fugit doloremque nemo esse voluptatem. Aliquam corrupti rerum dolorum illo id, vitae nam repellat eligendi doloremque ipsum molestiae unde eius tenetur, quos commodi, eum voluptatum magnam.</p><p> Laudantium amet sequi facilis nam modi, dolorum mollitia quo totam nobis nostrum harum quis hic. Sint quam laboriosam obcaecati voluptates, tempora placeat id praesentium!, Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsa quasi, et eos repudiandae possimus ducimus necessitatibus fugit dolores blanditiis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eligendi adipisci quisquam ex eius. Omnis soluta explicabo inventore! Omnis, doloremque?</p>'

        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, suscipit?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit aperiam nam cum. Quidem, eum sunt? Consectetur accusamus impedit at alias vero deserunt nesciunt omnis enim sit, itaque aperiam, non culpa numquam ad et reprehenderit distinctio corporis eligendi perferendis perspiciatis. Doloremque dolor asperiores adipisci debitis repellendus perferendis ipsam placeat veritatis iure explicabo est porro, reiciendis impedit consequuntur? Perspiciatis provident similique vel. Eius, quod, eligendi consequatur atque accusamus consectetur voluptatum recusandae pariatur fugit doloremque nemo esse voluptatem. Aliquam corrupti rerum dolorum illo id, vitae nam repellat eligendi doloremque ipsum molestiae unde eius tenetur, quos commodi, eum voluptatum magnam.</p><p> Laudantium amet sequi facilis nam modi, dolorum mollitia quo totam nobis nostrum harum quis hic. Sint quam laboriosam obcaecati voluptates, tempora placeat id praesentium!, Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsa quasi, et eos repudiandae possimus ducimus necessitatibus fugit dolores blanditiis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eligendi adipisci quisquam ex eius. Omnis soluta explicabo inventore! Omnis, doloremque?</p>'

        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, suscipit?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit aperiam nam cum. Quidem, eum sunt? Consectetur accusamus impedit at alias vero deserunt nesciunt omnis enim sit, itaque aperiam, non culpa numquam ad et reprehenderit distinctio corporis eligendi perferendis perspiciatis. Doloremque dolor asperiores adipisci debitis repellendus perferendis ipsam placeat veritatis iure explicabo est porro, reiciendis impedit consequuntur? Perspiciatis provident similique vel. Eius, quod, eligendi consequatur atque accusamus consectetur voluptatum recusandae pariatur fugit doloremque nemo esse voluptatem. Aliquam corrupti rerum dolorum illo id, vitae nam repellat eligendi doloremque ipsum molestiae unde eius tenetur, quos commodi, eum voluptatum magnam.</p><p> Laudantium amet sequi facilis nam modi, dolorum mollitia quo totam nobis nostrum harum quis hic. Sint quam laboriosam obcaecati voluptates, tempora placeat id praesentium!, Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsa quasi, et eos repudiandae possimus ducimus necessitatibus fugit dolores blanditiis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eligendi adipisci quisquam ex eius. Omnis soluta explicabo inventore! Omnis, doloremque?</p>'

        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Ke Keempat',
        //     'slug' => 'judul-ke-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, suscipit?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit aperiam nam cum. Quidem, eum sunt? Consectetur accusamus impedit at alias vero deserunt nesciunt omnis enim sit, itaque aperiam, non culpa numquam ad et reprehenderit distinctio corporis eligendi perferendis perspiciatis. Doloremque dolor asperiores adipisci debitis repellendus perferendis ipsam placeat veritatis iure explicabo est porro, reiciendis impedit consequuntur? Perspiciatis provident similique vel. Eius, quod, eligendi consequatur atque accusamus consectetur voluptatum recusandae pariatur fugit doloremque nemo esse voluptatem. Aliquam corrupti rerum dolorum illo id, vitae nam repellat eligendi doloremque ipsum molestiae unde eius tenetur, quos commodi, eum voluptatum magnam.</p><p> Laudantium amet sequi facilis nam modi, dolorum mollitia quo totam nobis nostrum harum quis hic. Sint quam laboriosam obcaecati voluptates, tempora placeat id praesentium!, Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsa quasi, et eos repudiandae possimus ducimus necessitatibus fugit dolores blanditiis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eligendi adipisci quisquam ex eius. Omnis soluta explicabo inventore! Omnis, doloremque?</p>'

        // ]);
    }
}

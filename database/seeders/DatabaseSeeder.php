<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Blog::truncate();
        \App\Models\User::factory(1)->create();

        $frontend = Category::create([
            'name'=>'frontend',
            'slug'=>'frontend'
        ]);
        $backend = Category::create([
            'name'=>'backend',
            'slug'=>'backend'
        ]);
        Blog::create([
            'title'=>'frontend post',
            'slug'=>'frontend-post',
            'intro'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deserunt quaerat cupiditate cum nihil non ipsam obcaecati...',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deserunt quaerat cupiditate cum nihil non ipsam obcaecati amet minus veritatis id, veniam accusantium nobis. Explicabo neque qui veniam, recusandae laborum accusamus ipsam eaque illo ex sapiente, modi iste officiis consequuntur rem sunt voluptates assumenda. Ea incidunt soluta quas eaque laborum similique at accusantium dolorem, itaque earum corrupti veniam iste optio! Consectetur, dolor eaque. Incidunt minus quos, aliquid blanditiis deserunt nulla quasi odio voluptas delectus, hic distinctio est. Repellat ratione minima asperiores laborum repellendus suscipit perferendis dolor. Quisquam dolorum voluptates sunt suscipit voluptatibus, repellat et consequatur quam obcaecati debitis. Perspiciatis, commodi.',
            'category_id'=>$frontend->id

        ]);
        Blog::create([
            'title'=>'backend post',
            'slug'=>'backend-post',
            'intro'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deserunt quaerat cupiditate cum nihil non ipsam obcaecati...',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deserunt quaerat cupiditate cum nihil non ipsam obcaecati amet minus veritatis id, veniam accusantium nobis. Explicabo neque qui veniam, recusandae laborum accusamus ipsam eaque illo ex sapiente, modi iste officiis consequuntur rem sunt voluptates assumenda. Ea incidunt soluta quas eaque laborum similique at accusantium dolorem, itaque earum corrupti veniam iste optio! Consectetur, dolor eaque. Incidunt minus quos, aliquid blanditiis deserunt nulla quasi odio voluptas delectus, hic distinctio est. Repellat ratione minima asperiores laborum repellendus suscipit perferendis dolor. Quisquam dolorum voluptates sunt suscipit voluptatibus, repellat et consequatur quam obcaecati debitis. Perspiciatis, commodi.',
            'category_id'=>$backend->id

        ]);
    }
}

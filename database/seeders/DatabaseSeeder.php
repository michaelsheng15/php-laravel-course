<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
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

        User::truncate();
        Category::truncate();
        Post::truncate();

        Post::factory(5)->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies sapien eu tempus finibus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies sapien eu tempus finibus. Praesent vel nunc convallis, rhoncus diam ac, mollis nibh. Fusce sit amet maximus nisl, et tempor odio. Sed sed imperdiet elit. Nulla efficitur enim vitae justo suscipit interdum. Nullam eget nisl eget odio placerat molestie. Suspendisse volutpat lacus sed massa congue posuere. Vestibulum pharetra orci arcu, sed gravida odio mollis in. Praesent placerat, ligula non aliquet imperdiet, turpis dui blandit felis, sed consequat dui nibh quis elit. Pellentesque non metus vel felis aliquet ullamcorper et sed felis. Cras laoreet commodo ligula eu egestas. In et lorem non quam feugiat elementum id quis erat. Vestibulum condimentum, odio ac pellentesque auctor, lectus lacus scelerisque sapien, in commodo tortor sapien et orci. Nulla facilisi.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies sapien eu tempus finibus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies sapien eu tempus finibus. Praesent vel nunc convallis, rhoncus diam ac, mollis nibh. Fusce sit amet maximus nisl, et tempor odio. Sed sed imperdiet elit. Nulla efficitur enim vitae justo suscipit interdum. Nullam eget nisl eget odio placerat molestie. Suspendisse volutpat lacus sed massa congue posuere. Vestibulum pharetra orci arcu, sed gravida odio mollis in. Praesent placerat, ligula non aliquet imperdiet, turpis dui blandit felis, sed consequat dui nibh quis elit. Pellentesque non metus vel felis aliquet ullamcorper et sed felis. Cras laoreet commodo ligula eu egestas. In et lorem non quam feugiat elementum id quis erat. Vestibulum condimentum, odio ac pellentesque auctor, lectus lacus scelerisque sapien, in commodo tortor sapien et orci. Nulla facilisi.</p>'
        // ]);


    }
};

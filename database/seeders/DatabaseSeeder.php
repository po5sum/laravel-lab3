<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Author::factory()
            ->count(5) // Create 5 authors
            ->has(
                Post::factory()
                    ->count(3) // Each author has 3 posts
                    ->has(
                        Comment::factory()->count(2) // Each post has 2 comments
                    )
            )
            ->create();
    }
}

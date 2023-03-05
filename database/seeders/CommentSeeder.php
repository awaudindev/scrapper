<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\CommentRepository;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (Comment::count() > 0) {
            return;
        }

        app(CommentRepository::class)->create([
            'title' => 'Comment',
            'description' => '',
            'published' => false,
        ]);
    }
}

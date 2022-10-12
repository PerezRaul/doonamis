<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    public function run(): void
    {
        $file         = './database/seeders/data/data.json';
        $publications = json_decode(file_get_contents($file), true);

        foreach ($publications as $publication) {
            $description = 'impar';

            if (($publication['id'] % 2) === 0) {
                $description = 'par';
            }

            $newPublication              = new Publication();
            $newPublication->user_id     = $publication['userId'];
            $newPublication->title       = $publication['title'];
            $newPublication->body        = $publication['body'];
            $newPublication->description = $description;
            $newPublication->save();
        }
    }
}

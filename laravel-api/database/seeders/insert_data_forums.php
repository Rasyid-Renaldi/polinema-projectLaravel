<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Forum;

class insert_data_forums extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forum::create([
            'topics' => 'Sosial Budaya',
            'count_posts' => '10',
            'count_students' => '15'
        ]);
        Forum::create([
            'topics' => 'Matematika Teknik',
            'count_posts' => '10',
            'count_students' => '15'
        ]);
        Forum::create([
            'topics' => 'Biologi',
            'count_posts' => '30',
            'count_students' => '100'
        ]);
        // $forums = [
        //     [
        //         'topics' => 'Fisika',
        //         'count_posts' => '5',
        //         'count_students' => '10'
        //     ],
        //     [
        //         'topics' => 'Kimia',
        //         'count_posts' => '14',
        //         'count_students' => '25'
        //     ],
        //     [
        //         'topics' => 'Matematika',
        //         'count_posts' => '10',
        //         'count_students' => '25'
        //     ],
        // ];
        // Forum::insert($forums);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reply;

class RepliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Reply::create([
            'desc' => 'Komenan kamu kurang menyenangkan dek',
            'image' => 'https://m.media-amazon.com/images/M/MV5BMjEzNjEyMjkwOV5BMl5BanBnXkFtZTcwNDMyNDIzOA@@._V1_.jpg',
        ]);
        Reply::create([
            'desc' => 'Akan saya cross check dulu yaa kisanak',
            'image' => 'https://you.com/proxy?url=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.ta_XShbLLXTOdIz7ZrV5_wHaEK%26w%3D690%26c%3D7%26pid%3DApi%26p%3D0',
        ]);
        Reply::create([
            'desc' => 'Anda asik ya anak muda',
            'image' => 'https://you.com/proxy?url=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.WWstW0eeLt95DwamM3L13gHaFB%26w%3D690%26c%3D7%26pid%3DApi%26p%3D0',
        ]);
    }
}

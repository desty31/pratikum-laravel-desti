<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Vivin Mahat Putri',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.

Quam harum ea ex magni eligendi cumque. Recusandae commodi dolorem

suscipit reiciendis libero eum distinctio, nulla eligendi dignissimos.

Provident atque impedit delectus.'
            ], // <--- SEKARANG SUDAH DIGANTI MENJADI KOMA
            [
                'id' => 2, // Mengubah ID menjadi 2 agar unik
                'slug' => 'judul-artikel-2', // Merapikan slug yang typo
                'title' => 'Judul Artikel 2',
                'author' => 'Vivin Mahat Putri',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.

Repudiandae accusamus dolores nemo, veniam blanditiis eius autem eligendi

quasi neque dolorem necessitatibus, cumque labore eaque. Aperiam nam

similique perspiciatis doloremque atque! lalala'
            ]
        ];
    }
}

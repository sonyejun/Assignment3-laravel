<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user1 = User::factory()->create([
            'name' => 'Yejun',
            'email' => 'ywson9027@gmail.com',
            'password' => 'password',
            'role' => 'admin'
        ]);

        $user2 = User::factory()->create([
            'name' => 'Yejun2',
            'email' => 'test@gmail.com',
            'password' => 'password'
        ]);

        $user3 = User::factory()->create([
            'name' => 'Yejun',
            'email' => 'test2@gmail.com',
            'password' => 'password',
        ]);

        $user4 = User::factory()->create([
            'name' => 'Yejun',
            'email' => 'test3@gmail.com',
            'password' => 'password',
        ]);

        Movie::factory()->create([
            'title' => 'Inception',
            'genre' => 'SF/Action/Thriller',
            'director' => 'Christopher Nolan',
            'rating' => 8.8,
            'release_date' => '2010-07-21',
            'thumbnail' => 'https://w0.peakpx.com/wallpaper/289/913/HD-wallpaper-movie-inception-ellen-page-joseph-gordon-levitt-leonardo-dicaprio-tom-hardy.jpg',
            'poster' => 'https://assets1.cbsnewsstatic.com/hub/i/r/2011/01/06/e7644f57-a642-11e2-a3f0-029118418759/thumbnail/640x949/9279199bb342d25e8d3508aeb5e56d2a/Inception_Poster.jpg?v=46393ce924f64f970b15aff36d86add7',
            'synopsis' => "A skilled thief who enters people's dreams to steal their secrets is hired to perform the impossible task of planting an idea into a target's subconscious mind.",
            'user_id' => $user1->id,
        ]);

        Movie::factory()->create([
            'title' => 'Forrest Gump',
            'genre' => 'Drama/Romance',
            'director' => 'Robert Zemeckis',
            'rating' => 8.8,
            'release_date' => '1994-07-06',
            'thumbnail' => 'https://media.cnn.com/api/v1/images/stellar/prod/140702154952-02-forrest-gump-restricted.jpg?q=w_2434,h_1631,x_0,y_0,c_fill',
            'poster' => 'https://m.media-amazon.com/images/I/61SESEtA1NL.jpg',
            'synopsis' => "The remarkable journey of Forrest Gump, a man with a low IQ but a heart of gold, who unintentionally becomes involved in some of the most memorable events in American history.",
            'user_id' => $user1->id,
        ]);

        Movie::factory()->create([
            'title' => 'Interstellar',
            'genre' => 'SF/Drama',
            'director' => 'Christopher Nolan',
            'rating' => 8.6,
            'release_date' => '2014-11-05',
            'thumbnail' => 'https://c4.wallpaperflare.com/wallpaper/536/846/466/interstellar-movie-movies-wallpaper-preview.jpg',
            'poster' => 'https://m.media-amazon.com/images/I/716P1xCmnPL._AC_UF894,1000_QL80_.jpg',
            'synopsis' => "In a future where Earth's crops are failing, a group of astronauts embarks on a journey through a wormhole near Saturn in search of a new habitable planet for humanity.",
            'user_id' => $user1->id,
        ]);

        Movie::factory()->create([
            'title' => 'The Shawshank Redemption',
            'genre' => 'Drama',
            'director' => 'Frank Darabont',
            'rating' => 9.3,
            'release_date' => '1994-09-23',
            'thumbnail' => 'https://media.vanityfair.com/photos/541c841b1019a3955fea0c58/master/w_2240,c_limit/shawshank-redemption-20th-anniversary-01.jpg',
            'poster' => 'https://m.media-amazon.com/images/I/51zXApiWzgL._AC_.jpg',
            'synopsis' => "The story of a banker who is wrongly convicted of murder and his decades-long friendship with a fellow inmate as they navigate life in Shawshank State Penitentiary.",
            'user_id' => $user2->id,
        ]);

        Movie::factory()->create([
            'title' => 'Terminator 2',
            'genre' => 'SF/Action',
            'director' => 'James Cameron',
            'rating' => 8.5,
            'release_date' => '1991-07-03',
            'thumbnail' => 'https://media.gettyimages.com/id/1203004147/photo/los-angeles-the-movie-terminator-2-judgment-day-directed-by-james-cameron-seen-here-from-left.jpg?s=612x612&w=0&k=20&c=rHqmvsNwkyvUqQvwR0pZlw7vvRjYKxxFxshqyeKeMsI=',
            'poster' => 'https://m.media-amazon.com/images/I/81DIFXPnM0L.jpg',
            'synopsis' => "In this sequel, a cyborg assassin is sent back in time to protect John Connor, the future leader of the human resistance, from a more advanced and deadly Terminator sent to eliminate him.",
            'user_id' => $user2->id,
        ]);

        Movie::factory()->create([
            'title' => 'Terminator 2',
            'genre' => 'SF/Action',
            'director' => 'James Cameron',
            'rating' => 8.5,
            'release_date' => '1991-07-03',
            'thumbnail' => 'https://media.gettyimages.com/id/1203004147/photo/los-angeles-the-movie-terminator-2-judgment-day-directed-by-james-cameron-seen-here-from-left.jpg?s=612x612&w=0&k=20&c=rHqmvsNwkyvUqQvwR0pZlw7vvRjYKxxFxshqyeKeMsI=',
            'poster' => 'https://m.media-amazon.com/images/I/81DIFXPnM0L.jpg',
            'synopsis' => "In this sequel, a cyborg assassin is sent back in time to protect John Connor, the future leader of the human resistance, from a more advanced and deadly Terminator sent to eliminate him.",
            'user_id' => $user3->id,
        ]);
    }
}

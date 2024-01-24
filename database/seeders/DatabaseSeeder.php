<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        "name" => "siswa",
        "role" => "siswa",
        "email" => "siswa@gmail.com",
        "password" => Hash::make("siswa123")
       ]);

      // User::create([
       // "name" => "admin",
       // "role" => "admin",
       // "email" => "admin@gmail.com",
      //  "password" => Hash::make("admin123")
      // ]);

       User::create([
        "name" => "kantin",
        "role" => "kantin",
        "email" => "kantin@gmail.com",
        "password" => Hash::make("kantin123")
       ]);

       User::create([
        "name" => "bank",
        "role" => "bank",
        "email" => "bank@gmail.com",
        "password" => Hash::make("bank123")
       ]);

       Category::create([
        "name" => "Makanan",
       ]);

       Category::create([
        "name" => "Minuman",
       ]);

       Category::create([
        "name" => "Snack",
       ]);

       Product::create([
        "name" => "Nasi Uduk",
        "price" => "10000",
        "stock" => "40",
        "photo" => "img/nasiuduk.jpg",
        "description" => "Nasi Uduk Mak Yani",
       ]);
       Product::create([
        "name" => "Dimsum",
        "price" => "8000",
        "stock" => "40",
        "photo" => "img/dimsum.jpg",
        "description" => "Dimsum Mang patih",
       ]);
       Product::create([
        "name" => "Donut",
        "price" => "5000",
        "stock" => "40",
        "photo" => "img/donut.jpg",
        "description" => "Donut Jco",
       ]);
       Product::create([
        "name" => "Nasi Goreng",
        "price" => "15000",
        "stock" => "40",
        "photo" => "img/nasigoreng.jpg",
        "description" => "Nasi Goreng tatang",
       ]);
       Product::create([
        "name" => "Pop Ice",
        "price" => "7000",
        "stock" => "40",
        "photo" => "img/popice.jpg",
        "description" => "Pop Ice edi",
       ]);
       Product::create([
        "name" => "Lemon Tea",
        "price" => "5000",
        "stock" => "40",
        "photo" => "img/lemontea.jpg",
        "description" => "Enak niee",
       ]);
    }
}

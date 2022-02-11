<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create( [
            'isbn'=>'9786155008672',
            'title'=>'88 magyar találmány',
            'title_original'=>null,
            'author'=>'Köteles Viktória',
            'episode'=>null,
            'series'=>null,
            'pages'=>128,
            'publisher'=>'Central Médiacsoport Zrt.',
            'translator'=>null,
            'category'=>'ismeretterjesztő'
        ] );



        Book::create( [
            'isbn'=>'9786155522482',
            'title'=>'Nagyvad',
            'title_original'=>'Big Game',
            'author'=>'Dan Smith',
            'episode'=>null,
            'series'=>null,
            'pages'=>240,
            'publisher'=>'Agave Könyvek Kiadó Kft.',
            'translator'=>null,
            'category'=>'krimi'
        ] );



        Book::create( [
            'isbn'=>'9786155522512',
            'title'=>'Az ember a fellegvárban',
            'title_original'=>'The Man in the High Castle',
            'author'=>'Philip K. Dick',
            'episode'=>null,
            'series'=>null,
            'pages'=>228,
            'publisher'=>'Agave Könyvek Kiadó Kft.',
            'translator'=>'Gerevich T. András',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9786155522536',
            'title'=>'A varázslók',
            'title_original'=>null,
            'author'=>'Lev Grossman',
            'episode'=>1,
            'series'=>'Varázslók',
            'pages'=>448,
            'publisher'=>'Agave Könyvek Kiadó Kft.',
            'translator'=>null,
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9786155522895',
            'title'=>'A varázslókirály',
            'title_original'=>null,
            'author'=>'Lev Grossman',
            'episode'=>2,
            'series'=>'Varázslók',
            'pages'=>416,
            'publisher'=>'Agave Könyvek Kiadó Kft.',
            'translator'=>'Dr. Sámi László',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789632451558',
            'title'=>'Újhold',
            'title_original'=>'New Moon',
            'author'=>'Stephenie Meyer',
            'episode'=>2,
            'series'=>'Twilight saga ',
            'pages'=>650,
            'publisher'=>'Könyvmlyképző Kiadó Kft.',
            'translator'=>'Rakovszky Zsuzsa',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789632451770',
            'title'=>'Napfogyatkozás ',
            'title_original'=>'Eclipse',
            'author'=>'Stephenie Meyer',
            'episode'=>3,
            'series'=>'Twilight saga ',
            'pages'=>750,
            'publisher'=>'Könyvmlyképző Kiadó Kft.',
            'translator'=>'Rakovszky Zsuzsa',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789632452760',
            'title'=>'Hajnalhasadás ',
            'title_original'=>'Breaking Dawn',
            'author'=>'Stephenie Meyer',
            'episode'=>4,
            'series'=>'Twilight saga ',
            'pages'=>776,
            'publisher'=>'Könyvmlyképző Kiadó Kft.',
            'translator'=>'Bosnyák Viktória',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789633242711',
            'title'=>'Az emlékek őre',
            'title_original'=>null,
            'author'=>'Lois Lowry',
            'episode'=>null,
            'series'=>null,
            'pages'=>238,
            'publisher'=>'Animus Kiadó',
            'translator'=>'Tóth Tamás Boldizsár',
            'category'=>'ifjúsági'
        ] );



        Book::create( [
            'isbn'=>'9789633244548',
            'title'=>'Harry Potter és a bölcsek köve',
            'title_original'=>'Harry Potter and the Philosopher\'s Ston',
            'author'=>'J. K. Rowling',
            'episode'=>1,
            'series'=>'Harry Potter',
            'pages'=>336,
            'publisher'=>'Animus Kiadó',
            'translator'=>'Tóth Tamás Boldizsár',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789633244562',
            'title'=>'Harry Potter és a Titkok Kamrája',
            'title_original'=>'Harry Potter and the Chamber of Secrets',
            'author'=>'J. K. Rowling',
            'episode'=>2,
            'series'=>'Harry Potter',
            'pages'=>368,
            'publisher'=>'Animus Kiadó',
            'translator'=>'Tóth Tamás Boldizsár',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789633244579',
            'title'=>'Harry Potter és az azkabani fogoly',
            'title_original'=>'Harry Potter and the Prisoner of Azkaban',
            'author'=>'J. K. Rowling',
            'episode'=>3,
            'series'=>'Harry Potter',
            'pages'=>480,
            'publisher'=>'Animus Kiadó',
            'translator'=>'Tóth Tamás Boldizsár',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789633244586',
            'title'=>'Harry Potter és a Tűz Serlege',
            'title_original'=>'Harry Potter and the Goblet of Fire',
            'author'=>'J. K. Rowling',
            'episode'=>4,
            'series'=>'Harry Potter',
            'pages'=>624,
            'publisher'=>'Animus Kiadó',
            'translator'=>'Tóth Tamás Boldizsár',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789633244593',
            'title'=>'Harry Potter és a Főnix Rendje',
            'title_original'=>'Harry Potter and the Order of the Phoenix',
            'author'=>'J. K. Rowling',
            'episode'=>5,
            'series'=>'Harry Potter',
            'pages'=>816,
            'publisher'=>'Animus Kiadó',
            'translator'=>'Tóth Tamás Boldizsár',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789633244609',
            'title'=>'Harry Potter és a Félvér Herceg',
            'title_original'=>'Harry Potter and the Half-Blood Prince',
            'author'=>'J. K. Rowling',
            'episode'=>6,
            'series'=>'Harry Potter',
            'pages'=>591,
            'publisher'=>'Animus Kiadó',
            'translator'=>'Tóth Tamás Boldizsár',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789633244616',
            'title'=>'Harry Potter és a Halál ereklyéi',
            'title_original'=>'Harry Potter and the Deathly Hallows',
            'author'=>'J. K. Rowling',
            'episode'=>7,
            'series'=>'Harry Potter',
            'pages'=>656,
            'publisher'=>'Animus Kiadó',
            'translator'=>'Tóth Tamás Boldizsár',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789633411872',
            'title'=>'Hogyan altassunk kisbabát',
            'title_original'=>null,
            'author'=>'Judy Baratt',
            'episode'=>null,
            'series'=>null,
            'pages'=>96,
            'publisher'=>'Central Médiacsoport Zrt.',
            'translator'=>null,
            'category'=>'gyermeknevelés'
        ] );



        Book::create( [
            'isbn'=>'9789633997604',
            'title'=>'Az ékszerrablók nyomában',
            'title_original'=>null,
            'author'=>'Kántor Kata',
            'episode'=>1,
            'series'=>'Nózi nyomoz',
            'pages'=>112,
            'publisher'=>'Könyvmlyképző Kiadó Kft.',
            'translator'=>null,
            'category'=>'gyerek'
        ] );



        Book::create( [
            'isbn'=>'9789634190516',
            'title'=>'A varázsló birodalma',
            'title_original'=>null,
            'author'=>'Lev Grossman',
            'episode'=>3,
            'series'=>'Varázslók',
            'pages'=>416,
            'publisher'=>'Agave Könyvek Kiadó Kft.',
            'translator'=>'Dr. Sámi László',
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789634194132',
            'title'=>'Elektronikus álmok',
            'title_original'=>'Electric Dreams',
            'author'=>'Philip K. Dick',
            'episode'=>null,
            'series'=>null,
            'pages'=>240,
            'publisher'=>'Agave Könyvek Kiadó Kft.',
            'translator'=>null,
            'category'=>'fantasy'
        ] );



        Book::create( [
            'isbn'=>'9789634571117',
            'title'=>'Gyilkos társas',
            'title_original'=>'The Killing Game',
            'author'=>'J. S. Carol',
            'episode'=>null,
            'series'=>null,
            'pages'=>448,
            'publisher'=>'Könyvmlyképző Kiadó Kft.',
            'translator'=>null,
            'category'=>'thriller'
        ] );



        Book::create( [
            'isbn'=>'9789634572961',
            'title'=>'Tolvajtempó',
            'title_original'=>null,
            'author'=>'Kántor Kata',
            'episode'=>2,
            'series'=>'Nózi nyomoz',
            'pages'=>112,
            'publisher'=>'Könyvmlyképző Kiadó Kft.',
            'translator'=>null,
            'category'=>'gyerek'
        ] );



        Book::create( [
            'isbn'=>'9789639637795',
            'title'=>'Agyhullám: Java',
            'title_original'=>null,
            'author'=>null,
            'episode'=>null,
            'series'=>'Agyhullám',
            'pages'=>683,
            'publisher'=>'Kiskapu',
            'translator'=>null,
            'category'=>'informatika'
        ] );



        Book::create( [
            'isbn'=>'9789639708952',
            'title'=>'Alkonyat',
            'title_original'=>'Twilight',
            'author'=>'Stephenie Meyer',
            'episode'=>1,
            'series'=>'Twilight saga ',
            'pages'=>504,
            'publisher'=>'Könyvmlyképző Kiadó Kft.',
            'translator'=>'Rakovszky Zsuzsa',
            'category'=>'fantasy'
        ] );

    }
}



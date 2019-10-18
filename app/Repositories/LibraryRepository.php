<?php
/**
 * Created by PhpStorm.
 * User: ordec
 * Date: 18/10/19
 * Time: 20:56
 */

namespace App\Repositories;


use App\Book;
use App\Repositories\Interfaces\LibraryInterface;

class LibraryRepository implements LibraryInterface
{
    function getBookById(int $id): Book
    {
        // TODO: Implement getBookById() method.
        return Book::findOrFail($id);
    }

    function getBooksByAuthor(string $author): array
    {
        // TODO: Implement getBooksByAuthor() method.
       // $books = Book::where('name', )
        $books = Book::where('author', $author)->paginate(self::BOOKS_PER_PAGE);

        $data = [
            'bookArray' => $books->toArray(),
            'bookObject' => $books,
        ];
        return $data;
    }

    function getBooksByName(string $name): array
    {
        // TODO: Implement getBooksByName() method.
        $books = Book::where('name', $name)->paginate(self::BOOKS_PER_PAGE);

        $data = [
            'bookArray' => $books->toArray(),
            'bookObject' => $books,
        ];
        return $data;
    }

    function getBooksByYear(int $year): array
    {
        // TODO: Implement getBooksByYear() method.
        $books = Book::where('year', $year)->paginate(self::BOOKS_PER_PAGE);

        $data = [
            'bookArray' => $books->toArray(),
            'bookObject' => $books,
        ];
        return $data;
    }

    function getBooksByMan(string $man): array
    {
        // TODO: Implement getBookByManufacture() method.
        $books = Book::where('manufacture', $man)->paginate(self::BOOKS_PER_PAGE);

        $data = [
            'bookArray' => $books->toArray(),
            'bookObject' => $books,
        ];
        return $data;
    }


    //This method is only to populate the DB
    function populateDB(){

        $data = include_once __DIR__ . '/PopulateBD.php';


        for ($i = 0; $i < 25; $i++){
            $book = new Book();
            $book->name = $data['name'][rand(0, count($data['name']) - 1)];
            $book->author = $data['author'][rand(0, count($data['author']) - 1)];
            $book->year = $data['year'][rand(0, count($data['year']) - 1)];
            $book->manufacture = $data['manufacture'][rand(0, count($data['manufacture']) - 1)];
            $book->save();
            sleep(0.05);
        }

    }


}
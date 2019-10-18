<?php
/**
 * Created by PhpStorm.
 * User: ordec
 * Date: 18/10/19
 * Time: 20:42
 */

namespace App\Repositories\Interfaces;
use App\Book;

interface LibraryInterface{

    const BOOKS_PER_PAGE = 5;


    function getBookById(int $id): Book;


    function getBooksByAuthor(string $author): array ;


    function getBooksByName(string $name): array ;


    function getBooksByYear(int $year): array ;


    function getBooksByMan(string $man): array ;
}

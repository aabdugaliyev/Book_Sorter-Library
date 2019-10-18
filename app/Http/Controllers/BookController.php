<?php

namespace App\Http\Controllers;

use App\Repositories\LibraryRepository;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\LibraryInterface;

class BookController extends Controller
{
    //
    private $libraryRepository;

    public function __construct()
    {
        $this->libraryRepository = new LibraryRepository();
    }

    public function byId(Request $request, $id){
        $book = $this->libraryRepository->getBookById($id);
        return view('book', ['book' => $book]);
    }

    public function byName(Request $request, $name){
        $books = $this->libraryRepository->getBooksByName($name);
        return view('home', ['books' => $books]);
    }

    public function byAuthor(Request $request, $author){
        $books = $this->libraryRepository->getBooksByAuthor($author);
        return view('home', ['books' => $books]);
    }

    public function byYear(Request $request, $year){
        $books = $this->libraryRepository->getBooksByYear($year);
        return view('home', ['books' => $books]);
    }

    public function byMan(Request $request, $man){
        $books = $this->libraryRepository->getBooksByMan($man);
        return view('home', ['books' => $books]);
    }



    //This method is only to populate the DB
    public function populate(){
        $this->libraryRepository->populateDB();
    }
}


@extends('layouts.app')


    @foreach($books['bookArray']['data'] as $key => $book)
        {{  "Book name: " . $book['name'] }} <br>
        {{  "Book author: " . $book['author'] }} <br>
        {{  "Book year: " . $book['year'] }} <br>
        {{  "Book manufacture: " . $book['manufacture']}} <br><br>
    @endforeach
    <div>{{ $books['bookObject']->links() }}</div>




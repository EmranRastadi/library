<?php


namespace App\Repository\Book;


interface BookRepositoryInterface
{
    public function all($search);

    public function getAllAuther();

    public function lendingBook($request);
}

<?php


namespace App\Repository\Book;


use \App\Models\Auther;
use \App\Models\Book;
use \App\Models\Student;
use Validator;
use App\Repository\Book\BookRepositoryInterface;
use http\Env\Request;

class EloquentBookRepository implements BookRepositoryInterface
{
    protected $book;
    protected $student;

    public function __construct(Book $book, Student $student)
    {
        $this->book = new Book;
        $this->student = new Student;
    }

    public function all($search)
    {

        $data = $this->book->orderBy('id', 'DESC');
        if ($search) {
            $data = $data->where('name', 'LIKE', '%' . $search . '%');
        }

        $data = $data->with(['Auther', 'Student'])->paginate(5)->appends('search', $search);
        return $data;


    }

    public function getAllAuther()
    {
        $book = new Book();
        $auther = $book->auther();
        return $auther;
    }

    public function lendingBook($request)
    {

        $validate = Validator::make($request->all(), [
            'student_id' => 'integer|required'
        ]);
        if ($validate->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'invalid student type !'
            ], 500);
        }

        $book = $this->book::find($request->book_id);
        $book->student_id = $request->student_id;
        $book->realse_time = $request->date_returning;
        $book->save();
        return response()->json([
            'success' => true,
            'message' => 'success'
        ], 200);
    }
}

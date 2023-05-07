<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookDetail;

class BookController extends Controller
{
    public function index()
    {
    	$data['books'] = Book::leftJoin('book_detail', 'books.id', 'book_detail.book_id')
            ->select(['books.*','book_detail.*'])->get();
    	return view('book.index', $data);
    }

    public function add()
    {
    	return view('book.add');
    }

    public function addStore(Request $request)
    {
    	$book = new Book();
    	$book->title = $request->title;
    	$book->publisher = $request->publisher;
    	if ($book->save()) {
    		$detail = new BookDetail();
    		$detail->book_id = $book->id;
    		$detail->description = $request->description;
    		$detail->category = $request->category;
    		$detail->keyword = $request->keyword;
    		$detail->stock = $request->stock;
    		$detail->price = $request->price;
    		if ($detail->save()) {
    			return redirect()->route('book.index');
    		}
    	}
    	return redirect()->route('book.index');
    }

    public function edit($id)
    {
    	$data['book'] = Book::leftJoin('book_detail', 'books.id', 'book_detail.book_id')
    		->where('books.id', $id)
            ->select(['books.*','book_detail.*'])->first();
        $data['id'] = $id;
    	return view('book.edit', $data);
    }

    public function editStore(Request $request, $id)
    {
    	$book = Book::where('id', $id)->first();
    	if ($book) {
    		$book->title = $request->title;
    		$book->publisher = $request->publisher;
    	}
    	if ($book->save()) {
    		$detail = BookDetail::where('book_id', $book->id)->first();
    		if ($detail) {
    			$detail->book_id = $book->id;
	    		$detail->description = $request->description;
	    		$detail->category = $request->category;
	    		$detail->keyword = $request->keyword;
	    		$detail->stock = $request->stock;
	    		$detail->price = $request->price;
	    		if ($detail->save()) {
	    			return redirect()->route('book.index');
	    		}
    		}
    	}
    	return redirect()->route('book.index');
    }

    public function delete($id)
    {
    	$book = Book::where('id', $id)->first();
    	if ($book) {
    		$detail = BookDetail::where('book_id', $book->id)->first();
    		if ($detail) {
    			$book->delete();
    			$detail->delete();
    		}
    	}
    	return redirect()->route('book.index');
    }

    public function search(Request $request)
    {
    	# code...
    }
}

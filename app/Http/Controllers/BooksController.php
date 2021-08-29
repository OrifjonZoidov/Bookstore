<?php

namespace App\Http\Controllers;

use App\Models\bookstore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index()
    {

$test=bookstore::orderBy('title')->paginate(6);
        return view('index',compact('test'));
    }

    public function create_books(Request $request)
    {
        $validated=$request->validate
        ([
            'isbn'=>'required|int|unique:bookstores,isbn',// валидация уникальное число для isbn
            'title'=>'required|string',//Validation
            'author'=>'required|string',
            'year_of_publication'=>'required|string',
            'publisher'=>'required|string',
            'price'=>'required|numeric',
            'image_url_s'=>'required|url',
            'image_url_m'=>'required|url',
            'image_url_l'=>'required|url'

        ]);
        $create=new bookstore();
        $create->isbn=$request->isbn;
        $create->title= $request->title;
        $create->author=$request->author;
        $create->year_of_publication=$request->year_of_publication;
        $create->publisher=$request->publisher;
        $create->price=$request->price;
        $create->image_url_s=$request->image_url_s;
        $create->image_url_m=$request->image_url_m;
        $create->image_url_l=$request->image_url_l;
        $create->save();
//        $request->session()->flash('alert-message','Запись успешно добавлено');
        return redirect()->route('admin');

    }
    public function create()
    {
        $test=bookstore::all();
        return view('create',compact('test'));
    }

    public function admin_index()
    {
        $test=DB::table('bookstores')->InRandomOrder()->paginate(5);
        return view('index_admin',compact('test'));
    }

    public function edit( bookstore $bookstore,Request $request,$id)
    {

        $data = bookstore::where(['id' => $id])->update([
            'isbn'=>$request->input('isbn'),
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            'year_of_publication'=>$request->input('year_of_publication'),
            'publisher'=>$request->input('publisher'),
            'price'=>$request->input('price'),
            'image_url_s'=>$request->input('image_url_s'),
            'image_url_m'=>$request->input('image_url_m'),
            'image_url_l'=>$request->input('image_url_l')

        ]);
        return redirect()->route('admin',compact('data'))->with('success','Книга было изменено');
    }


    public function delete(bookstore $bookstore, $id)
    {

        $f= bookstore::where('id',$id)->delete();
        return redirect()->route('admin');
    }


    public function edit_books(bookstore $bookstore,$id)
    {
        $book = bookstore::find($id);
        return view('edit',compact('book'));
    }




}

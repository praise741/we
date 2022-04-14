<?php

namespace App\Http\Controllers;

use App\Models\genre;
use App\Models\movies;
use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
   public function index()
   {
       $movies = movies::all()
       ->take(10)
       ;
       $genre = genre::all();
       return view('frontend.index',['movies' => $movies, 'genre' => $genre]);
   }
   public function genre($genre)
   {
       $results = movies::where('genre' , $genre)->paginate(5);
       $genre1 = genre::all();
       return view ('frontend.genre',['results' => $results, 'genre'=> $genre1, 'genre1' => $genre]);
   }
   public function search(Request $request)
   {


    $genre1 = genre::all();
        $results =movies::search($request->search)->get();
        return view ('frontend.search',['results' => $results, 'genre'=> $genre1]);




   }
   public function details($id)
   {
       $result = movies::where('id' , $id)->first();
       $genre1 = genre::all();

       return view('frontend.details',['result' => $result, 'genre' => $genre1]);
   }
}

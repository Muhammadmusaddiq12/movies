<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function create()
    {
        return view('admin.movie_form');
    }

    // Method to handle the form submission
    public function store(Request $request)
    {

        

        // Create a new Movie instance and save to the database
        $movie = new movie();
        $movie->movie_name = $request->movie_name;
        $movie->movie_desc = $request->movie_desc;
        $movie->release_date = $request->release_date;
        $movie->language = $request->language;

        $movie->status = $request->status;

        $file = $request->movie_image;
        $extension = $file->getClientOriginalExtension();
        $filename = 'uploads/movies/'.time().'.'.$extension;
        $file->move('uploads/movies', $filename);
        $movie->poster_image = $filename;


        

        // Save the movie to the database
        $movie->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Movie added successfully!');
    }
}

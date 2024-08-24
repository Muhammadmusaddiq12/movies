<?php

namespace App\Http\Controllers;

use App\Models\movie;
use App\Models\show;
use App\Models\theatre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie(){
        $movies = movie::all();
        return view('admin.movies', compact('movies'));
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
    public function theatre(){
        $theatres = theatre::all();
        return view('admin.theatres', compact('theatres'));
    }
    // Method to handle the form submission
    public function storetheatre(Request $request)
    {
        // Create a new Movie instance and save to the database
        $theatre = new theatre();
        $theatre->theatre_name = $request->theatre_name;
        $theatre->seating_capacity = $request->seating_capacity;
        $theatre->ticket_rate = $request->ticket_rate;
        $theatre->show_class = $request->show_class;

        // Save the movie to the database
        $theatre->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Theater added successfully!');
    }

    public function show(){
        $shows = show::all();
        return view('admin.show', compact('shows'));
    }
}

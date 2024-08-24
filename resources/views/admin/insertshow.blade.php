@extends('admin.main')

@section('main-section')
@if (session('success'))
<div class="alert alert-primary">
    {{session('success')}}
   </div>
@endif

<div class="container">
    <div>
        <form action="/theatre" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="theatre_name">Movie Name</label>
                <input type="text" class="form-control" name="theatre_name" id="movie_name" aria-describedby="movieHelp" required>
                <div id="movieHelp" class="form-text">Enter the name of the movie.</div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="seating_capacity">Theater</label>
                <input type="number" name="seating_capacity" id="movie_desc" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="ticket_rate">Show Date</label>
                <input type="text" name="ticket_rate" id="release_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="show_class">Show Time</label>
                <select name="show_class" class="form-control" id="">
                  <option value="" selected disabled>Select an optiopn</option>
                  <option value="Gold">Gold Package</option>
                  <option value="Silver">Silver Package</option>
                </select>
                <div id="movieImageHelp" class="form-text">Upload an image related to the movie.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>



@endsection

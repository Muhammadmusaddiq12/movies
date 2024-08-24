@extends('admin.main')

@section('main-section')
@if (session('success'))
   <div class="alert alert-primary">
    {{session('success')}}
   </div>
@endif
<div class="container">
    <div>
        <form action="/movie" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="movie_name">Movie Name</label>
                <input type="text" class="form-control" name="movie_name" id="movie_name" aria-describedby="movieHelp" required>
                <div id="movieHelp" class="form-text">Enter the name of the movie.</div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="movie_desc">Description</label>
                <textarea name="movie_desc" id="movie_desc" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="release_date">Release Date</label>
                <input type="date" name="release_date" id="release_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="language">Movie Language</label>
                <select name="language" id="language" class="form-control" required>
                    <option value="">Select language</option>
                    <option value="english">English</option>
                    <option value="urdu">Urdu</option>
                    <option value="spanish">Spanish</option>
                    <option value="tamil">Tamil</option>
                    <option value="chinese">Chinese</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">Select status</option>
                    <option value="released">Released</option>
                    <option value="upcoming">Upcoming</option>
                    <option value="postponed">Postponed</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="movie_image">Movie Image</label>
                <input type="file" class="form-control" name="movie_image" id="movie_image" accept="image/*">
                <div id="movieImageHelp" class="form-text">Upload an image related to the movie.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>



@endsection

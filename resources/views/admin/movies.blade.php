@extends('admin.main')

@section('main-section')
<div class="container">
   <a href="/insert/movies" class="btn btn-dark mb-3">Add Movie</a>
   <div class="table-responsive">
      <table class="table table-primary">
         <thead>
            <tr>
               <th scope="col">Id</th>
               <th scope="col">Movie Name</th>
               <th scope="col">Movie Description</th>
               <th scope="col">Release Date</th>
               <th scope="col">Movie Language</th>
               <th scope="col">Status</th>
               <th scope="col">Poster</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($movies as $m)
            <tr>
               <td>{{$m->id}}</td>
               <td>{{$m->movie_name}}</td>
               <td>{{ Str::limit($m->movie_desc, 20) }}</td>
               <td>{{$m->release_date}}</td>
               <td>{{$m->language}}</td>
               <td>{{$m->status}}</td>
               <td><img src="{{$m->poster_image}}" height="50" alt=""></td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>

</div>
@endsection
@extends('admin.main')

@section('main-section')
<div class="container">
   <a href="/insert/shows" class="btn btn-dark mb-3">Add Show</a>
   <div class="table-responsive">
      <table class="table table-primary">
         <thead>
            <tr>
               <th scope="col">Id</th>
               <th scope="col">Movie</th>
               <th scope="col">Theater</th>
               <th scope="col">Show Date</th>
               <th scope="col">Time</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($shows as $s)
            <tr>
               <td>{{$s->id}}</td>
               <td>{{$s->movie_name}}</td>
               <td>{{$s->theatre}}</td>
               <td>{{$s->show_date}}</td>
               <td>{{$s->show_time}}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>

</div>
@endsection
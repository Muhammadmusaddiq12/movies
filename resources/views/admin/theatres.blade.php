@extends('admin.main')

@section('main-section')
<div class="container">
   <a href="/insert/theatre" class="btn btn-dark mb-3">Add Theatre</a>
   <div class="table-responsive">
      <table class="table table-primary">
         <thead>
            <tr>
               <th scope="col">Id</th>
               <th scope="col">Theater</th>
               <th scope="col">Seating Capacity</th>
               <th scope="col">Ticket Rate</th>
               <th scope="col">Ticket Class</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($theatres as $t)
            <tr>
               <td>{{$t->id}}</td>
               <td>{{$t->theatre_name}}</td>
               <td>{{$t->seating_capacity}}</td>
               <td>{{$t->ticket_rate}}</td>
               <td>{{$t->show_class}}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>

</div>
@endsection
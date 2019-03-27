@extends('layouts.app')

@section('content')

  <div class="container py-4">
  <table class="table table-bordered py-4 table-hover">
  <thead>
    <tr class="h2 text-primary text-center">
      <td>
        <i class="fas fa-users text-primary"></i> List of Friends
      </td>
    </tr>
  </thead>
  <tbody>
    @forelse ($friend as $frien)
      <tr>
        <td class="h3"><i class="fas fa-user-circle"></i>  <a href="{{ route('chat.show',$frien->id) }}">{{$frien->name}}</a> </td>
      </tr>
     @empty
       <tr>
         <td>You don't have any friends! <i class="fas fa-exclamation-triangle text-danger"></i> </td>
       </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@extends('layouts.app')

@section('content')

  <div class="container py-4">
    <br>
    <br>
  <table class="table table-bordered py-4 table-hover col-md-10 mx-auto shadow-sm p-3 mb-5 bg-white rounded text-center table-striped table-condensed">
  <thead >
    <tr class="text-info text-center h3 bg-light">
      <td colspan="4">
        <a class="btn btn-outline-primary h3 btn-lg" href="{{url('/home')}}"> <i class="fas fa-users text-info "></i> Friends</a>
      </td>
    </tr>

    <tr class="text-info text-center">
      <td>#</td>
      <td>Name</td>
      <td>Click to chat</td>
      <td>Status</td>
    </tr>
  </thead>
  <tbody>
    @forelse ($friend as $frien)
      <tr>
        <td>
          <i class="fas fa-user-circle text-info"></i>
        </td>
        <td>
           <a href="{{ route('chat.show',$frien->id) }}">{{$frien->name}} </a>
        </td>
        <td class="text-success">
          <a href="{{ route('chat.show',$frien->id) }}"><i class="fas fa-comments"></i> Chat </a>
        </td>
        <td>
          <onlineuser
           v-bind:friend="{{ $frien }}"
           v-bind:onlineusers="onlineUsers">
         </onlineuser>
        </td>
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

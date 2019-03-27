@extends('layouts.app')

@section('content')
  <meta name="friendId" content="{{ $friend->id }}">

  <div class="container py-5">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">{{$friend->name}}</th>
        <th scope="col"><a class="btn btn-outline-primary" href="{{url('/chat')}}">Back</a></th>
      </tr>
      </thead>
      <tbody>
    </tbody>
    </table>
    <chat v-bind:chats="chats"></chat>
    

  </div>


@endsection

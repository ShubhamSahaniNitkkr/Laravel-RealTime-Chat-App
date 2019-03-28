@extends('layouts.app')

@section('content')
  <audio id="ChatAudio">
    <source src="https://notificationsounds.com/notification-sounds/slow-spring-board-570/download/mp3">
  </audio>
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
    <chat v-bind:chats="chats" v-bind:userid="{{ Auth::user()->id }}"
      v-bind:friendid="{{ $friend->id }}"></chat>



  </div>


@endsection

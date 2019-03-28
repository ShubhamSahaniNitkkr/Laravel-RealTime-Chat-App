@extends('layouts.app')

@section('content')
  <audio id="ChatAudio">
    <source src="https://notificationsounds.com/notification-sounds/slow-spring-board-570/download/mp3">
  </audio>
  <meta name="friendId" content="{{ $friend->id }}">

  <div class="container py-5">
    <table class="table table-bordered py-4 table-hover col-md-12 mx-auto shadow-sm p-3 mb-5 bg-white rounded table-striped table-condensed">
    <thead>
    <tr>
      <th scope="col"><a class="btn btn-outline-primary" href="#"> <i class="fa fa-user text-info "></i> {{$friend->name}}</a></th>
      <th scope="col"><a class="btn btn-outline-primary" href="{{url('/home')}}"> <i class="fas fa-users text-info "></i> Back</a></th>
    </tr>
    </thead>
    </table>
    <chat v-bind:chats="chats" v-bind:userid="{{ Auth::user()->id }}" v-bind:friendid="{{ $friend->id }}"></chat>

  </div>


@endsection

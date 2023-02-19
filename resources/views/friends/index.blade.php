@extends('layouts.app')
@section('content')
<div class="mt-5 w-50 m-auto">
    <h1>Friends</h1>

        <div class="form-group mb-2">

            <form action="{{route('friends.store')}}" method="POST" class="col-8  justify-content-btween">
                @csrf
                <input type="email" name="email" class="col-7 form-control mb-1">
                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                <input type="submit" value="Add" name=""  class="col-2 btn btn-success">
            </form>
        </div>
    <h1 class="mt-5">Your Friends List</h1>
    <div>
        @foreach ($user->friends as $friend)
        <p class="col-4 py-2">{{$friend->email}}</p>
       @endforeach
    </div>

</div>

@endsection

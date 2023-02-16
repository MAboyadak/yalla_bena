@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h1">Groups</p>
    <div class="row pt-5 justify-content-center">
        <p class="col-1">Groups</p>
        <form action="{{route('groups.store')}}" method="POST" class="col-8  justify-content-btween">
            @csrf
            <input type="text" name="name" id="" class="col-7">
            <input type="submit" value="Add" name=""  class="col-2 btn btn-success">
        </form>
    </div>

    <div class="row py-5 justify-content-center">
        <div class="col-3 border py-3 mx-4 ">
            <div class="row ">
                @foreach ($user->groups as $group)
                    <p class="col-4 py-2">{{$group->name}}</p>
                    <span class="col-4 py-2"><input type="submit" value=" Add " class="btn btn-success "></span>
                    <form  action="{{route('groups.destroy', $group->id)}}" method="POST" class="col-4 py-2">
                        @csrf
                        @method('delete')
                        <input  type='submit' class="btn btn-danger" value="delete">
                    </form>
                @endforeach
            </div>
        </div>

        <div class="col-7 border">
            <div class="row my-3 justify-content-around">
                <p class="col-2">Groups</p>
                <input type="text" name="" id="" class="col-5">
                <input type="button" value="Add" class="col-2 btn btn-success">
            </div>
            <div class="row my-3 justify-content-around">
                <p class="col-2">Groups</p>
                <p class="col-2">Groups</p>
            </div>
            <div class="row my-3 justify-content-around">
                <p class="col-2">Groups</p>
                <p class="col-2">Groups</p>
            </div>
            <div class="row my-3 justify-content-around">
                <p class="col-2">Groups</p>
                <p class="col-2">Groups</p>
            </div>
            <div class="row my-3 justify-content-around">
                <p class="col-2">Groups</p>
                <p class="col-2">Groups</p>
            </div>
        </div>
    </div>
</div>
@endsection


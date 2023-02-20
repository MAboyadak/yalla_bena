@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h1">Groups</p>
    <div class="row pt-5 justify-content-center">
        <p class="col-1">Groups</p>
        <form action="{{route('groups.store')}}" method="POST" class="col-8 justify-content-btween">
            @csrf
            <input type="text" name="name" id="" class="col-7 form-control my-2">
            @if($errors->has('name'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{$errors->first('name')}}</li>
                </ul>
            </div>
            @endif
            <input type="submit" value="Add" name=""  class="col-2 btn btn-success text-item-center">
        </form>
    </div>

    <div class="row py-5 justify-content-center">
        <div class="col-3 border py-3 mx-4 ">
            <div class="row ">
                @foreach ($user->groups as $group)
                    <p class="col-4 py-2">{{$group->name}}</p>
                    <span class="col-4 py-2"><input type="submit" value=" Add " class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"></span>
                    <form  action="{{route('groups.destroy', $group->id)}}" method="POST" class="col-4 py-2">
                        @csrf
                        @method('delete')
                        <input  type='submit' class="btn btn-danger" value="delete">
                    </form>
                @endforeach
            </div>
        </div>

        <!-- Add button popup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add your Group member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" class="col-8  justify-content-btween">
                        @csrf
                        <input type="email" name="name" id="" class="col-7 form-control ">
                        <div class="modal-footer">
                            <input type="hidden" name="user_id" value="{{auth()->id()}}">
                            <input type="submit" value="Add" name="" data-bs-dismiss="modal" class="col-2 btn btn-success text-item-center">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <div class="col-7 border">
            <div class="row my-3 justify-content-around">
                <p class="col-3 h5">Friends Name</p>
                <input type="text" name="" id="" class="col-5">
                <input type="button" value="Add" class="col-2 btn btn-success">
            </div>

            <div class="row my-3 justify-content-around">
                <p class="col-2"></p>
                <p class="col-2"></p>
            </div>
        </div>
    </div>
</div>
@endsection

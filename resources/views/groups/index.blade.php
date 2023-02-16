@extends('layouts.app')



@section('content')
    <!-- @foreach ($user->groups as $group)
        <p>{{$group->name}}</p>
    @endforeach -->

<div class="container">
    <p>Groups</p>
    <div class="row my-3 justify-content-around">
        <p class="col-2">Groups</p>
        <input type="text" name="" id="" class="col-5 form-control w-50">
        <input type="button" value="Add" class="col-2 btn btn-primary">
    </div>

    <div class="row">
        <div class="col-4 border py-3">
            <div class="row">
                <p class="col">test</p>
                <p class="col">test</p>
                <p class="col">test</p>
            </div>
            <div class="row">
                <p class="col">test</p>
                <p class="col">test</p>
                <p class="col">test</p>
            </div>
            <div class="row">
                <p class="col">test</p>
                <p class="col">test</p>
                <p class="col">test</p>
            </div>
            <div class="row">
                <p class="col">test</p>
                <p class="col">test</p>
                <p class="col">test</p>
            </div>
        </div>
        <div class="col-8 border">
            <div class="row my-3 justify-content-around">
                <p class="col-2">Groups</p>
                <input type="text" name="" id="" class="col-5 form-control w-50">
                <input type="button" value="Add" class="col-2 btn btn-primary">
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


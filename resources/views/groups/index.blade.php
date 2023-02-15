@extends('layouts.app')

@section('content')
    @if (! $userGroups)
        <h3 class="text-danger">No Groups Found</h3>
    @else
        @foreach ($userGroups as $group)
            <p>{{$group->groups[0]->name}}</p>
        @endforeach        
    @endif
@endsection
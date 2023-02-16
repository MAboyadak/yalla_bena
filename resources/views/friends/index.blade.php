@extends('layouts.app')
@section('content')
<div class="mt-5 w-50 m-auto">
    <h1>Friends</h1>
    <form  class="row g-3 needs-validation" action="" method="post" novalidate>
        @csrf

        <div class="form-group mb-2 d-inline">
            <label for="validationCustom02" class="form-label">Your friend email</label>
            <input  id="validationCustom02" class="form-control w-50" name="email" type="email" required />
            
</div>
<div class="form-group d-inline">
    <input id="submit" class="form-control bg-primary btn w-25 fs-3" type="submit"  value="add" />
</div>
    </form>
    <h1 class="mt-5">Your Friends List</h1>
    <div style="height:400px; border:1px solid black">

    </div>
</div>

@endsection

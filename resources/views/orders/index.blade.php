@extends('layouts.app')
@section('content')

<div class="container row">
<div class="col-6">
   <div class="mt-5 w-50 m-auto">
    <h1>Add Order</h1>
    <form>
        <div class="mb-3">
          <label class="form-label">Order for</label>
          <select class="form-select" aria-label="Default select example">
            <option selected disabled>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="mb-3">
          <p class="fs-5">Write the restaurant name</p>
          <label for="exampleInputPassword1" class="form-label">From</label>
          <input type="text" name="from" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <p class="fs-5">You can write a friend name or group</p>
          <label for="exampleInputPassword1" class="form-label">Friends</label>
          <input type="text" name="friends" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Menu Image</label>
          <input type="file" name="images" class="form-control" id="exampleInputPassword1">
        </div>


        <button type="submit" class="btn btn-primary">Publish</button>
      </form>


   </div>




</div>
<div class="col-6">
<div class="mt-5 w-50 m-auto">
<h1>Friends Invited</h1>
</div>

</div>

</div>



@endsection

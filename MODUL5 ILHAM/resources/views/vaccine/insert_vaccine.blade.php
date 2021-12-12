@extends('layouts.main')
@section('content')
<div class="container" style="padding: 0%;padding-left:100px;padding-right:100px ">
  <div class="row justify-content-center">
      <h2 class="title" style="text-align: center">
          Input Vaccine
      </h2>
  </div>
  <div class="form">
      <form action="" method="post" autocomplete="off">

        <div class="form-group my-2">
          <label class="title" for="vaccine_name">Vaccine Name</label>
          <input name="vaccine_name" id="vaccine_name"  class="form-control" type="text">
        </div>

        <div class="form-group my-2">
          <label class="title" for="price">Price</label>
          <input name="price" id="price" type="text" class="form-control">
        </div>

        <div class="form-group my-2">
          <label class="title" for="description">Description</label>
          <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="form-group my-2">
          <div class="custom-file">
            <label class="title" for="image" style="display: block;">Image</label>
            <input type="file" id="image" class="form-control" name="image">
        </div>
        </div>

        <div class="form-group my-3">
          <div class="button">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
</div>
@endsection
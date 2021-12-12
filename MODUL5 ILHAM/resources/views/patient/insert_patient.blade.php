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
            <label class="title" for="vaccine_id">Vaccine Id</label>
            <input name="vaccine_id" id="vaccine_id"  class="form-control" type="text" readonly value="ini id vaksin">
          </div>
  
          <div class="form-group my-2">
            <label class="title" for="Pname">Patient Name</label>
            <input name="Pname" id="Pname" type="text" class="form-control">
          </div>
          
                  <div class="form-group my-2">
                    <label class="title" for="nik">NIK</label>
                    <input name="nik" id="nik" type="text" class="form-control">
                  </div>
  
          <div class="form-group my-2">
            <label class="title" for="alamat">Alamat</label>
            <input name="alamat" id="alamat" type="text" class="form-control">
          </div>
          
          <div class="form-group my-2">
              <div class="custom-file">
                  <label class="title" for="image" style="display: block;">Image</label>
                  <input type="file" id="image" class="form-control" name="image">
                </div>
            </div>

            <div class="form-group my-2">
                <label class="title" for="NoHp">No Hp</label>
                <input name="NoHp" id="NoHp" type="text" class="form-control">
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
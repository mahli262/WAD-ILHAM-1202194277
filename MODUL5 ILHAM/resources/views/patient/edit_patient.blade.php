@extends('layouts.main')

@section('content')
<div class="container" style="padding: 0%;padding-left:100px;padding-right:100px ">
    <div class="row justify-content-center">
        <h2 class="title" style="text-align: center">
            Input Vaccine
        </h2>
    </div>
    <div class="form">
        <form action="{{route('patient.update', $patient->id)}}" method="post" autocomplete="off">
          @csrf
          <div class="form-group my-2">
            <label class="title" for="vaccine_id">Vaccine Id</label>
            <input name="vaccine_id" id="vaccine_id" class="form-control" type="text" readonly value="{{$patient->vaccine_id}}">
          </div>

          <div class="form-group my-2">
            <label class="title" for="name">Patient Name</label>
            <input name="name" id="name" type="text" class="form-control" value="{{$patient->name}}">
          </div>

          <div class="form-group my-2">
            <label class="title" for="nik">NIK</label>
            <input name="nik" id="nik" type="text" class="form-control" value="{{$patient->nik}}">
          </div>

          <div class="form-group my-2">
            <label class="title" for="alamat">Alamat</label>
            <input name="alamat" id="alamat" type="text" class="form-control" value="{{$patient->alamat}}">
          </div>

          <div class="form-group my-2">
            <div class="custom-file">
                <label class="title" for="image_ktp" style="display: block;">Image</label>
                <input type="file" id="image_ktp" class="form-control" name="image_ktp" value="{{$patient->image_ktp}}">
            </div>
          </div>

            <div class="form-group my-2">
                <label class="title" for="no_hp">No Hp</label>
                <input name="no_hp" id="no_hp" type="text" class="form-control" value="{{$patient->no_hp}}">
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

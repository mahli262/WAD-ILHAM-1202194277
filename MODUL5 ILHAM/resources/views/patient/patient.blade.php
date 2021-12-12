@extends('layouts.main')

@section('content')
<div class="container" style="padding: 0%;padding-left:0px;padding-right:0px;">
    @if (count($patients)>0)
    <div class="isnt">
        <div class="row justify-content-center">
            <h2 class="title" style="text-align: center">
                List Vaccine
            </h2>
        </div>
        <div class="row my-2">
            <div style="padding: 0%">
                <a class="btn btn-primary" href="{{route('patient.vaccine-view')}}" role="button">Regist Patient</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered table-info table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vaccine</th>
                    <th scope="col">Name</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="table-primary">
                  @php
                      $count = 1;
                  @endphp
                  @foreach ($patients as $patient)
                    <tr>
                        <th>{{$count++}}</th>
                        <td>{{$patient->vaccine->name}}</td>
                        <td>{{$patient->name}}</td>
                        <td>{{$patient->nik}}</td>
                        <td>{{$patient->alamat}}</td>
                        <td>{{$patient->no_hp}}</td>
                        <td>
                            <div class="button">
                                <a class="btn btn-warning" href="{{route('patient.edit-view', $patient->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('patient.destroy', $patient->id)}}">Hapus</a>
                            </div>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
    @else
    <div class="zero">
        <div class="col">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <p>There is no data</p>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary" href="{{route('patient.vaccine-view')}}" role="button">Regist Patient</a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

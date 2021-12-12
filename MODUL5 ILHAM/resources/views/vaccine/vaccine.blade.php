@extends('layouts.main')

@section('content')
<div class="container" style="padding: 0%;padding-left:100px;padding-right:100px">
    @if (count($vaccines)>0)
    <div class="isnt">
        <div class="row justify-content-center">
            <h2 class="title" style="text-align: center">
                List Vaccine
            </h2>
        </div>
        <div class="row my-2">
            <div style="padding: 0%">
                <a class="btn btn-primary" href="{{route('vaccine.add-view')}}" role="button">Add Vaccine</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered table-info table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="table-primary">
                  @php
                      $count = 1;
                  @endphp
                  @foreach ($vaccines as $vaccine)
                    <tr>
                      <th>{{$count++}}</th>
                      <td>{{$vaccine->name}}</td>
                      <td>{{$vaccine->price}}</td>
                      <td>
                          <div class="button">
                              <a class="btn btn-warning" href="{{route('vaccine.edit-view', $vaccine->id)}}">Edit</a>
                              <a class="btn btn-danger" href="{{route('vaccine.delete', $vaccine->id)}}">Hapus</a>
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
                    <a class="btn btn-primary" href="{{route('vaccine.add-view')}}" role="button">Add Vaccine</a>
                </div>
            </div>
        </div>
    </div>
    @endif  
</div>
@endsection

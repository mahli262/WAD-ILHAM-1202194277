@extends('layouts.main')

@section('content')
<div class="container" style="padding: 0%;padding-left:100px;padding-right:100px">
  <div class="zero">
      <div class="col">
          <div class="row">
              <div class="d-flex justify-content-center">
                  <p>There is no data</p>
              </div>
          </div>
          <div class="row">
              <div class="d-flex justify-content-center">
                  <a class="btn btn-primary" href="/insert-vaccine" role="button">Add Vacicine</a>
              </div>
          </div>
      </div>
  </div>
  <div class="isnt">
      <div class="row justify-content-center">
          <h2 class="title" style="text-align: center">
              List Vaccine
          </h2>
      </div>
      <div class="row my-2">
          <div style="padding: 0%">
              <a class="btn btn-primary" href="/insert-vaccine" role="button">Add Vacicine</a>
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
                <tr>
                  <th>1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>
                      <div class="button">
                          <a class="btn btn-warning" href="/edit-vaccine">Edit</a>
                          <a class="btn btn-danger" href="">Hapus</a>
                      </div>
                  </td>
                </tr>
              </tbody>
            </table>
      </div>
  </div>
</div>
@endsection
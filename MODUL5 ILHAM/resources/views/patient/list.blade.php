@extends('layouts.main')

@section('content')
<div class="container" style="padding: 0%;padding-left:0px;padding-right:0px">
    {{-- <div class="zero">
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
    </div> --}}
    <div class="isnt ">
        <div class="row justify-content-center my-4">
            <h2 class="title" style="text-align: center">
                List Vaccine
            </h2>
        </div>
        <div class="row" >
          <div class="col" style="max-width: 379px;">
            <div class="card" style="
            width: 359px;
            max-width: 359px;
            height: 430px;
            max-height: 430px;">
              <img src="https://www.vibesofindia.com/wp-content/uploads/2021/09/covid-19-vaccination-1500-991-2.jpg" class="card-img-top" alt="..." style="
              height: 200px;
              width: auto;
              max-width: 359px;
              ">
              <div class="card-body" style="padding-bottom: 0%">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text"
                style="
                   display: -webkit-box;
                  -webkit-line-clamp: 3;
                  -webkit-box-orient: vertical;  
                  overflow: hidden;
                  text-align:justify;
                  height:72px;
                "
                >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <div class="card-body">
                <a class="btn btn-primary" style="width: 100%" href="/insert-patient" role="button">Vaccine now</a>
              </div>
            </div>
          </div>
          
        </div>
    </div>
  </div>
@endsection
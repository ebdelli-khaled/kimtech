@extends('layouts.app')

@section('content')
  <div class="container">

  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">File Info</div>
              <div class="panel-body">
              <h3>File Name :  {!! $name !!}</h3>
                  <h4>File Size : {!! $size !!}</h4>
                  <h5>File Extension : {!! $extension !!}</h5>
                  <h5>File Named To : {!! $named !!}</h5>

              </div>
          </div>
      </div>
  </div>
</div>

  @endsection

@extends('layouts.app')

@section('content')
  <div class="container">

  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Upload image</div>
              <div class="panel-body">

    {{ Form::open(array('url' => 'file' , 'files' => 'true')) }}

        <div class="btn-group pull-right">
            {!! Form::file("image", ['class' => 'btn btn-file']) !!}
            {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
            {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
        </div>
    {{ Form::close() }}

              </div>
          </div>
      </div>
  </div>
</div>

  @endsection

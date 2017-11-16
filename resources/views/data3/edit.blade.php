@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Edit Data</div>

        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif


          {!! Form::model($mapell,array('route'=>['mapel.update',$mapell->id],'method'=> 'PUT')) !!}
          <div class="form-group">
            {!! Form::label('Kd_Mapel','Kode Mata Pelajaran') !!}
            {!! Form::text('Kd_Mapel',null,['class' =>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('Mapel','Nama Pelajaran') !!}
            {!! Form::text('Nama_Mapel',null,['class' =>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-success']) !!}
            <a href="/mapel"><button type="button" class="btn btn-secondary">
              Batal
            </button></a>
          </div>
          {!! Form::close() !!}

          @if($errors->any() )
          <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li> {{ $error}}</li>
            @endforeach
          </ul>
          @endif


        </div>
      </div>
    </div>
  </div>
</div>
@endsection

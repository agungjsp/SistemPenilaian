@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Tambah Data</div>

        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          
          {!! Form::open(array('route'=>'mapel.store')) !!}
          <div class="form-group">
            {!! Form::label('Kd_Mapel','Kode Mata Pelajaran') !!}
            {!! Form::text('Kd_Mapel',null,['class' =>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('Mapel','Nama Pelajaran') !!}
            {!! Form::text('Nama_Mapel',null,['class' =>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::button('Tambah',['type'=>'submit','class'=>'btn btn-success']) !!}
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

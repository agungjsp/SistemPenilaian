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

          
          {!! Form::open(array('route'=>'siswa.store')) !!}
          <div class="form-group">
            {!! Form::label('NIS','Masukan NIS') !!}
            {!! Form::text('nis',null,['class' =>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('Nama','Masukan Nama') !!}
            {!! Form::text('nama',null,['class' =>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('TTL','Masukan Tanggal Lahir') !!}
            <input type="date" name="ttl" class="form-control">
          </div>

          <div class="form-group">
            {!! Form::button('Tambah',['type'=>'submit','class'=>'btn btn-success']) !!}
            <a href="/siswa"><button type="button" class="btn btn-secondary">
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

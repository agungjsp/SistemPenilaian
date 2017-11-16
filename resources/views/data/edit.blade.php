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


          {!! Form::model($datas,array('route'=>['data.update',$datas->id],'method'=> 'PUT')) !!}
          <div class="form-group">
            {!! Form::label('NIP','Masukan NIP') !!}
            {!! Form::text('nip',null,['class' =>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('Nama','Masukan Nama') !!}
            {!! Form::text('nama',null,['class' =>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('TTL','Masukan TTL') !!}
            <input type="date" name="ttl" class="form-control">
          </div>

          <div class="form-group">
            {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-success']) !!}
            <a href="/guru"><button type="button" class="btn btn-secondary">
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

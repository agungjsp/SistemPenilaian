@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/font-awesome.min.css">
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Data Guru</div>

        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          
          @if(Session::has('message'))
          <div class="alert alert-success">{{Session::get('message')}}</div>
          @endif

          <table class="table table-hover">
            <tr>
              <th>NIP</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th><i class="fa fa-wrench"></i></th>

              @foreach ($datas as $data)
              <tr>
                <td>{{$data->nip}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->ttl}}</td>
                <td>
                  {!! Form::open(array('route'=>['data.destroy',$data->id],'method'=>'DELETE')) !!}
                  {{link_to_route('data.edit',' Edit',[$data->id],['class'=>'btn btn-primary btn-lg fa fa-wrench'])}}
                  <!-- {!! Form::button(' Delete',['class'=>'btn btn-danger btn-lg fa fa-trash','type'=>'submit']) !!} -->
                  {!! Form::button(' Delete',['class'=>'btn btn-danger btn-lg fa fa-trash', 'data-toggle' => 'modal', 'data-target' => '#Delete','type'=>'button']) !!}
                  <div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="DeleteLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title" id="DeleteLabel">Delete This Item?</h2>
                        </div>
                        <div class="modal-body">
                          {!! Form::open(array('route'=>['data.destroy',$data->id],'method'=>'DELETE')) !!}
                          {!! Form::button('Yes',['class'=>'btn btn-danger btn-lg','type'=>'submit']) !!}
                          <button type="button" class="btn btn-lg btn-success" data-dismiss="modal">No</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  {!! Form::close() !!}
                </td>
              </tr>
              @endforeach
            </table>

            {{link_to_route('data.create','Tambah data baru',null,['class'=>'btn btn-success'])}}
            <a href="/home"><button type="button" class="btn btn-secondary">
              Back to Menu
            </button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

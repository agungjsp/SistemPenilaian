@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a href="/guru"><button type="button" class="btn btn-primary">
                        Guru
                    </button></a>
                    <a href="/siswa"><button type="button" class="btn btn-primary">
                        Siswa
                    </button></a>
                    <a href="/mapel"><button type="button" class="btn btn-primary">
                        Mapel
                    </button></a>
                    <a href="/nilai"><button type="button" class="btn btn-primary">
                        Nilai
                    </button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

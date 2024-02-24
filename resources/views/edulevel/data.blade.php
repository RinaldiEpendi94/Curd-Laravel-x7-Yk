@extends('main')

@section('title','edulavels')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edulavels</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="content mt-3">
 
            <div class="animated fadeIn">
            @if(session('status'))
                <div class="alert alert-success">
                {{ session('status')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Data Jenjeang</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('edulevels/add')}}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i>add
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsiv">
                    <table class="table table-bordered">
                    <theand>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Desc</th>
                        </tr>
                    </theand>
                    <tbody>
                    @foreach ($adulevels as $item)
                    <tr>    
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->desc }}</td>
                        <td class="text-center">
                        <a href="{{ url('edulevels/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <form action="{{ url('edulevels/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('yakin daya akan di hapus ?')">
                        {!! method_field('delete') !!}
                        {{ csrf_field() }}
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
@endsection
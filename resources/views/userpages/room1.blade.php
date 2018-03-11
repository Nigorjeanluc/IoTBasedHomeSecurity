@extends('layouts.dashboard')

@section('title', 'Control | Room One')

@section('styles')

@endsection

@section('pageview')
      <h1>
        Dashboard
        <small>Control Room 1</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
@endsection

@section('content')

    <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-lightbulb-o"></i>
                        <h3 class="box-title">Room One Control</h3>
                    </div>
                    <div class="box-body">
                    <div class="col-md-12">
                        <a class="btn btn-block btn-app">
                            <i class="fa fa-toggle-on"></i> Turn On
                        </a>
                        <a class="btn btn-block btn-app">
                            <i class="fa fa-toggle-off"></i> Turn Off
                        </a>
                    </div>
                    </div>
                </div>
            </div>
    </div>
@endsection


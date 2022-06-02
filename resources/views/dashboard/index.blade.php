@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dahboard</h2>
            </div>
        </div>
    </div>
    <br>
    <p>Hello, {{ Auth::user()->name }}</p>
    
        
@endsection
@extends('layout.main')

<?php $title = "Tienda 2.0"; ?>
@section('title', $title)

@section('content')

@include('components.navbar', [ 'page' => "about" ])

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>About</h1>
        </div>
    </div>
</div>

@endsection

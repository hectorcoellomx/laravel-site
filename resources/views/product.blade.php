@extends('layout.main')

<?php $title = "Tienda 2.0"; ?>
@section('title', $title)

@section('content')

@include('components.navbar', [ 'page' => "products" ])

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $product['name'] ?></h1>
            <br>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Descripción</h5>
                    <p class="card-text"><?php echo $product['description'] ?></p>
                    <a href="<?php echo url('products') ?>" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
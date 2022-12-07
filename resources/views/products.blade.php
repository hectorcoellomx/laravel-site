@extends('layout.main')

<?php $title = "Tienda 2.0"; ?>
@section('title', $title)

@section('content')

@include('components.navbar', [ 'page' => "products" ])

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Products</h1>
            <br>
            <div class="card" style="width: 18rem;">
                
                <ul class="list-group list-group-flush">
                    <?php
                        foreach ($products as $product) {
                            echo '<li class="list-group-item"><a class="d-block" href="' . url('product/' . $product['id']) . '" >' . $product['name'] . '</a></li>';
                        }
                    ?>
                    
                </ul>

            </div>
        </div>
    </div>
</div>

@endsection
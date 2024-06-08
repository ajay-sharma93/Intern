@extends('frontend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Place your items!</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="Name of the product">Enter the product name</label>
                                        <input type="product" class="form-control" id="productItems"
                                            placeholder="List of Product">
                                    </div>

                                    <div class="form-group">
                                        <label for="Description">Describe your Product</label>
                                        <br>
                                        <textarea class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="Priceof the Product">Price of the Product</label>
                                        <input type="price" class="form-control" id="price of the items"
                                            placeholder="Price">
                                    </div>

                                    <div class="form-group">

                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>


                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="available">
                                        <label class="form-check-label" for="exampleCheck1">Stock is available</label>
                                    </div>
                                </div>
                            </form>
                        @endsection

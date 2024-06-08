@extends('frontend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
        <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
            <div class="nav-item dropdown">
            </div>
        </div>




        <div class="tab-content">


            <div class="card-footer">
                <a href="{{ route('create') }}" class="btn btn-primary"> create a
                    Product</a>
            </div>

            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">

                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">

                </button>
            </div>

            <div class="tab-loading">
                <div>
                    <h2 class="display-4">Tab is loading <i class="fa fa-sync fa-spin"></i></h2>
                </div>
            </div>
        </div>

    </div>
@endsection

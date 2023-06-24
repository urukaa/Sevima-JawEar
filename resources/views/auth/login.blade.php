@extends('template.auth')

<!-- partial:index.partial.html -->
@section('content')

<main>
    <!-- S: Header -->
    <header class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">This is Logo</h1>
        </div>
    </header>
    <!-- E: Header -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="card card-default" method="post" action="/login">
                    @csrf
                    <div class="card-header">
                        <h4 class="mb-0">Login</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row align-items-center">
                            <div class="col-3 text-right">Username</div>
                            <div class="col-8"><input type="text" class="form-control" autocomplete="off" required name="username"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-3 text-right">Password</div>
                            <div class="col-8"><input type="password" class="form-control" autocomplete="off" required name="password"></div>
                        </div>
                        <div class="form-group row align-items-center mt-4">
                            <div class="col-3"></div>
                            <div class="col-8"><button class="btn btn-primary">Login</button></div>
                        </div>
                    </div>
                </form>
                    <div class="col-8">Don't have an account? <a href="/register">Register Now</a></div>
            </div>
        </div>
    </div>
</main>
    <!-- partial -->
@endsection

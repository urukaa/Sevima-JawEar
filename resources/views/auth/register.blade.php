@extends('template.auth')


@section('content')

<main>

    <header class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">This is Logo</h1>
        </div>
    </header>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="card card-default" method="post" action="/register">
                    @csrf
                    <div class="card-header">
                        <h4 class="mb-0">Register</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row align-items-center">
                            <div class="col-3 text-right">Username</div>
                            <div class="col-8"><input type="text" class="form-control" name="username" autocomplete="off" required name="username"></div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-3 text-right">Role</label>
                            <div class="col-8">

                                <select class="form-control" name="role_id">
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-3 text-right">Password</div>
                            <div class="col-8"><input type="password" class="form-control" name="password" autocomplete="off" required name="password"></div>
                        </div>
                        <div class="form-group row align-items-center mt-4">
                            <div class="col-3"></div>
                            <div class="col-8"><button class="btn btn-primary">Register</button></div>
                        </div>
                    </div>
                </form>
                    <div class="col-8">Have an account? <a href="/login">Login</a></div>
            </div>
        </div>
    </div>
</main>

@endsection

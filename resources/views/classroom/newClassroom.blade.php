@extends('template.dashboard')

@section('content')


<main>
    <header class="jumbotron">
        <div class="container">
            <h1 class="display-4">Classroom</h1>
        </div>
    </header>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0 mt-1 p-0">New Classroom</h5></div>
                <div class="card-body">
                    <form action="/classroom/create" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name">
                        </div>
                        <div class="form-group mt-3">
                            <a href="/" class="btn btn-secondary mr-1">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</main>

@endsection

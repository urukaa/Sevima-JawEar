@extends('template.dashboard')

@section('content')


<main>
    <header class="jumbotron">
        <div class="container">
            <h1 class="display-4">Assignment</h1>
        </div>
    </header>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0 mt-1 p-0">New Assignment</h5></div>
                <div class="card-body">
                    <form action="/assignment/create/{{$id->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" id="name" class="form-control" name="title">
                            <label for="deadline">Deadline</label>
                            <input type="date" id="deadline" class="form-control" name="deadline">
                            <label for="question">Question</label>
                            <textarea name="question" id="question" class="form-control" cols="30" rows="10"></textarea>
                            <label for="answer">answer</label>
                            <input type="text" name="answer" id="answer" class="form-control">

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

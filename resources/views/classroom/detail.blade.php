@extends('template.dashboard')

@section('content')


<main>
    <header class="jumbotron">
        <div class="container">
            <h1 class="display-4">{{$id->name}}</h1>
        </div>
    </header>

    <div class="container mb-5">


            <div class="section-header mb-4">
                <h5>
                    <a class="section-title" href="/assignment/create/{{$id->id}}">+ Create Assignment</a>
                </h5>
            </div>

            <div class="section-body">

                @foreach ($assignments as $assignment)

                <article class="spot">
                    <div class="row">
                        <div class="col-5">
                            <h5 class="text-primary">{{$assignment->title}}</h5>
                                <span class="text-muted">{{$assignment->deadline}}</span>
                            </div>
                            <div class="col-4">
                                <h5><audio src=""></audio></h5>
                                <span class="text-muted">{{$assignment->answer}}</span>
                            </div>
                        </div>
                    </article>
                    @endforeach
            </div>




    </div>

</main>


@endsection

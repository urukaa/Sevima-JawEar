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
                    <a class="section-title" href="/assignment/create">+ Create Assignment</a>
                </h5>
            </div>

            <div class="section-body">

                    <article class="spot">
                        <div class="row">
                            <div class="col-5">
                                <h5 class="text-primary">ULANGAN HARIAN 1</h5>
                                <span class="text-muted">deadline : 10-10-23</span>
                            </div>
                            <div class="col-4">
                                <h5>Code</h5>
                                <span class="text-muted">asdfa</span>
                            </div>
                            <div class="col-3">
                              {{-- <a class="btn btn-success btn-lg btn-block" href="/classroom/detail/{{$classroom->id}}"> --}}
                                    Detail
                                </a>
                            </div>
                        </div>
                    </article>
            </div>




    </div>

</main>


@endsection

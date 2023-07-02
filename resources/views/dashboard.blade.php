@extends('template.dashboard')

@section('content')


<main>
    <header class="jumbotron">
        <div class="container">
            <h1 class="display-4">Classrooms</h1>
        </div>
    </header>

    <div class="container mb-5">

        @if (auth()->user()->role_id == 2)

            <div class="section-header mb-4">
                <h5>
                    <a class="section-title" href="/classroom/create">+ Create Classroom</a>
                </h5>
            </div>

            <div class="section-body">

                @forelse ($classrooms as $classroom)
                    <article class="spot">
                        <div class="row">
                            <div class="col-5">
                                <h5 class="text-primary">Class Name</h5>
                                <span class="text-muted">{{$classroom->name}}</span>
                            </div>
                            <div class="col-4">
                                <h5>Code</h5>
                                <span class="text-muted">{{$classroom->code}}</span>
                            </div>
                            <div class="col-3">
                              <a class="btn btn-success btn-lg btn-block" href="/classroom/detail/{{$classroom->id}}">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </article>
            </div>
                @empty
                    <div class="alert alert-danger" role="alert">
                      <h4 class="alert-heading">You don't have a classroom yet.</h4>
                      <p>Create Now!</p>
                    </div>
                @endforelse


        @elseif (auth()->user()->role_id == 1)
            <div class="section-header mb-4">
                <h5>
                    <a class="section-title" href="/classroom/join">+ Join Classroom</a>
                </h5>
            </div>

                <div class="section-body">
                    @forelse ($students->Classrooms as $student)
                    <article class="spot">
                        <div class="row">
                            <div class="col-5">
                        <h5 class="text-primary">Class Name</h5>
                        <span class="text-muted">{{$student->name}}</span>
                    </div>
                    <div class="col-4">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-danger btn-lg btn-block">
                            Detail / Apply
                        </button>
                    </div>
                    </div>
                    </article>
                </div>

                    @empty
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">you haven't taken the classroom yet.</h4>
                            <p>Join Now!</p>
                        </div>
                    @endforelse
        @endif

    </div>

</main>


@endsection

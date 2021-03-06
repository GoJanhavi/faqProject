@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Answer</div>

                    <div class="card-body">
                        <p>{{$answer->body}}</p>
                    </div>

                    <div class="card-footer">
                        <a class="btn btn-success float-right" href="{{ route('answer.edit', ['question_id' => $question, 'answer_id'=>$answer->id,]) }}">
                            Edit
                        </a>
                        {{ Form::open(['method'  => 'DELETE', 'route' => ['answer.destroy', $answer->id, $question]])}}
                        <button class="btn btn-danger float-right mr-2">
                            Delete
                        </button>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

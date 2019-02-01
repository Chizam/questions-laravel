@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2> Ask Questions </h2>
                        <div class="ml-auto">
                        <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back To All Questions</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div>
                        <form action="{{route('questions.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="question-title"> Question Title</label>
                            <input type="text" id="question-title" name="title" value="{{ old('title') }}" class="form-control  {{ $errors->has('title') ? 'is-invalid' : ''}} " name="title">
                                @if($errors->has('title'))
                                    <div class="invalid-feedback">
                                        <strong> {{ $errors->first('title') }} </strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="question-body"> Explain Your Question</label>
                            <textarea id="question-body" rows="10" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }} " name="body"> {{ old('body') }}</textarea>

                                @if($errors->has('body'))
                                    <div class="invalid-feedback">
                                    <strong> {{ $errors->first('body') }} </strong>
                                    </div>
                                
                                @endif
                            </div>

                            <div class="form-group">
                               <button type="submit" class="btn btn-outline-primary btn-lg"> Submit Question</button>
                            </div>

                        </form>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

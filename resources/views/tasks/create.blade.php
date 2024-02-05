

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

      
            <div class="mb-3">
                <label for="project_id" class="form-label">Project</label>
                <select class="form-control" id="project_id" name="project_id" required>
                    <option value="">Select Project</option>
                    @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="company_id" class="form-label">Company</label>
                <select class="form-control" id="company_id" name="company_id" required>
                    <option value="">Select Company</option>
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>
@endsection

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('assets/school/js/plugins/sweetalert2/sweetalert2.min.css') }}" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">




@endsection

@section('page-plugin-scripts')
    <script src="{{ asset('assets/school/js/plugins/es6-promise/es6-promise.auto.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/school/js/plugins/sweetalert2/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/school/js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/school/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/school/js/plugins/jquery-validation/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/school/js/plugins/jquery-validation/additional-methods.js') }}" type="text/javascript"></script>
  
@endsection

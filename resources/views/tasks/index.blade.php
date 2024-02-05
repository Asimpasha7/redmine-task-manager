@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Task Management</h1>

        <form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search tasks">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Project</th>
                    <th>Company</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->project->name }}</td>
                        <td>{{ $task->company->name }}</td>
                        <td>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No tasks found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $tasks->links() }}
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

@extends('reservations.layout')

@section('content')
<div class="container">
    <div class="row">
        <h1>Reservations</h1>
        <hr>
        <div class="row">
                <div class="pull-left">
                    <a class="btn btn-danger" href="{{ route('layout.index') }}"> Back</a>
                </div>
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('reservations.create') }}"> Create New Student</a>
                </div>
        
                <div class="pull-right">
                    {{-- <form action="{{ route('reservations.index') }}" method="GET">
                            <input type="text" name="search" id="search-input" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-primary">Search<i class="fas fa-search"></i></button>
                    </form> --}}
        
                    {{-- <form action="{{ route('reservations.index') }}" method="GET">
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form> --}}
                </div>
        </div><br>
    </div>
    
    <div class="row">
        
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if($students->isEmpty())
        <p>No students found.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Middlename</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>Year Level</th>
                        <th>Section</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                 
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->date}}</td>
                            <td>{{ $student->time }}</td>
                            <td>{{ $student->number_of_people }}</td>
                            <td>{{ $student->message }}</td>
                            
                            <td>
                                <form action="{{ route('reservations.destroy', $student->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('reservations.edit', $student->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="align-self-center">
                {{ $students->links('pagination.custom') }}
            </div>
            <div class="align-self-center">Aligned flex item</div>
    
    @endif
</div>
@endsection
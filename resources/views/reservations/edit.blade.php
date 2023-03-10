@extends('reservations.layout')

@section('content')
    <div class="container">
        <h1>Edit Student</h1>
        <hr>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('reservations.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('reservations.update', $reservation->id) }}">
            @csrf
            @method('PUT')

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="name" value="{{ $reservation->name }}">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="email" value="{{ $reservation->email }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>phone:</strong>
                    <input type="text" name="phone" class="form-control" placeholder="phone" value="{{ $reservation->phone }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>date:</strong>
                    <input type="date" name="date" class="form-control" placeholder="date" value="{{ $reservation->date }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>time:</strong>
                    <input type="time" name="time" class="form-control" placeholder="time" value="{{ $reservation->time }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>number_of_people:</strong>
                    <input type="number" name="number_of_people" class="form-control" placeholder="number_of_people" value="{{ $reservation->number_of_people }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>message:</strong>
                    <input type="text" name="message" class="form-control" placeholder="message" value="{{ $reservation->message }}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

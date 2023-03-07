@extends('reservations.layout')
@section('content')

   <div class="container">

 
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Create New Student</h2>
                                <hr>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('reservations.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        {{-- @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif --}}

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('reservations.store') }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name</strong>
                                        <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('name') }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>email:</strong>
                                        <input type="email" name="email" class="form-control" placeholder="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="phone" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>date:</strong>
                                        <input type="date" name="date" class="form-control" placeholder="date" value="{{ old('date') }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>time:</strong>
                                        <input type="time" name="time" class="form-control" placeholder="time" value="{{ old('time') }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>number_of_people:</strong>
                                        <input type="number" name="number_of_people" class="form-control" placeholder="number_of_people" value="{{ old('number_of_people') }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>message:</strong>
                                        <input type="text" name="message" class="form-control" placeholder="message" value="{{ old('message') }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                    <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
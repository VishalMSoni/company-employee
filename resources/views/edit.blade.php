@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a Employee</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/updateEmployeeData') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Employee name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value={{ $data->name }} required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Employee Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $data->email }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input id="city" type="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $data->city }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">State</label>

                            <div class="col-md-6">
                                <input id="state" type="state" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ $data->state }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">Experience</label>

                            <div class="col-md-6">
                                <input id="experience" type="experience" class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}" name="experience" value="{{ $data->experience }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ctc" class="col-md-4 col-form-label text-md-right">CTC</label>

                            <div class="col-md-6">
                                <input id="ctc" type="ctc" class="form-control{{ $errors->has('ctc') ? ' is-invalid' : '' }}" name="ctc" value="{{ $data->ctc }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cname" class="col-md-4 col-form-label text-md-right">Company name</label>

                            <div class="col-md-6">
                                <input id="cname" type="cname" class="form-control{{ $errors->has('cname') ? ' is-invalid' : '' }}" name="cname" value="{{ $data->company }}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update the Employee
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

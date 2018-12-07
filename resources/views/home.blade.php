@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br><br>
                    <div class="row">
                        <div class="col-md-4">
                            <a class="btn btn-primary" href="{{ url('/employee') }}">
                                Add the Employee
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-primary" href="{{ url('/company') }}">
                                Add the Company
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-primary" href="{{ url('/showData') }}">
                                Show the data
                            </a>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <form method="POST" action="{{ url('/editEmployeeData') }}">
                        @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" style="width: 350px;" name="email" placeholder="Enter the email of the user that you want to edit" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">
                                    Edit the data
                                </button>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

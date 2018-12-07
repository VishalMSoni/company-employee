@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Tables</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Employee Table</h3> 
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="50px">Employee name</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Experience</th>
                                <th>CTC</th>
                                <th>Company Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employeeData as $key => $value)
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->city }}</td>
                                    <td>{{ $value->state }}</td>
                                    <td>{{ $value->experience }}</td>
                                    <td>{{ $value->ctc }}</td>
                                    <td>{{ $value->company }}</td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h3>Company Table</h3> 
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="50px">Company name</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>State</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companyData as $key => $value)
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->city }}</td>
                                    <td>{{ $value->state }}</td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
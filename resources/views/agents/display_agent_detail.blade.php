@extends('layouts.sidebar')

@section('content')
    <div class="pagetitle">
        <h1>View Agent Detail</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">View Agent Detail</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->



    <section class="section dashboard">
        <h1>Agents Detail</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Agent Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contract Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{ $agent->id }}</td>
                    <td>{{ $agent->agent_no }}</td>
                    <td>{{ $agent->name }}</td>
                    <td>{{ $agent->Email }}</td>
                    <td>{{ $agent->IsActive == 1 ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="#" class="btn btn-outline-warning btn-sm" style="width: 6em;"><i class="fa fa-pencil"
                                aria-hidden="true"></i> Edit</a>
                        <a href="#" class="btn btn btn-outline-danger btn-outline btn-sm" style="width: 6em;"><i
                                class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                    </td>
                </tr>

            </tbody>
        </table>

    </section>
@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="pagetitle">
        <h1>View Agents</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">View Agents List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->



    <section class="section dashboard">
        {{--        <div class="row"> --}}
        <h1>Agents List</h1>
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

                @foreach ($agents as $agent)
                    <tr>
                        <td>{{ $agent->id }}</td>
                        <td>{{ $agent->agent_no }}</td>
                        <td>{{ $agent->name }}</td>
                        <td>{{ $agent->Email }}</td>
                        <td>{{ $agent->IsActive == 1 ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="#" class="btn btn-outline-warning btn-sm" style="width: 6em;"><i
                                    class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                            <a href="#" class="btn btn btn-outline-danger btn-outline btn-sm" style="width: 6em;"><i
                                    class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{--        </div> --}}
        {{--        {{ $agents->links() }} <!-- Display pagination links --> --}}

        <nav class="nav-container-menu">
            <ul class="nav-list-menu">
                <li class="nav-item-menu"><a class="nav-link-menu" href="#">1</a></li>
                @if ($agents->onFirstPage())
                    <li class="nav-item-menu disabled"><span>&laquo;</span></li>
                @else
                    <li class="nav-item-menu"><a href="{{ $agents->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                @endif
                @foreach (range(1, $agents->lastPage()) as $page)
                    @if ($page == $agents->currentPage())
                        <li class="nav-item-menu active"><span>{{ $page }}</span></li>
                    @else
                        <li class="nav-item-menu"><a href="{{ $agents->url($page) }}">{{ $page }}</a></li>
                    @endif
                @endforeach

                @if ($agents->hasMorePages())
                    <li class="nav-item-menu"><a href="{{ $agents->nextPageUrl() }}" rel="next">&raquo;</a></li>
                @else
                    <li class="nav-item-menu disabled"><span>&raquo;</span></li>
                @endif
            </ul>
        </nav>
        {{-- 
    <nav class="pagination"> 
        <ul>
            @if ($agents->onFirstPage())
                <li class="disabled"><span>&laquo;</span></li>
            @else
                <li><a href="{{ $agents->previousPageUrl() }}" rel="prev">&laquo;</a></li>
            @endif

            @foreach ($agents->items() as $page)
                @if ($page == $agents->currentPage())
                    <li class="active"><span>{{ $page }}</span></li>
                @else
                    <li><a href="{{ $agents->url($page) }}">{{ $page }}</a></li>
                @endif
            @endforeach

            @if ($agents->hasMorePages())
                <li><a href="{{ $agents->nextPageUrl() }}" rel="next">&raquo;</a></li>
            @else
                <li class="disabled"><span>&raquo;</span></li>
            @endif
        </ul>
    </nav> --}}

    </section>
@endsection

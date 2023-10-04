@extends('layouts.sidebar')

@section('content')
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 65vh;
            /* Centers content vertically on the page */
        }

        /* Style for the input field */
        input[type="text"] {
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Style for the input field when it's focused */
        input[type="text"]:focus {
            border-color: #007bff;
            /* Change the border color when focused */
            outline: none;
            /* Remove the default focus outline */
        }

        /* CSS class for styling the button */
        .custom-button {
            background-color: #007bff;
            /* Background color */
            color: #fff;
            /* Text color */
            padding: 10px 20px;
            /* Padding */
            border: none;
            /* No border */
            border-radius: 4px;
            /* Rounded corners */
            cursor: pointer;
            /* Change cursor on hover */
            font-size: 16px;
            /* Font size */
            text-align: center;
            /* Center text */
        }

        /* Style the button on hover (optional) */
        .custom-button:hover {
            background-color: #0056b3;
            /* Change background color on hover */
        }
    </style>
    <div class="pagetitle">
        <h1>Search Agent</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Search Agent</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="container">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif

                <form action="{{ route('searchByAgentNo') }}" method="POST">
                    @csrf
                    <input type="text" name="agentNo">
                    <button type="submit" class="custom-button">Search Agent</button>
                </form>
            </div>
        </div>
    </section>
@endsection

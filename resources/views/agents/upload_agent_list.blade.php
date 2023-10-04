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
        input[type="file"] {
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Style for the input field when it's focused */
        input[type="file"]:focus {
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
        <h1>Upload Agents list</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Upload Agents list</li>
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

                <form action="{{ route('uploadExcel') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file">
                    <button type="submit" class="custom-button">Import Excel</button>
                </form>

                <div style="margin-top: 20px"></div>

                <!-- Display session information -->
            @if (session('newly_added_count') || session('existing_count'))
                <div class="alert alert-info">
                    @if (session('newly_added_count'))
                        New People Added: {{ session('newly_added_count') }}
                        <br>
                    @endif
                    @if (session('existing_count'))
                        Existing People: {{ session('existing_count') }}
                    @endif
                </div>
            @endif
            </div>
        </div>
    </section>
@endsection

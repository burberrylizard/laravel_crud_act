@extends('layouts.app')

@section('content')
<style>
    body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            background-color: #F72798;
            color: white;
            text-align: left;
        }

        h2 {
            text-align:center;
            color:white;
        }

        .save_button{
            background-color: #F9E400;
            color: black;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .back_button{
            background-color: #8B5DFF;
            color: white;
            padding: 5px 10px;
            border-color:black ;
            border-radius: 4px;
        }
        .bordered-col{
        background-color: #123524;
        }
</style>
<div class="container mt-5 justify-content-center align-content-center ">
    <div class="row justify-content-center w-100">
        <div class="col-lg-4 bordered-col p-4 rounded shadow">
            <h2>Add Contact</h2>

            <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
                <div class="mb-3">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Phone:</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <button type="submit" class="btn save_button">Save</button>
                <a href="/" class="btn back_button">Back</a>
            </form>
        </div>
    </div>        
</div>
@endsection

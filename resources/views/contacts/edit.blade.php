@extends('layout')

@section('content')
<style>
    body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            background-color: #F72798;
            color: white;
            text-align: left;
            margin: 10px;
            border-radius: 5px;
        }

        h2 {
            text-align:center;
            color:white;
        }

        .update_button{
            background-color: #F9E400;
            color: black;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .back_button{
            background-color: #8B5DFF;
            color: white;
            padding: 5px 10px;
            border-color: black;
            border-radius: 4px;
        }

        .name-input {
        background-color: lightblue;
        color: black;
        border: 2px solid darkblue;
        }
        .email-input {
        background-color: lightblue;
        color: black;
        border: 2px solid darkblue;
        }
        .phone-input {
        background-color: lightblue;
        color: black;
        border: 2px solid darkblue;
        }
        .bordered-col{
        background-color: #123524;
        }
        
</style>
<div class="container mt-5 justify-content-center align-content-center ">
    <div class="row justify-content-center w-100">
        <div class="col-lg-4 bordered-col p-4 rounded shadow">
            <h2>Edit Contact</h2>

                <form action="/contacts/{{ $contact->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Name:</label>
                        <input type="text" name="name" value="{{ $contact->name }}" class="form-control name-input" required>
                    </div>
                    <div class="mb-3">
                        <label>Email:</label>
                        <input type="email" name="email" value="{{ $contact->email }}" class="form-control email-input" required>
                    </div>
                    <div class="mb-3">
                        <label>Phone:</label>
                        <input type="text" name="phone" value="{{ $contact->phone }}" class="form-control phone-input" required>
                    </div>
                    <button type="submit" class="btn update_button">Update</button>
                    <a href="/" class="btn back_button">Back</a>
                </form>
        </div>
    </div>
</div>    
</div>
@endsection
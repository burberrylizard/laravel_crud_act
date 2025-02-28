@extends('layouts.app')

@section('content')
<html>

<head>
<style>
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            background-color: #F72798;
            text-align: center;
        }

        h2 {
            color:white;
        }

        table {
            width: 80%;
            margin: 10px auto;
            background: #000000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
            overflow: hidden;
        }

        thead tr th {
            background-color: #A31D1D !important;
            color: white !important;

        }
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #000000;
        }

        .add_contact{
            background-color: #F9E400;
            color: black;
            padding: 5px 10px;
            border-radius: 4px;
            text-align: right;

        }

        .edit_button{
            background-color: #06D001;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .delete_button{
            background-color: #FF0000;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
        }
    </style>
<div class="container mt-5">
    
    <h2>Contact List</h2>

    <table class="table">
        <thead >
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn edit_button">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn delete_button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <a href="{{ route('contacts.create') }}" class="btn add_contact">Add New Contact</a>
</div>
</head>
@endsection

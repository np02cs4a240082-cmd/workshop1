@extends('layouts.app')

@section('title', 'Add Contact')

@section('content')

    <h1>Add New Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">

        @csrf

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>

        <br>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <br>

        <button type="submit">Save Contact</button>

    </form>

    <br>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>

@endsection
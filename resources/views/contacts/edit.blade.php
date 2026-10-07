@extends('layouts.app')

@section('title', 'Edit Contact')

@section('content')

    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', $contact->name) }}">
        </div>

        <br>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email', $contact->email) }}">
        </div>

        <br>

        <button type="submit">Update Contact</button>

    </form>

    <br>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>

@endsection
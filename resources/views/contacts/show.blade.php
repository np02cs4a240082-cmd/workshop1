@extends('layouts.app')

@section('title', 'Contact Details')

@section('content')

    <h1>Contact Details</h1>

    <p><strong>Name:</strong> {{ $contact->name }}</p>

    <p><strong>Email:</strong> {{ $contact->email }}</p>

    <a href="{{ route('contacts.edit', $contact) }}">Edit</a>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>

@endsection
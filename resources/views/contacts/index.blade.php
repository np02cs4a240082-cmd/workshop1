@extends('layouts.app')

@section('title', 'Contacts')

@section('content')

    <h1>Contacts</h1>

    <a href="{{ route('contacts.create') }}">Add New Contact</a>

    <hr>

    @forelse ($contacts as $contact)

        <div>
            <h2>{{ $contact->name }}</h2>

            <p>Email: {{ $contact->email }}</p>

            <a href="{{ route('contacts.show', $contact) }}">View</a>

            <a href="{{ route('contacts.edit', $contact) }}">Edit</a>

            <form action="{{ route('contacts.destroy', $contact) }}"
                  method="POST"
                  style="display: inline;">

                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>

            </form>
        </div>

        <hr>

    @empty

        <p>No contacts found.</p>

    @endforelse

@endsection
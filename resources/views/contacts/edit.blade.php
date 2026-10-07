<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>

    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $contact->name) }}"
            >

            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="email">Email:</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', $contact->email) }}"
            >

            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Update Contact</button>

    </form>

    <br>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>

</body>
</html>
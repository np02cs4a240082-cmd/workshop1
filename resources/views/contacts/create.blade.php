<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
</head>
<body>

    <h1>Add New Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">

        @csrf

        <div>
            <label for="name">Name:</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
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
                value="{{ old('email') }}"
            >

            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Save Contact</button>

    </form>

    <br>

    <a href="{{ route('contacts.index') }}">Back to Contacts</a>

</body>
</html>
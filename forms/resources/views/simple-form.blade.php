<!DOCTYPE html>
<html>
<head>
    <title>Simple Laravel Form</title>
</head>
<body>
    <h2>Simple Form</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('form.submit') }}">
        @csrf

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

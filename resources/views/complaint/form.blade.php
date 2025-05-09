<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Keluhan</title>
</head>
<body>
    <h2>Form Keluhan</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('complaint.submit') }}" method="POST">
        @csrf
        <div>
            <label for="user_name">Nama:</label>
            <input type="text" id="user_name" name="user_name" required>
        </div>

        <div>
            <label for="complaint">Keluhan:</label>
            <textarea id="complaint" name="complaint" required></textarea>
        </div>

        <button type="submit">Kirim Keluhan</button>
    </form>
</body>
</html>

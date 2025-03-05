<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <!-- Formulir untuk mengedit item yang sudah ada -->
    <form action="{{ route('items.update', $item) }}" method="POST">
        @csrf <!-- Direktif Blade untuk menyertakan token CSRF agar formulir aman dari serangan CSRF -->
        @method('PUT') <!-- Mengubah metode HTTP menjadi PUT karena HTML hanya mendukung GET dan POST -->

        <!-- Input untuk Nama -->
        <label for="name">Name:</label> <!-- Label untuk input nama -->
        <input type="text" name="name" value="{{ $item->name }}" required>
        <!-- Input teks untuk nama item, dengan nilai default dari item yang sedang diedit -->
        <!-- Atribut "required" memastikan bahwa input ini harus diisi sebelum formulir dikirim -->
        <br>

        <!-- Input untuk Deskripsi -->
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $item->description }}</textarea>
        <br>
        <button type="submit">Update Item</button> <!-- Tombol untuk mengirim formulir dan memperbarui item -->
    </form>
    <a href="{{ route('items.index') }}">Back to List</a> <!-- Link untuk kembali ke daftar item -->
</body>
</html>
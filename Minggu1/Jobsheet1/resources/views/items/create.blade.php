<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Item</title>
</head>
<body>
    {{-- Menampilkan Judul utama hamalan --}}
    <h1>Add Item</h1> 

    {{-- Membuat form untuk menambahkan item --}}
    {{-- menentukan URL tujuan untuk mengirim data --}}
    <form action="{{ route('items.store') }}" method="POST"> 
        @csrf
        {{-- input teks dengan atribut for="name", yang menghubungkan label dengan input di bawahnya --}}
        <label for="name">Name</label>
        {{-- Input teks dengan name="name", yang berarti nilainya akan dikirim dengan nama name. Atribut required berarti input ini wajib diisi sebelum formulir dapat dikirim. --}}
        <input type="text" name="name" required>
        <br>
        {{-- Label untuk textarea dengan atribut for="description", yang menghubungkan label dengan input. --}}
        <label for="description">Description</label>
        {{-- Input area teks yang lebih panjang untuk deskripsi, dengan name="description". Atribut required memastikan bahwa deskripsi harus diisi sebelum formulir dikirim. --}}
        <textarea name="description" required></textarea>
        <br>
        {{-- Tombol untuk mengirim formulir. Saat diklik, data dari input akan dikirim ke route('items.store') dengan metode POST --}}
        <button type="submit">Add</button>
    </form> 
    {{-- Link untuk kembali ke daftar item --}}
    <a href="{{ route('items.index') }}">Back to List</a>
</body>
</html>
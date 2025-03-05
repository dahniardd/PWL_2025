<!DOCTYPE html>
<html lang="en">
<head>
    <title>Item List</title>
</head>
<body>
    <h1>Items</h1>

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <!-- Link untuk menambahkan item baru -->
    <a href="{{ route('items.create') }}">Add Item</a>

    <ul>
        @foreach ($items as $item) <!-- Melakukan looping pada setiap item dalam variabel $items -->
            <li>
                {{ $item->name }} - <!-- Menampilkan nama item -->

                <!-- Link untuk mengedit item -->
                <a href="{{ route('items.edit', $item) }}">Edit</a>

                <!-- Form untuk menghapus item -->
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf <!-- Token CSRF untuk keamanan -->
                    @method('DELETE') <!-- Menggunakan metode DELETE untuk menghapus item -->
                    <button type="submit">Delete</button> <!-- Tombol untuk menghapus item -->
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>    
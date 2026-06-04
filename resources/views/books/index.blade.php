<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

    @vite("resources/css/app.css")
</head>
<body>
    <h1 class="text-red-500 text-2xl">Daftar Buku</h1>
    <a href="{{url('/books/create')}}">Tambah Buku</a>
    <table border="1" Cellpadding="10" Cellpadding="0">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>        
            <td>{{ $book->year }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                <form action="{{url ('/books/delete/') }}"></form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
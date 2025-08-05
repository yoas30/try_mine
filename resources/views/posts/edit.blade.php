<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>

<h1>Edit Alat</h1>

    <form action="{{ route('alat.update', $alat['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Alat:</label>
        <input type="text" name="nama_alat" value="{{ $alat['nama_alat'] }}"><br><br>

        <label>Deskripsi Kerusakan:</label>
        <textarea name="deskripsi_kerusakan">{{ $alat['deskripsi_kerusakan'] }}</textarea><br><br>

        <label>Status:</label>
        <select name="status">
            <option value="in_progress" {{ $alat['status'] == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="selesai" {{ $alat['status'] == 'selesai' ? 'selected' : '' }}>Selesai</option>
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>
    </body>
</html>
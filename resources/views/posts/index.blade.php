
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Post</title>
</head>
<body>

<h1>Data Alat Rusak</h1>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Alat</th>
            <th>Deskripsi Kerusakan</th>
            <th>Status</th>
            <th>Waktu Lapor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['nama_alat'] }}</td>
                <td>{{ $post['deskripsi_kerusakan'] }}</td>
                <td>{{ $post['status'] }}</td>
                <td>{{ $post['waktu_lapor'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


</body>
</html>
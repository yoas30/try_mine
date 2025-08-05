<!DOCTYPE html>
<html>
<head>
    <title>Daftar Alat Rusak</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #aaa;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }

        .alert-success {
            color: green;
            margin-top: 10px;
        }

        .alert-error {
            color: red;
            margin-top: 10px;
        }

        .actions {
            display: flex;
            gap: 8px;
        }
    </style>
</head>
<body>
    <h1>Daftar Alat Rusak</h1>

    {{-- Flash message --}}
    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert-error">{{ session('error') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Alat</th>
                <th>Deskripsi Kerusakan</th>
                <th>Status</th>
                <th>Waktu Lapor</th>
                <th>Aksi</th>
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
                    <td class="actions">
                        {{-- Tombol Edit --}}
                        <a href="{{ route('alat.edit', $post['id']) }}">Edit</a>

                        {{-- Tombol Hapus --}}
                        <form action="{{ route('alat.destroy', $post['id']) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

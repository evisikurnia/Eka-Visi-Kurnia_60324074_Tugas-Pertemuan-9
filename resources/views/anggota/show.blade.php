<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anggota</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">
        Detail Anggota
    </h2>

    <div class="card shadow mx-auto" style="max-width: 600px;">
        <div class="card-body">

            <h4 class="mb-4 text-primary">
                {{ $anggota['nama'] }}
            </h4>

            <table class="table">

                <tr>
                    <th width="35%">Kode Anggota</th>
                    <td>{{ $anggota['kode'] }}</td>
                </tr>

                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $anggota['nama'] }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $anggota['email'] }}</td>
                </tr>

                <tr>
                    <th>Telepon</th>
                    <td>{{ $anggota['telepon'] }}</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{ $anggota['alamat'] }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if($anggota['status'] == 'Aktif')
                            <span class="badge bg-success">
                                Aktif
                            </span>
                        @else
                            <span class="badge bg-danger">
                                Nonaktif
                            </span>
                        @endif
                    </td>
                </tr>

            </table>

            <a href="/anggota" class="btn btn-secondary">
                Kembali ke Daftar
            </a>

        </div>
    </div>

</div>

</body>
</html>
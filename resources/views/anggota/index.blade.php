{{-- resources/views/anggota/index.blade.php --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota Perpustakaan</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4 text-center">Daftar Anggota Perpustakaan</h2>

    @php
        $anggota_list = [
            [
                'id' => 1,
                'kode' => 'AGT-001',
                'nama' => 'Budi Santoso',
                'email' => 'budi@email.com',
                'telepon' => '081234567890',
                'alamat' => 'Jakarta',
                'status' => 'Aktif'
            ],
            [
                'id' => 2,
                'kode' => 'AGT-002',
                'nama' => 'Siti Aminah',
                'email' => 'siti@email.com',
                'telepon' => '081298765432',
                'alamat' => 'Bandung',
                'status' => 'Aktif'
            ],
            [
                'id' => 3,
                'kode' => 'AGT-003',
                'nama' => 'Andi Wijaya',
                'email' => 'andi@email.com',
                'telepon' => '081377788899',
                'alamat' => 'Surabaya',
                'status' => 'Nonaktif'
            ],
            [
                'id' => 4,
                'kode' => 'AGT-004',
                'nama' => 'Dewi Lestari',
                'email' => 'dewi@email.com',
                'telepon' => '081355566677',
                'alamat' => 'Yogyakarta',
                'status' => 'Aktif'
            ],
            [
                'id' => 5,
                'kode' => 'AGT-005',
                'nama' => 'Rizky Pratama',
                'email' => 'rizky@email.com',
                'telepon' => '081322233344',
                'alamat' => 'Semarang',
                'status' => 'Aktif'
            ]
        ];
    @endphp

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Kode Anggota</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($anggota_list as $index => $anggota)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $anggota['kode'] }}</td>
                        <td>{{ $anggota['nama'] }}</td>
                        <td>{{ $anggota['email'] }}</td>
                        <td class="text-center">
                            @if($anggota['status'] == 'Aktif')
                                <span class="badge bg-success">
                                    {{ $anggota['status'] }}
                                </span>
                            @else
                                <span class="badge bg-danger">
                                    {{ $anggota['status'] }}
                                </span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="/anggota/{{ $anggota['id'] }}"
                               class="btn btn-primary btn-sm">
                                Detail
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>
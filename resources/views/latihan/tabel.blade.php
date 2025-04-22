<h3><b>Data Mahasiswa</b></h3>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
    @foreach($dataMahasiswa as $index => $mhs)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $mhs['nim'] }}</td>
        <td>{{ $mhs['nama'] }}</td>
        <td>{{ $mhs['kelas'] }}</td>
    </tr>
    @endforeach
</table>

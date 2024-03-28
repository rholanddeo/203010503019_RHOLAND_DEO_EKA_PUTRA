<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{-- <h1>Hasil Analisis Nama</h1>
    <p>Nama: {{ $nama }}</p>
    <p>Jumlah Kata: {{ $jumlahKata }}</p>
    <p>Jumlah Huruf: {{ $jumlahHuruf }}</p>
    <p>Kebalikan Nama: {{ $kebalikanNama }}</p>
    <p>Jumlah Konsonan: {{ $jumlahKonsonan }}</p>
    <p>Jumlah Vokal: {{ $jumlahVokal }}</p>
    @forelse ($results as $result )
        <p>Nama: {{ $result['nama'] }}</p>
        <p>Jumlah Kata: {{ $result['jumlahKata'] }}</p>
        <p>Jumlah Huruf: {{ $result['jumlahHuruf'] }}</p>
        <p>Kebalikan Nama: {{ $result['kebalikanNama'] }}</p>
        <p>Jumlah Konsonan: {{ $result['jumlahKonsonan'] }}</p>
        <p>Jumlah Vokal: {{ $result['jumlahVokal'] }}</p>
        <hr>
    @empty
        <p>Tidak ada data</p>
    @endforelse--}}

    <h1>Analisis Nama</h1>
    <form id="namaForm" action="/nama" method="GET">
        <div id="namaFields">
            <label for="nama">Nama:</label><br>
            <input type="text" name="nama[]"><br><br>
        </div>
        <button type="button" onclick="tambahField()">Tambah Nama</button>
        <button type="button" onclick="hapusField()">Hapus Nama</button>
        <br><br>
        <button type="submit">Analisis</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{-- @isset($results)
        <h2>Hasil Analisis</h2>
        @foreach ($results as $result)
            <div>
                <p>Nama: {{ $result['nama'] }}</p>
                <p>Jumlah Kata: {{ $result['jumlahKata'] }}</p>
                <p>Jumlah Huruf: {{ $result['jumlahHuruf'] }}</p>
                <p>Kebalikan Nama: {{ $result['kebalikanNama'] }}</p>
                <p>Jumlah Konsonan: {{ $result['jumlahKonsonan'] }}</p>
                <p>Jumlah Vokal: {{ $result['jumlahVokal'] }}</p>
            </div>
        <hr>
        @endforeach
    @endisset --}}

        <h2>Hasil Analisis</h2>
    @forelse ($results as $result )
        <p>Nama: {{ $result['nama'] }}</p>
        <p>Jumlah Kata: {{ $result['jumlahKata'] }}</p>
        <p>Jumlah Huruf: {{ $result['jumlahHuruf'] }}</p>
        <p>Kebalikan Nama: {{ $result['kebalikanNama'] }}</p>
        <p>Jumlah Konsonan: {{ $result['jumlahKonsonan'] }}</p>
        <p>Jumlah Vokal: {{ $result['jumlahVokal'] }}</p>
        <hr>
    @empty
        <p>Tidak ada data</p>
    @endforelse



    <script>
        function tambahField() {
            var div = document.createElement('div');
            div.innerHTML = '<label for="nama">Nama:</label><br><input type="text" name="nama[]" required><br><br>';
            document.getElementById('namaFields').appendChild(div);
        }

        function hapusField() {
            var fields = document.getElementsByName('nama[]');
            if (fields.length > 1) {
                fields[fields.length - 1].parentNode.remove();
            }
        }
    </script>
</body>
</html>



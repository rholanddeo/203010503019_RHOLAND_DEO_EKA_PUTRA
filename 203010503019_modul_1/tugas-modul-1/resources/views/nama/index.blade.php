<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Nama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 200px;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
        }

        .nama-group {
            display: flex;
            align-items: center;
            /* justify-content: center; */
        }

        .nama-group button {
            margin-left: 10px;
        }

        #hasil {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #f9f9f9;
            margin-bottom: 10px;
        }

        #hasil p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Analisis Nama</h1>
    <form action="/nama" method="GET" id="namaForm">
        <div id="inputNama">
            <div class="nama-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama[]" required>
                {{-- <button type="button" class="hapusField">Hapus Nama</button> --}}
            </div>
            <br><br>
        </div>
        <button type="button" id="tambahField">Tambah Nama</button>
        <button type="submit">Analisis</button>
    </form>

    @isset($results)
        <h2>Hasil Analisis</h2>
        @foreach ($results as $result)
            <div id="hasil">
                <p>Nama: {{ $result['nama'] }}</p>
                <p>Jumlah Kata: {{ $result['jumlahKata'] }}</p>
                <p>Jumlah Huruf: {{ $result['jumlahHuruf'] }}</p>
                <p>Kebalikan Nama: {{ $result['kebalikanNama'] }}</p>
                <p>Jumlah Konsonan: {{ $result['jumlahKonsonan'] }}</p>
                <p>Jumlah Vokal: {{ $result['jumlahVokal'] }}</p>
            </div>
            {{-- <hr> --}}
        @endforeach
    @endisset

    <script>
        document.getElementById('tambahField').addEventListener('click', function() {
            var inputNama = document.createElement('div');
            inputNama.innerHTML =
                '<div class="nama-group"><label for="nama">Nama:</label><input type="text" name="nama[]" required><button type="button" class="hapusField">Hapus Nama</button></div><br><br>';
            document.getElementById('inputNama').appendChild(inputNama);
        });

        document.addEventListener('click', function(event) {
            if (event.target && event.target.className == 'hapusField') {
                var parentDiv = event.target.parentElement.parentElement;
                if (parentDiv.children.length > 1) {
                    parentDiv.remove();
                }
            }
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buat surat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Lexend:wght@100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/document/buatSurat.css')}}">


</head>

<body>

    <div class="container">
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="dropdown">
                    <label for="address">Jenis Surat :</label>
                    <select class="form-select" aria-label="Default select example" name="Jenis_Surat">
                        <option value="Kontrak" name="Jenis_Surat" selected>Kontrak</option>
                        <option value="Surat Kuasa" name="Jenis_Surat">Surat Kuasa</option>
                        <option value="Notaris" name="Jenis_Surat">Notaris</option>
                        <option value="Perjanjian" name="Jenis_Surat">Perjanjian</option>
                        <option value="Gugatan" name="Jenis_Surat">Gugatan</option>
                        <option value="Pengadilan" name="Jenis_Surat">Pengadilan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="Permasalahan">Permasalahan :</label>
                <textarea id="Permasalahan" name="Permasalahan" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="Permintaan">Permintaan :</label>
                <textarea id="Permintaan" name="Permintaan" rows="4" required></textarea>
            </div>
            <button type="submit">Buat</button>
        </form>

        <a href="{{route('PEMBUATANDOKUM')}}">
            <button class="balik mt-3">
                Back
            </button>
        </a>
    </div>


    <script>
        // Fungsi untuk mengupdate label tombol dengan pilihan yang dipilih
        function updateButtonLabel(label) {
            document.getElementById("dropdownButton").innerText = label;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
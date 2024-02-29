<html>
<body>
    <div class="container">
        <h1>List Tiket Konser</h1>
        <ul>
            @foreach($tiketKonser as $konser)
                <li>
                    <strong>Nama Konser:</strong> {{ $konser['nama'] }}<br>
                    <strong>Lokasi:</strong> {{ $konser['lokasi'] }}<br>
                    <strong>Tanggal:</strong> {{ $konser['tanggal'] }}<br>
                    <strong>Harga:</strong> {{ $konser['harga'] }}<br>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
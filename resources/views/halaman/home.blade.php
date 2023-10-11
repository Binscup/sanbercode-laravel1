<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang {{$name}} {{$alamat}}</h1>
    <p>Jenis Kelamin =
        @if ($jenisKelamin === "1")
            Laki-Laki
        @else
            perempuan
        @endif
    </p>
    <H2>Terimkasih telah bergbung di sanberbook. Social media kita bersama</H2>
</body>
</html>
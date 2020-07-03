<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Halaman Depan</title>

    </head>
    <body>
        <div align="center">
            <h1>Daftar Pertanyaan</h1>
            <ul>
                <li>{{ judul }}</li>
            </ul>
        </div>
    </body>
</html>

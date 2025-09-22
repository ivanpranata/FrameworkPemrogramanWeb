<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Routing</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 15px 30px;
            font-size: 18px;
            text-decoration: none;
            background-color: #3490dc;
            color: white;
            border-radius: 8px;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <h1> ini halaman yang hanya bisa diakses oleh admin dan owner</h1>
    <div class="container">
        <a href="{{ url('/profil') }}" class="btn">Profil</a>
        <a href="{{ url('/pengaturan') }}" class="btn">Pengaturan</a>
        <a href="{{ url('/bebas') }}" class="btn">Bebas</a>
    </div>
</body>
</html>

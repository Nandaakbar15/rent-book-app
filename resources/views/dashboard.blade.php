<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        {{-- Tailwind CSS CDN --}}
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
        <h1>Ini adalah halaman dashboard</h1>

        <form action="/logout">
            @csrf
            <button class="inline-block text-white rounded-lg shadow-lg px-4 py-2 bg-slate-500 hover:bg-slate-700">
                Logout
            </button>
        </form>
    </body>

</html>

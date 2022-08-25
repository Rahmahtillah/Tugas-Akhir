<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <section id="header">
        @include('partials.headeruser')
    </section>
    <section>
        <div class="container flex mx-auto">
            <div class="flex justify-center w-full py-4 border-b-2 border-black mb-5 mt-2s">
                <h3 class="text-4xl uppercase font-bold text-black">Hasil Pengujian</h3>
            </div>
        </div>
    </section>

    <section id="data">
        <div class="container flex mx-auto mt-5 w-full flex-col shadow-lg rounded-lg bg-gray-200">
            <div class="w-full rounded-t-2xl overflow-hidden">
                <div class="text-black border-b-2 border-black rounded-t-2xl">
                    <h1 class="py-2 px-4 text-3xl font-bold">Data Diri Mahasiswa</h1>
                </div>
                <div class="w-full py-2 px-4">
                    <div class="w-1/2 grid grid-cols-3">
                        <h2 class="col-start-1 col-span-1">Nama</h2>
                        <h2 class="col-start-2 col-span-1">:</h2>
                        <h2 class="col-start-3 col-span-1">{{ $user[0]->nama }}</h2>
                    </div>
                    <div class="w-1/2 grid grid-cols-3">
                        <h2 class="col-start-1 col-span-1">NIM</h2>
                        <h2 class="col-start-2 col-span-1">:</h2>
                        <h2 class="col-start-3 col-span-1">{{ $user[0]->nim }}</h2>
                    </div>
                    <div class="w-1/2 grid grid-cols-3">
                        <h2 class="col-start-1 col-span-1">Prodi</h2>
                        <h2 class="col-start-2 col-span-1">:</h2>
                        <h2 class="col-start-3 col-span-1">{{ $user[0]->prodi->nama }}</h2>
                    </div>
                    <div class="w-1/2 grid grid-cols-3">
                        <h2 class="col-start-1 col-span-1">Tanggal & waktu Pengujian</h2>
                        <h2 class="col-start-2 col-span-1">:</h2>
                        <h2 class="col-start-3 col-span-1">{{ $user[0]->created_at }}</h2>
                    </div>
                </div>
            </div>
            <div class="w-full rounded-t-2xl overflow-hidden">
                <div class="text-black border-b-2 border-black rounded-t-2xl">
                    <h1 class="py-2 px-4 text-3xl font-bold">Hasil Pengujian</h1>
                </div>
                <div class="w-full py-2 px-4">
                    <div class="w-1/2 grid grid-cols-3">
                        <h2 class="col-start-1 col-span-1">Bakat Verbal</h2>
                        <h2 class="col-start-2 col-span-1">:</h2>
                        <h2 class="col-start-3 col-span-1">{{ $data[0]->verbal }}</h2>
                    </div>
                    <div class="w-1/2 grid grid-cols-3">
                        <h2 class="col-start-1 col-span-1">Bakat Numerikal</h2>
                        <h2 class="col-start-2 col-span-1">:</h2>
                        <h2 class="col-start-3 col-span-1">{{ $data[0]->numerik }}</h2>
                    </div>
                    <div class="w-1/2 grid grid-cols-3">
                        <h2 class="col-start-1 col-span-1">Bakat Skolastik</h2>
                        <h2 class="col-start-2 col-span-1">:</h2>
                        <h2 class="col-start-3 col-span-1">{{ $data[0]->skolastik }}</h2>
                    </div>
                    <div class="w-1/2 grid grid-cols-3">
                        <h2 class="col-start-1 col-span-1">Bakat Abstrak</h2>
                        <h2 class="col-start-2 col-span-1">:</h2>
                        <h2 class="col-start-3 col-span-1">{{ $data[0]->abstrak }}</h2>
                    </div>
                    <div class="w-1/2 grid grid-cols-3">
                        <h2 class="col-start-1 col-span-1">Bakat Spasial</h2>
                        <h2 class="col-start-2 col-span-1">:</h2>
                        <h2 class="col-start-3 col-span-1">{{ $data[0]->spasial }}</h2>
                    </div>
                    <div class="w-1/2 grid grid-cols-3">
                        <h2 class="col-start-1 col-span-1">Bakat Bahasa</h2>
                        <h2 class="col-start-2 col-span-1">:</h2>
                        <h2 class="col-start-3 col-span-1">{{ $data[0]->bahasa }}</h2>
                    </div>
                </div>
            </div>
            <div class="w-full rounded-t-2xl overflow-hidden shadow-lg">
                <div class="text-black border-b-2 border-black rounded-t-2xl">
                    <h1 class="py-2 px-4 text-3xl font-bold">Deskripsi</h1>
                </div>
                <div class="w-full py-2 px-4">
                </div>
            </div>
        </div>
    </section>
</body>

</html>

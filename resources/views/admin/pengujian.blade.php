<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section id="header">
        @include('partials.headeradmin')
    </section>

    <section id="home">
        <div class="container border-b-4 border-black mx-auto my-6">
            <h2 class="text-center uppercase font-serif text-4xl text-black font-bold">Data Training</h2>
        </div>
        <div class="container mx-auto">
            <a href="" class="py-1 rounded-3xl px-4 font-serif text-black hover:text-white shadow-lg" style="background-color: rgba(213, 221, 209, 1)">
                + Tambah Data
            </a>
        </div>
    </section>
    <section id="table">
        <div class="flex mx-auto mt-5 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                    <h1 class="py-2 px-4">Data Training Verbal</h1>
                </div>
                <div class="w-full overflow-auto">
                    <div class="mx-6 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead style="background-color: rgba(64, 94, 79, 1)">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        NIM
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Nama
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal1
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal2
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal3
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal4
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal5
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal6
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal7
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal8
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal9
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal10
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Hasil
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($verbal as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->nim }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->nama }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $dt->Soal1 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-xs text-gray-500">
                                            {{ $dt->Soal2 }}
                                        </td>
                                        <td class="px-6 py-4 text-xs text-gray-500">
                                            {{ $dt->Soal3 }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $dt->Soal4 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $dt->Soal5 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $dt->Soal6 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $dt->Soal7 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $dt->Soal8 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $dt->Soal9 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $dt->Soal10 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $dt->Hasil }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mx-auto mt-5 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                <div class="text-white" style="background-color: rgba(64, 94, 79, 1)">
                    <h1 class="py-2 px-4">Data Training Numerik</h1>
                </div>
                <div class="w-full overflow-auto">
                    <div class="mx-6 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead style="background-color: rgba(64, 94, 79, 1)">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        NIM
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Nama
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal1
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal2
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal3
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal4
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal5
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal6
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal7
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal8
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal9
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Soal10
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Hasil
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($numerik as $i => $o)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $o->nim }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $o->nama }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-900">
                                                {{ $o->Soal1 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-xs text-gray-500">
                                            {{ $o->Soal2 }}
                                        </td>
                                        <td class="px-6 py-4 text-xs text-gray-500">
                                            {{ $o->Soal3 }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $o->Soal4 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $o->Soal5 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $o->Soal6 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $o->Soal7 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $o->Soal8 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $o->Soal9 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $o->Soal10 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-xs text-gray-500">
                                                {{ $o->Hasil }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

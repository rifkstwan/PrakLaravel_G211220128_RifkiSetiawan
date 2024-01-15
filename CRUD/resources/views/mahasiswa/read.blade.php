<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{--  {{ __('Dashboard') }}   --}}
            <div class="hidden sm:flex sm:items-center sm:ml-6 ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus-border-gray-300 transition duration-150 ease-in-out">
                            <div>Tabel Mahasiswa</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M10 14l-5-5 1.41-1.41L10 11.17l3.59-3.58L15 9l-5 5z"/>
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('create')">{{__('CREATE')}}</x-dropdown-link>
                        <x-dropdown-link :href="route('read')">{{__('READ')}}</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </h2>
    </x-slot>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        @if(session('pesan'))
            <div class="alert alert-success">
                {{session('pesan')}}
            </div>
        @endif
        <div class="card">
        <h1 class="card-header text-center font-weight-bold">DATA MAHASISWA</h1>
        <a href=/create class="btn btn-success">Tambah data</a>
        <section>
            <table class="table table-striped">
                <thead class=" thead-dark">
                    <tr>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>UMUR</th>
                        <th>ALAMAT</th>
                        <th>KOTA</th>
                        <th>KELAS</th>
                        <th>JURUSAN</th>
                        <th>ACTION</th>

                    </tr>
                </thead>  
                <tbody>        
                    @foreach ($datanya as $dt)
                    <tr>
                        <td>{{$dt->nim}}</td>
                        <td>{{$dt->nama}}</td>
                        <td>{{$dt->umur}}</td>
                        <td>{{$dt->alamat}}</td>
                        <td>{{$dt->kota}}</td>
                        <td>{{$dt->kelas}}</td>
                        <td>{{$dt->jurusan}}</td>
                        <td>
                            <a href="/delete?nim={{$dt->nim}}" class="btn btn-danger" onclick="return confirm('Yakin data mau dihapus ?');">HAPUS</a>
                            <a href="/edit?nim={{$dt->nim}}" class="btn btn-primary" onclick="return confirm('Yakin data mau diedit ?');">EDIT</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>    
            </table>
        </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
</x-app-layout>
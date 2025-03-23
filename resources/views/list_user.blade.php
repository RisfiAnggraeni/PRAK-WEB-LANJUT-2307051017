@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<div class="max-w-4xl mx-auto mt-8 p-6 bg-pink-100 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-pink-800 mb-6 text-center">Daftar Mahasiswa</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-pink-300 rounded-lg shadow-md">
            <thead class="bg-pink-600 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">ID</th>
                    <th class="py-3 px-4 text-left">Nama</th>
                    <th class="py-3 px-4 text-left">NPM</th>
                    <th class="py-3 px-4 text-left">Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="border-b border-pink-300 hover:bg-pink-200 transition duration-300">
                    <td class="py-3 px-4 text-pink-900">{{ $user['id'] }}</td>
                    <td class="py-3 px-4 text-pink-900">{{ $user['nama'] }}</td>
                    <td class="py-3 px-4 text-pink-900">{{ $user['npm'] }}</td>
                    <td class="py-3 px-4 text-pink-900">{{ $user['nama_kelas'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

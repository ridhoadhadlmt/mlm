@extends('template.app')

@section('title', 'Pengaturan Penarikan')

@section('main')
<div class="bg-white p-4 shadow-md rounded-lg shadow-gray-300">

    <div class="grid grid-cols-1 gap-6 w-full xl:grid-cols-2 2xl:grid-cols-3">
        <div class="">
            <label for="">Nama Bank</label>
            <select class="py-3 px-4 pr-9 mt-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                <option selected>BRI</option>
                <option>BNI</option>
                <option>Mandiri</option>
                <option>BCA</option>
            </select>
        </div>
        <div>
            <label for="">Nomor Rekening</label>
            <input type="number" class="py-3 px-4 mt-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">

        </div>
        <div>
            <label for="">Nama Pengguna</label>
            <input type="text" class="py-3 px-4 mt-4 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">

        </div>


    </div>
</div>
@endsection

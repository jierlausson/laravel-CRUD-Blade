@extends('site.app')
@section('content')
    <div class="h-screen flex justify-center items-center w-full">
        <form method="POST" action="{{ route('client.store') }}">
            @csrf
            <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
                <div class="space-y-4">
                    <h1 class="text-center text-2xl font-semibold text-gray-600">Novo Cliente</h1>
                    <div>
                        <label for="email" class="block mb-1 text-gray-600 font-semibold">Nome</label>
                        <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                    </div>
                    <div>
                        <label for="email" class="block mb-1 text-gray-600 font-semibold">Idade</label>
                        <input type="number" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Salvar</button>
                <button type="button" onclick="window.location='{{ route('client.index') }}'"
                    class="mt-4 w-full bg-gradient-to-tr from-gray-600 to-gray-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Cancelar</button>
            </div>
        </form>
    </div>
@endsection

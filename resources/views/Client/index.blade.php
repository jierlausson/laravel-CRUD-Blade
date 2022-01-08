@extends('site.app')

<div class="container mx-auto mt-4">
    <h1 class="my-3 text-xl">Relação de Clientes</h1>
    <button type="button"></button>

    <table class="min-w-full border-collapse block md:table mt-3">
        <thead class="block md:table-header-group">
            <tr
                class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Nome</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Idade</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Ação</th>
            </tr>
        </thead>
        <tbody class="block md:table-row-group">
            @foreach ($clients as $client)
                <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                            class="inline-block w-1/3 md:hidden font-bold">Nome</span>{{ $client->name }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                            class="inline-block w-1/3 md:hidden font-bold">Idade</span>{{ $client->age }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        <span class="inline-block w-1/3 md:hidden font-bold">Ação</span>
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

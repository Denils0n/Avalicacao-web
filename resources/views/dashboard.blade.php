<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Bem vindo, da um ponto?    
                    <table>
                            <tr>
                                <th>Marca</th>
                                <th>Formula</th>
                                <th>Validade</th>
                                <th>Lote</th>
                                <th>Remedio</th>
                                <th>Valor</th>
                            </tr>
                        @foreach(Auth::user()->remedios as $remedios)
                            <tr>
                                <td>{{$remedios->nome_marca}}</td>
                                <td>{{$remedios->formula}}</td>
                                <td>{{$remedios->validade}}</td>
                                <td>{{$remedios->lote}}</td>
                                <td>{{$remedios->nome_remedio}}</td>
                                <td>{{$remedios->valor}}</td>
                                
                            </tr>
                        @endforeach
                    </table>
                    <form action="/add-remedio" method="POST">
                        @csrf
                        <input type="text" name="nome_marca" placeholder="nome da Marca">
                        <input type="text" name="formula" placeholder="formula">
                        <input type="text" name="mes" placeholder="mes">
                        <input type="text" name="ano" placeholder="ano">
                        <input type="text" name="lote" placeholder="lote">
                        <input type="text" name="nome_remedio" placeholder="Nome do Remedio">
                        <input type="text" name="valor" placeholder="Valor">
                        <input type="submit" value="Mandar">
             
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

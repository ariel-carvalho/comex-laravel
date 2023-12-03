<x-layout title="Categorias">
    <h1>Categoria de Produtos</h1>
    <a href="{{ route('categorias.create') }}">Criar Categoria</a>
    <ul>
        @foreach ($categorias as $categoria)
        <li>
            {{ $categoria["nome"] }}
        </li>
        @endforeach
    </ul>
</x-layout>
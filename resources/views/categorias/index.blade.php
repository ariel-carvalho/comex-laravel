<x-layout title="Categorias">
    <h1>Categoria de Produtos</h1>
    <ul>
        @foreach ($categorias as $categoria)
        <li>
            {{ $categoria["nome"] }}
        </li>
        @endforeach
    </ul>
</x-layout>
<x-layout title="Categorias">
    <h1>Categoria de Produtos</h1>
    <a href="{{ route('categorias.create') }}">Criar Categoria</a>
    <ul>
        @foreach ($categorias as $categoria)
        <li>
            {{ $categoria->nome}}
            <form
                action="{{ route('categorias.destroy', $categoria->id) }}" method="post">
                @csrf @method("DELETE")
                <button type="submit">Deletar</button>
            </form>
            <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
        </li>
        @endforeach
    </ul>
</x-layout>
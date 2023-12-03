<x-layout title="Criar Categoria">
   <h1>Criar Categoria</h1>
   <form action="{{ route('categorias.store') }}" method="post">
        @csrf
        <input type="text" name= "nome" placeholder= "Nome" required maxlength="128"/>
        <button type="submit">Adcionar</button>
   </form>
</x-layout>

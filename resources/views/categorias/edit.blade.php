<x-layout title="Editar Categoria">
   <h1>Editar Categoria</h1>
   <x-categorias.form
        :action="route('categorias.update', $categoria->id)"
        :nome="$categoria->nome">
    </x-categorias.form>
</x-layout>
<form action="{{ $action }}" method="post">
        
    @csrf @isset($nome) @method("PUT") @endisset

    <input
        type="text"
        name= "nome"
        placeholder= "Nome"
        @if (isset($nome) && !old($nome))
            value="{{ $nome }}"
        @else
            value="{{ old('nome') }}"
        @endif
    />

        <button type="submit">{{ isset($nome) ? "Atualizar" : "Adicionar" }}</button>

</form>
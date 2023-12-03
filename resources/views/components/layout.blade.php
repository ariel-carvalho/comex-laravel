<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    @if (session("mensagem"))
        <div class="alert alert-success">
            <p>{{ session("mensagem") }}</p>
        </div>    
    @endif
    @if ($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>  
            @endforeach
        </ul>
    </div>    
    @endif
    {{ $slot }}
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST || CRUD</title>
</head>
<body>
    <h1>Crear Post</h1>

    <form action="{{ route('post.store')}}" method="post">
        @csrf

        <label for='title'>Titulo</label>
        <input type="text" name="title" id="title">

        <label for='slug'>Slug</label>
        <input type="text" name="slug" id="slug">

        <label for='content'>Contenido</label>
        <input type="text" name="content" id="content">
        
        <label for='category'>Categoria</label>
        <select name="category_id" id="category">
            <option value=""></option>
            @foreach ($categories as $c)
                <option value="{{ $c->id }}">{{ $c->categorie }}</option>
            @endforeach
        </select>

        <label for='posted'>Postedo</label>
        <select name="posted" id="posted">
            <option value=""></option>
            <option value="yes">Si</option>
            <option value="not">No</option>
            
        </select>

        <label for='image'>Imagen</label>
        <input type="text" name="image" id="image">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
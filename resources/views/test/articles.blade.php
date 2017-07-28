<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$article->title}}</title>
    <link rel="stylesheet" type"text/css" href="{{ asset('css/style.css') }}">

</head>
<body>

    @include('admin.template.partials.nav')

        
    <h1>{{  $article ->title }}</h1>
    
    <hr>
        <b>Contenido:</b>
        {{ $article->content }}
    <hr>
        <b>Nombre:</b>
        {{ $article->user->name }}
    <hr>
        <b>Categoria:</b>
        {{ $article->category->name }}
   <hr>
        <b>Tags</b>
        <ul>
            @foreach($article->tags as $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>

    <footer class="footer">
        @include('admin.template.partials.footer')
    </footer>         

</body>
</html>

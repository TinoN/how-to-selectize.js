<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>selectize.js - Laravel Exmaple</title>

    <script src="laravel-app.js-example/app.js"></script>
</head>
<body>

<!--
    tags provided by BooksController
    public function edit(Book $book)
    {
        $tags = $book->tags->pluck('name');
        return view('books.edit', compact('book', 'tags'));
    }
-->
    <input type="text" name="tags" id="tags" value="
    @for ($i = 0; $i < count($tags); $i++)
        {{ $tags[$i] }}
        @if ($i <= count($tags)-2)
            ,
         @endif
    @endfor
    ">

</body>
</html>

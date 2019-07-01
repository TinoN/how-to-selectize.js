<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>selectize.js - Laravel Exmaple</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://selectize.github.io/selectize.js/js/selectize.js"></script>
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

    <script>

        var tagItems = [];

        $( document ).ready(function() {

            $('#tags').selectize({
                plugins: ['remove_button'],
                delimiter: ',',
                persist: true,

                options: tagItems,
                valueField: 'tag',
                labelField: 'tag',
                searchField: 'tag',
                placeholder: 'Write tag here',

                create: function(input) {
                    return {
                        tag: input
                    }
                }

            });

        });

    </script>

</body>
</html>

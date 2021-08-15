<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    </head>
    <body>
        <table class="table table-hover">
            @foreach ($categories as $cat)
            <tr>
                <td>
                    {{ $cat->cat_name }}
                </td>
                @foreach ($cat->sub_cats as $sub)
                <td>
                        {{ $sub->cat_name }}
                </td>
                @endforeach
            </tr>
            @endforeach
        </table>

        <hr>

        <table class="table table-hover">
            @foreach ($all_cats as $allcat)
                {{ $allcat->multicat() }}
            @endforeach
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TESTET</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
    <body class=>
        <div class="something">
            <h1>Todo</h1>
            <form action="{{route('saveItem')}}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="itemname" placeholder="task">
            <button >add</button>
            </form>
            <div class="list">
                @foreach ($listItems as $item)
                <div>
                    @if ($item->is_done)
                    <p style="display: inline-block; padding-right: 1rem; color:red;">
                    @else
                    <p style="display: inline-block; padding-right: 1rem; color:blue">
                    @endif
                    {{$item->name}}</p>

                    <a href="{{route('markDone',$item->id)}}"><button style="display: inline-block">complete</button></a>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>

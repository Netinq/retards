<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retard</title>

    <link  rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"></link>
</head>
<body>
    @foreach($users as $user)
        <div>
            <h2>{{$user->name}}</h2>
            <p>A manqué à son devoir d'étudiant <span>{{$user->counter}}</span> fois.</p>
            <form method="post" action="{{route('app.update', $user->id)}}">
                @csrf
                @method('PUT')
                <input hidden name="counter" value="{{$user->counter-1 >= 0 ? $user->counter-1 : 0}}">
                <button type="submit">-</button>
            </form>
            <form method="post" action="{{route('app.update', $user->id)}}">
                @csrf
                @method('PUT')
                <input hidden name="counter" value="{{$user->counter+1}}">
                <button class="add" type="submit">+</button>
            </form>
        </div>
    @endforeach
</body>
</html>

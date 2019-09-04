<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body>
        <div class = "container">
            <ul>
                @foreach ($user as $u)
                <li class="list-group-item">{{$u->id}}. {{$u->name}} => {{$u->role }}</li>
                <li><img src="/storage/image/{{$u->image}}" alt=""></li>
                @endforeach
            </ul>
        
        <h2>Add a game</h2>
 
    <form method="post" action="/index" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Game Title</label>
            <div class="col-sm-9">
                <input name="title" type="number" class="form-control" id="titleid" placeholder="Game Title">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Game Publisher</label>
            <div class="col-sm-9">
                <input name="publisher" type="text" class="form-control" id="publisherid"
                       placeholder="Game Publisher">
            </div>
        </div>
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Release Date</label>
            <div class="col-sm-9">
                    <select name="releasedate" id="releasedate">
                            <option value="1">Student</option>
                            <option value="2">DB Manager</option>
                    </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="gameimageid" class="col-sm-3 col-form-label">Game Image</label>
            <div class="col-sm-9">
                <input name="image" type="file" id="gameimageid">
                <span style="margin-left: 15px; width: 480px;" ></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Game</button>
            </div>
        </div>
    </form>
</div>
    </body>
</html>

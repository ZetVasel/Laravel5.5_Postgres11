<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Info</title>

</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>

            @endauth
        </div>
    @endif
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            Filter:
            <a href="/?name=Action">Action</a>
        </div>
        <div class="col-md-6">
            <a href="/">Reset</a>
        </div>
    </div>
    <div class="card">
        <table class="table table-striped table-bordered" border="1px solid black">
            <thead>
            <tr>
                <td>First_Name</td>
                <td>Last_Name</td>
                <td>Title</td>
                <td>Cat_App</td>
            </tr>
            </thead>
            <tbody>
            @foreach($one as $value)
                <tr>
                    <td>{{$value->first_name}}</td>
                    <td>{{$value->last_name}}</td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->name}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if($one->total() > $one->count())
        <br>
        <div class="pagination row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{$one->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

{{$count}}


</body>
</html>

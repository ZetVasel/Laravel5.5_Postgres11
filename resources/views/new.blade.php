<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
              integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <!-- подключение нужной версии jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>

        <!-- подключение popper.js, необходимого для корректной работы некоторых плагинов Bootstrap 4 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>

        <!-- подключение js-файла -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
                integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
        </script>

        <title>Info</title>

    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Last Name</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($query as $new)
                                <tr>
                                    <td>{{$new->actor_id}}</td>
                                    <td>{{$new->first_name}}</td>
                                    <td>{{$new->last_name}}</td>
                                </tr>
                            @endforeach


                        </tbody>

                    </table>
                </div>
            @if($query->total() > $query->count())
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                {{$query->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
         </div>


        @foreach($category as $new)
            <tr>
                <td>{{$new->name}}</td>

            </tr>
        @endforeach
    </body>
</html>

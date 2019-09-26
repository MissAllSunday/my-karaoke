<!DOCTYPE html>
<html>
    <head>
        <title>Kareoke App</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> ​

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Sing!</a>
            <form class="form-inline"></form>
        </nav>

        <img src="images/KareokeApp.png" class="rounded mx-auto d-block" alt="..." width="500px"> ​ ​ ​ ​

        <div class="container">
            <div class="row">
                <div class="mx-auto col-md-5">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="10px"><h2>Pos.</h2></th>
                                <th scope="col"><h2>Nickname</h2></th>
                                <th scope="col"><h2>Pts</h2></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statistics as $user)
                                <tr>
                                    <th scope="row" style="text-align: center">
                                        <h5>{{ $loop->iteration }}</h5>
                                    </th>
                                    <td>
                                        <h5>
                                            <img width="30px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png">
                                            {{ $user['name'] }}
                                        </h5>
                                    </td>
                                    <td>
                                        <h5>{{ $user['points'] }}</h5>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

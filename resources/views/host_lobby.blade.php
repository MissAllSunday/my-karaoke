<!DOCTYPE html>
<html>
    <head>
        <title>Karaoke App</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light" >
            <a class="navbar-brand">MyKareoke</a>
            <form class="form-inline"></form>
        </nav>
        <img src="images/KareokeApp.png" class="rounded mx-auto d-block" alt="..." width="600px">
        <br>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <button type="button" class="btn btn-primary btn-lg mx-auto d-block col-md-8" onclick="goToGame()">Start the karaoke!</button>
                </div>
            </div>
        </div>
    </body>
    <script>
        function goToGame() {
            location.href = "/host/game";
        }
    </script>
</html>

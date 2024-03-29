<!DOCTYPE html>
<html>
    <head>
        <title>Kareoke App</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        @include('/layouts/menu')
        @include('/layouts/logo')
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary btn-lg mx-auto d-block col-md-6" onclick="goToLoginController()">I'm singing</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary btn-lg mx-auto d-block col-md-6">Evaluate</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary btn-lg mx-auto d-block col-md-6" onclick="goToHostController()">Host</button>
                </div>
            </div>
        </div>
    </body>
    <script>
        function goToHostController() {
            location.href = "/host";
        }

        function goToLoginController() {
            location.href = "/login";
        }
    </script><script src="https://www.gstatic.com/firebasejs/6.6.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.6.2/firebase.js"></script>
    <script type="application/javascript">
        const config = {
            apiKey: "AIzaSyAdKeHjjwNY2GD0bUnx_d6ljvgaej-OT0c",
            authDomain: "https://accounts.google.com/o/oauth2/auth",
            databaseURL: "https://my-karaoke-c0a51.firebaseio.com/",
        };
        firebase.initializeApp(config);
        const database = firebase.database();
    </script>
    <script src="js/Singer.js"></script>

</html>

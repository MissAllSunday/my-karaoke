<html>
<head></head>
<body>
    <h1>Welcome</h1>

    <script src="/__/firebase/6.2.0/firebase.js"></script>
    <script type="javascript">
        var config = {
            apiKey: "AIzaSyAdKeHjjwNY2GD0bUnx_d6ljvgaej-OT0c",
            authDomain: "https://accounts.google.com/o/oauth2/auth",
            databaseURL: "https://my-karaoke-c0a51.firebaseio.com/",
        };
        firebase.initializeApp(config);
        var database = firebase.database();
        console.log(database);
    </script>
</body>
</html>
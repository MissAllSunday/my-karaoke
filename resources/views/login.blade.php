<!DOCTYPE html>
<html>
<head>
    <title>Kareoke App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    ​

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">Sing!</a>
    <form class="form-inline"></form>
</nav>

<img src="images/KareokeApp.png" class="rounded mx-auto d-block" alt="..." width="500px"> ​ ​ ​ ​

<div class="container">
    <div class="row">
        <form class="col-md-12">
            <div class="form-group col-md-12">
                <input type="text" class="form-control col-lg-9" id="nick" aria-describedby="emailHelp"
                       placeholder="Give me your signer name!!">
            </div>
            <div class="col-md-9"></div>
            <button type="submit" class="btn btn-primary btn-lg float-right">Lets Sing!</button>
        </form>
    </div>
</div>

<script src="https://www.gstatic.com/firebasejs/6.6.2/firebase.js"></script>
<script type="application/javascript">
  const config = {
    apiKey: "AIzaSyAdKeHjjwNY2GD0bUnx_d6ljvgaej-OT0c",
    authDomain: "https://accounts.google.com/o/oauth2/auth",
    databaseURL: "https://my-karaoke-c0a51.firebaseio.com/",
  };
  firebase.initializeApp(config);
  const database = firebase.database();
  const addJudge = function(name) {
    const judgeData = {name};
    const judgeListRef = database.ref('judge_list');
    const newJudgeList = judgeListRef.push();
    newJudgeList.set(judgeData);
  };
</script>
<script src="js/Judge.js"></script>
</body>
</html>

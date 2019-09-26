<html>
    OK!
    <body>
    <script src="https://www.gstatic.com/firebasejs/6.6.2/firebase.js"></script>
    <script type="application/javascript">
        const config = {
            apiKey: "AIzaSyAdKeHjjwNY2GD0bUnx_d6ljvgaej-OT0c",
            authDomain: "https://accounts.google.com/o/oauth2/auth",
            databaseURL: "https://my-karaoke-c0a51.firebaseio.com/",
        };
        firebase.initializeApp(config);
        const database = firebase.database();
        const addJudge = function (name) {
            const judgeData = { name };
            const judgeListRef = database.ref('judge_list');
            const newJudgeList = judgeListRef.push();
            newJudgeList.set(judgeData);
        };
    </script>
    <script src="js/Singer.js"></script>
    </body>
</html>

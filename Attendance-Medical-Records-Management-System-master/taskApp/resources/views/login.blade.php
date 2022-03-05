<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>page title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
        <script src="bostrap_res/jquery.min.js" type="text/javascript"></script>
        <link href="bostrap_res/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bostrap_res/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="bostrap_res/fontawesome.css" rel="stylesheet" type="text/css"/>
        <link href="bostrap_res/w3css.css" rel="stylesheet" type="text/css"/>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        
         

        <style type="text/css">
            body {
                background: #9CECFB;
                /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
                /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }

            input[type=text] {
                background-color:  #dedede;
                color: black;
                margin: 10px ; 
                align: center;
                width: 400px;
            }

            input[type=button]{

                background-color: #56baed;
                border: none;
                color: white;
                margin: 20px 20px 90px 750px;
                align:center
            }

        </style>
    </head>
    <body>

        <div class="card"  style="width: 30rem;hight:100rem; align:center;margin: 0;position: absolute; top: 50%;left: 50% ;-ms-transform: translate(-50%, -50%);transform: translate(-50%,-50%);border-radius: 25px;background-color:#FAF0E6">
 
                 <center>
                    <img src="img/login.png" style="margin:30px 30px 30px 30px">
                    <input type="text" id="login"   name="login" placeholder="Username"><br>
                    <input type="text" id="password"   name="login" placeholder="Password"><br>
                    <button type="button" class="btn btn-primary" style="width:200px;margin:20px 0px 40px 0px;" onclick="loginCheck();" value="LOG IN">LOGIN</button> 
                 </center>

             
        </div>
    </body>

</html>

<script type="text/javascript">

    function loginCheck() {

        var uname = document.getElementById('login').value;
        var pw = document.getElementById('password').value;


        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

//                    console.log(this.responseText);
                if (this.responseText == "ok") {

                    window.location.href = "dashboard.php";

                } else {

                    alert("Username Or Password Incorrect");

                }

            }
        };
        xhttp.open("GET", "php/login.php?name=" + uname + "&pword=" + pw, true);
        xhttp.send();

    }

</script>

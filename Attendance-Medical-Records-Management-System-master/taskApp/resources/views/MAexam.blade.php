<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="bostrap_res/jquery.min.js" type="text/javascript"></script>
        <link href="bostrap_res/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bostrap_res/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="bostrap_res/fontawesome.css" rel="stylesheet" type="text/css"/>
        <link href="bostrap_res/w3css.css" rel="stylesheet" type="text/css"/>
        <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
        <link rel="manifest" href="manifest.json">
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<style> 
body {
  font-family: "Lato", sans-serif;
}
fieldset {
border: #004085 2px solid;
padding: 20px 20px 20px 60px;
}

.sidenav a.active1 {
  background-color: #0000FF; /* Add a green color to the "active/current" link */
  color: white;
}
.form-group {
margin: auto; /* Same width as the sidebar + left position in px */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 80px 20px  ;
}
.form-check{
  margin-left: 10px;  
}
.sidenav {
                height: 100%;
                width: 220px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color:  #d9d9d9;
                overflow-x: hidden;
                padding-top: 20px;
                margin-top: 45px; 
                border-right:3px solid #004085; 
            }

            /* Style the sidenav links and the dropdown button */
            .sidenav a, .dropdown-btn {
                margin-top : 8px; 
                padding: 5px 8px 6px 16px;
                text-decoration: none;
                font-size: 20px;
                color: black;
                display: block;
                border-radius: 15px 50px;
                border-bottom: 6px solid #000;
                background: none;
                width: 100%;
                text-align: left;
                cursor: pointer;
                outline: none;
            }

            /* On mouse-over */
            .sidenav a:hover, .dropdown-btn:hover {
                color:#262626;
            }

            /* Main content */
            .main {
                margin-left: 200px; /* Same as the width of the sidenav */
                font-size: 10px; /* Increased text to enable scrolling */
                padding: 0px 10px;
            }

            /* Add an active class to the active dropdown button */
            .active {
                background-color: green;
                color: transparent;
            }

            /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
            .dropdown-container {
                display: none;
                background-color: #262626;
                padding-left: 8px;
                padding-right: 20px;

            }

            /* Optional: Style the caret down icon */
            .fa-caret-down {
                float: right;
                padding-right: 8px;
            }

            /* Some media queries for responsiveness */
            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }
/*@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}*/
}
</style>



    </head>
    <div class="row" style="height:10px">
    <body bgcolor="#4CAF50">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd; z-index: 6;">
            <a class="navbar-brand" href="#" style="font-family: Times New Roman; margin:0px 0px 0px 10px; font-size: 15pt"><img src="img/navbaricon.png" style="margin:0px 10px 0px 0px">KDU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" style="background-color: transparent">
                        <a class="nav-link" href="adminFOC" style="font-family: Times New Roman; margin:0px 0px 5px 10px; font-size: 15pt">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="attendance" style="font-family: Times New Roman; margin:0px 0px 5px 10px; font-size: 15pt">Attendance</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="add" style="font-family: Times New Roman; margin:0px 0px 5px 10px; font-size: 15pt">Medical records</a>
                    </li>
                     </ul>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-success my-2 my-sm-0" href="login.php">Login</a>
                </form>

            </div>
        </nav>
        </div>
        
           
        <div class="row">
            <div class="col-md-2" style="margin:0px 0px 0px 0px ;  ">    
                <div class="sidenav">
                    <a class="btn btn-outline-light" href="#" style="border-bottom:6px solid #000" >Add</a>
                    <a class="btn btn-outline-light" href="/send" style="border-bottom:6px solid #000">Send To AR</a>
                    <a class="btn btn-outline-light" href="/exam">View exam medicals</a>
                    <a class="btn btn-outline-light" href="/rejected">View rejected</a>
                    <a class="btn btn-outline-light" href="/approved">Approved medicals for lectures</a>
                </div>
   
            </div>
         

             
            <div class="col-md-10" style="margin:0px 0px 0px 0px ;  ">
      <h1>exam medicals</h1>
      <div class="table-responsive">

    
          <table class="table"  style="background-color: #167F92 ;   margin:0px 80px 0px 0px;">
             
            <thead>
                <tr style="background-color: #167F92 ">
                
                <th scope="col" style="text-align: center">Student ID</th>
                <th scope="col" style="text-align: center">Name</th>
                <th scope="col" style="text-align: center">Date of submission</th>
                <th scope="col" style="text-align: center">approved/rejected</th>
                </tr>
            </thead>

            <tbody id="tb_div2" style="background-color: #e6fff7">
                <tr style="margin:0px 80px 0px 80px" >
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                
            </tbody>
            </table>
            
            </div>

      <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-firestore.js"></script>

  
            <script>
            // Your web app's Firebase configuration
            // For Firebase JS SDK v7.20.0 and later, measurementId is optional
            var firebaseConfig = {
              
                apiKey: "AIzaSyAYH32stf0qqrLEPieHQ1SUtd2XGKJG3Wc",
                authDomain: "attendance-medicals.firebaseapp.com",
                databaseURL: "https://attendance-medicals.firebaseio.com",
                projectId: "attendance-medicals",
                storageBucket: "attendance-medicals.appspot.com",
                messagingSenderId: "79522450026",
                appId: "1:79522450026:web:f7bce2912351ae88465813",
                measurementId: "G-K837H8BYJG"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            //firebase.analytics();
            
            </script>
            
 
             
            <script type="text/javascript">
                var db = firebase.firestore();
                var tb_div=document.getElementById("tb_div2");
                
            db.collection('addmedical').onSnapshot(query => {
            query.forEach(element => {
            if (element.data().exam === true && element.data().approved === true) {
               
                    
                tb_div2.innerHTML += "<tr><th>"+ element.id  +"</th><td>"+ element.data().name  +"</td><td>"+ element.data().DoS +"</td><td>"+"approved"
                +"</td><td>"+ "</td></tr>"  
                   
            }else if (element.data().exam === true && element.data().rejected === true) {
               
                    
               tb_div2.innerHTML += "<tr><th>"+ element.id  +"</th><td>"+ element.data().name  +"</td><td>"+ element.data().DoS +"</td><td>"+"rejected"
               +"</td><td>"+ "</td></tr>"  
                  
           }else if (element.data().exam === true && element.data().rejected === false && element.data().approved === false ) {
               
                    
               tb_div2.innerHTML += "<tr><th>"+ element.id  +"</th><td>"+ element.data().name  +"</td><td>"+ element.data().DoS +"</td><td>"+ "pending"
               + "</td><td>"+"</td></tr>"  
                  
           }
        });
    })

    console.log(array);
    </script>

<script type="text/javascript">

</script>

</body>  
</html>
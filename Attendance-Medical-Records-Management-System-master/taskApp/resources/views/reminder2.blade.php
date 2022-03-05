<!DOCTYPE html>
<html>
     <head>
        
        <title>Laravel</title>

        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="bostrap_res/jquery.min.js" type="text/javascript"></script>
        <link href="bostrap_res/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bostrap_res/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="bostrap_res/fontawesome.css" rel="stylesheet" type="text/css"/>
        <link href="bostrap_res/w3css.css" rel="stylesheet" type="text/css"/>
        <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
        <link rel="manifest" href="manifest.json">
      <style>
      th,td{text-align:center;
      }
      
      </style>
      
      
      </head>

      <body>
      <h1>exam medicals</h1>
      <div class="table-responsive">

    
          <table class="table"  style="background-color: #167F92 ;   margin:0px 80px 0px 0px;">
             
            <thead>
                <tr style="background-color: #167F92 ">
                
                <th scope="col" style="text-align: center">Student ID</th>
                <th scope="col" style="text-align: center">Name</th>
                <th scope="col" style="text-align: center">Date of submission</th>
                
                </tr>
            </thead>

            <tbody id="tb_div2" style="background-color: #e6fff7">
                <tr style="margin:0px 80px 0px 80px" >
                <th scope="row"></th>
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
                  
                //   db.collection("Lecturers").onSnapshot(function(querySnapshot) {
                     
                     
                //     tb_div2.innerHTML="";
  
                //     querySnapshot.forEach(function(doc) {
                    
                //                    tb_div2.innerHTML += "<tr><th>"+ doc.data().Index  +"</th><td>"+ doc.data().Firstname  +"</td><td>"+ doc.data().Lastname +"</td><td>"
                //                    +doc.data().Email +"</td><td>"+ doc.data().Address +"</td><td>" + doc.data().nic +"</td><td>" + doc.data().Phone + "</td></tr>"  
                //         });
                        
                //      });
                // var array = [];
            db.collection('addmedical').onSnapshot(query => {
            query.forEach(element => {
            if (element.data().exam === true) {
                // const data = {
                    
                tb_div2.innerHTML += "<tr><th>"+ element.id  +"</th><td>"+ element.data().name  +"</td><td>"+ element.data().DoS +"</td><td>"
                + "</td></tr>"  
                    // id: element.id,
                    // name: element.data().name,
                    // DoS: element.data().DoS
                // };
                // array.push(data);
            }
        });
    })

    console.log(array);
    </script>

<script type="text/javascript">
// window.alert("OKA");
</script>

</body>  
</html>
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
      </head>

      <body>
          <div class ="main-form">
            <h3>Firebase Firestore</h3>
            <p>welcome to firebase firestore tutprial for web</p>
            <input type="text" placeholder="enter index here.." id="index_field">
            <input type="text" placeholder="enter name here.." id="text_field">
            <input type="text" placeholder="enter email here.." id="email_field"><br><br>
            <div class="form-check">
            <input type="checkbox" id=0 name="lecture" class="form-check-input">
            <label class="form-check-label" for="lecture"> lecture</label><br>
            <input type="checkbox" id="exam" name="exam" class="form-check-input">
            <label class="form-check-label" for="exam"> exam</label><br><br>
            </div>
            <button id="submit_btn" onclick="storeData()">proceed</button>
            <button id="submit_btn" onclick="updateData()">update</button>
            <button id="submit_btn" onclick="deleteData()">delete</button>
            <button id="submit_btn" onclick="checkData()">check</button>
            <button id="submit_btn" onclick="search()">search</button>
            <button id="submit_btn" onclick="test()">test</button>
          </div>


          <div class="main-list" id="list_div">
              <div class="list-item">
            
                 <h3>Users list : </h3>
          
              </div>
          
          
          </div>

          <table>
            <tr>
              <th>First name</th>
              <th>Last name</th> 
            </tr>
            <tbody id="tb_div2">
              <!-- <div id="tb_div2"> -->
              
                <tr>
                   <td>vvvv</td>
                   <td>vvvv</td>
                </tr>
              
              <!-- </div> -->
            </tbody>

          </table>

          
         <!-- The core Firebase JS SDK is always required and must be listed first -->
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
                
            
                function storeData(){
                    const index = document.getElementById("index_field").value;
                    const inputText = document.getElementById("text_field").value;
                    const emailText = document.getElementById("email_field").value;
                    const lecture = document.getElementById("lecture");
                    const exam = document.getElementById("exam");
                                      // Add a new document in collection "cities"
                   
                    db.collection("Users").doc(index).set({
                    
                    name:  inputText,
                    email: emailText
                      
                })
                .then(function() {
                 
                    console.log("Document successfully written!");
                })
                .catch(function(error) {
                 
                    console.error("Error writing document: ", error);
                });



             }
      
             function checkData() {
    var array = [];
    db.collection('Users').onSnapshot(query => {
        query.forEach(element => {
            if (element.data().name === 'abc') {
                const data = {
                    id: element.id,
                    name: element.data().name,
                    email: element.data().email
                };
                array.push(data);
            }
        });
    })

    console.log(array);
}
            

                  const list_div=document.querySelector("#list_div");
                  var tb_div=document.getElementById("tb_div2");

                  
            
                db.collection("Users").onSnapshot(function(querySnapshot) {
                   
                  list_div.innerHTML="";
                  tb_div.innerHTML="";

                  querySnapshot.forEach(function(doc) {
                           

                                 list_div.innerHTML += "<div class='list-item'><h3>username :"+ doc.data().name   +"</h3><h3>Email: "
                                 +doc.data().email + "</h3></div>"  

                                 tb_div.innerHTML += "<tr><td>username : "+ doc.data().name   +"</td><td>Email : "
                                 +doc.data().email + "</td></tr>"  
                           

                     });
                        
                

              //     querySnapshot.docChanges.forEach(function(change) {
                           
              //       if(change.type ==="added"){

              //         list_div.innerHTML += "<div class='list-item'><h3>username :"+ change.doc.data().name   +"</h3><h3>Email: "
              //              +change.doc.data().email + "</h3></div>"

              //       }

            
              //  });

                       /*  list_div.innerHTML += "<div class='list-item'><h3>username :"+ doc.data().name   +"</h3><h3>Email: "
                        +doc.data().email + "</h3></div>"
 */
                    
                    });
            function updateData(){
              const index = document.getElementById("index_field").value;
              const inputText = document.getElementById("text_field").value;
              const emailText = document.getElementById("email_field").value;
              db.collection("Users").doc(index).update({
                name:  inputText,
                email: emailText
              });
            }
            function deleteData(){
              const index = document.getElementById("index_field").value;
              const inputText = document.getElementById("text_field").value;
              const emailText = document.getElementById("email_field").value;
              db.collection("Users").doc(index).delete().then(function() {
              console.log("Document successfully deleted!");
              }).catch(function(error) {
              console.error("Error removing document: ", error);
              });
            }
            function test(){
              const lec = document.getElementById("lecture");
              const exam = document.getElementById("exam").checked;
              console.log("lec value"+lec);
              console.log("exam value"+exam);
              
            }
            function search(){
              const Sidv = document.getElementById("index_field").value;
              var docRef = db.collection("addmedical").doc(Sidv);

              docRef.get().then(function(doc) {
              if (doc.exists) {
              console.log("Document data:", doc.data());
              document.getElementById("text_field").value=doc.data().name;
              } else {
               // doc.data() will be undefined in this case
              console.log("No such document!");
              }
              }).catch(function(error) {
              console.log("Error getting document:", error);
              });

            }
            
            
            
            
            
            </script>

            <script type="text/javascript">
           // window.alert("OKA");
            </script>

      </body>  
      </html>

const firebaseConfig = {
    apiKey: "AIzaSyANnUcDrZc2n2EqKlU3v59EZWnYx_vQiVY",
    authDomain: "attendance-medical-records.firebaseapp.com",
    databaseURL: "https://attendance-medical-records.firebaseio.com",
    projectId: "attendance-medical-records",
    storageBucket: "attendance-medical-records.appspot.com",
    messagingSenderId: "997388869391",
    appId: "1:997388869391:web:caca5f71b851829a4a287a",
    measurementId: "G-VPXS07FB9T"
  };
  firebaseConfig.initializeApp(firebaseConfig);

  const messaging=firebase.messaging();
    messaging
        .requestPermission()
        .then(function(){
            console.log("Notification permission granted.");
            return messaging.getToken()

        }).then(function(token){
            console.log(token)
            alert(token)+
        }).apiKeycatch(function(err){
            console.log("unable to get permission to notify.",err);
        });
        messaging.onMessage((payload)=>{
            console.log(payload);
        })
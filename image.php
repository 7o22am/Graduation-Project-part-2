<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/assiut.jpeg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 
    <title>Image Page</title>
</head>
<style>
    #myimg{
        width:300px;
        height: 300px;
        border: 3px dashed #fff;
        margin-bottom: -58px;
    }
    .imgbox{
        margin-top: 135px;
    }
    body{
        background-color: #b1bfd8;
        background-image: linear-gradient(315deg, #b1bfd8 0%, #6782b4 74%);
    }
    #upProgress{
    position: absolute;
    color: #ffffffb5;
    font-size: 25px;
    width: 100%;
    padding-left: 20px;
    }
</style>

<body>
        
   <div class="container">
       <div class="row">
           <div class="col-md-4">
           </div>
    <div class="col-md-4">
       <div class="imgbox">
       <h2>please select image</h2>
            <img id="myimg"> <label id="upProgress"></label> <br> <br>
            <input placeholder="" class="form-control" style="width:50%"  type="hidden" id="namebox"> <br> <br>
            <button id="Select" type="button" class="btn btn-primary">Select Image</button>
            <button id="Upload" type="button" class="btn btn-success">Upload Image</button>
       </div>
    </div>
       </div>
       

        <!--Firebase Libraries-->

    <script src="https://www.gstatic.com/firebasejs/8.4.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.3/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.3/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.3/firebase-storage.js"></script>

    <script id="MainScript">
        //----------------------------- Variables ------------------------//
        var ImgName , ImgUrl;
        var files = [] ;
        var reader = new FileReader();
        //    ----------------------------- Configuration ------------------------//
            var firebaseConfig = {
        apiKey: "AIzaSyBSmesyjWJMpaXkYcS96GTL7dousJ6TJhs",
        authDomain: "grad-project-d953a.firebaseapp.com",
        databaseURL: "https://grad-project-d953a-default-rtdb.firebaseio.com",
        projectId: "grad-project-d953a",
        storageBucket: "grad-project-d953a.appspot.com",
        messagingSenderId: "772735305148",
        appId: "1:772735305148:web:4bf5d570077c3e5c0097b9",
        measurementId: "G-8BKRQ4EK9L"
    };
    // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
      
        //----------------------------- Select Process ------------------------//
       document.getElementById("Select").onclick = function(e){
           var input = document.createElement('input');
           input.type = 'file';
           input.onchange = e => {
               files = e.target.files ;
               console.log(files);
               reader = new FileReader();
               reader.onload = function(){
                   document.getElementById("myimg").src = reader.result;
               }
               reader.readAsDataURL(files[0]);
           }
           input.click();
       }
    
         //----------------------------- Uploading Picture To Storage ------------------------//

       document.getElementById("Upload").onclick = function(){
           ImgName = document.getElementById("namebox").value ;
           var uploadTask = firebase.storage().ref('Images/'+files[0]['name']+".png").put(files[0]);

           uploadTask.on('state_changed' , function(snapshot){
               var progress = ( snapshot.bytesTransferred / snapshot.totalBytes) * 100 ;
               document.getElementById('upProgress').innerHTML = 'Upload'+" "+progress+'%' ;
           },
        

           //----------------------------- Error Handling ------------------------//


            function (error){
                alert ('Error In Saving Image')
            } ,

            //----------------------------- Submiting image link to database ------------------------//

            function (){
                uploadTask.snapshot.ref.getDownloadURL().then(function(url){
                    ImgUrl = url ;
                    firebase.database().ref('Noitifaction/').push(
                         ImgUrl);
                    alert("Image Send Successfully")
                }
                    );
            });
 }


    </script>
   
</body>
</html>
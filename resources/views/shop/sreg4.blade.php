<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- UIkit CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/css/uikit.min.css" />

     <!-- Custom css -->
     <link rel="stylesheet" href="../../css/login.css">
     <!-- Animate CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
     
     <!-- Comfortaa font -->
     <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

     <!-- Fontawesome -->
     <script type="text/javascript">
          (function () {
               var css = document.createElement('link');
               css.href = 'https://use.fontawesome.com/releases/v5.11.0/css/all.css';
               css.rel = 'stylesheet'; css.type = 'text/css';
               document.getElementsByTagName('head')[0].appendChild(css);
          })(); 
     </script>

     <title>Sidadiya Register</title>


</head>

<body>

     <div class="uk-flex uk-flex-center logincard uk-width-1-1@m">
          <div class="uk-card uk-card-default uk-card-body  uk-width-1-2@m uk-animation-slide-top-small">
               <div class="uk-card-title uk-text-center">Sidadiya Register</div>
               <div class="uk-text-large uk-text-center uk-text-primary">4 | 5</div>
               <div class="uk-text-small uk-text-center">User Details</div>

               <div class="uk-child-width-1-1@s" uk-grid>

                    <form action="../../view/shop/sreg5.html" method="POST">

                         <!-- Email-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Email</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input required class="uk-input" type="email" placeholder="sidadiya@example.com">
                              </div>
                         </div>

                         <!-- Password-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Password</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input id="pass" required class="uk-input" name="password" type="password"
                                        placeholder="XXXXXX">
                              </div>
                         </div>

                         <!--Confirm Password-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Confirm Password</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input id="repass" required class="uk-input " type="password" placeholder="XXXXXX"
                                        onkeyup="checkPass();">
                                   <span id="confirm-message2" class="confirm-message"></span>
                              </div>
                         </div>






                         <div class="uk-align-right">
                              <button class="uk-button uk-button-default uk-text-bold nextbtn" id="next"
                                   type="submit">Next<i
                                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></button>
                         </div>
                         <div class="uk-align-left">
                              <a href="../../view/shop/sreg2.html"
                                   class="uk-button uk-button-default uk-text-bold backbtn"><i
                                        class="fas fa-arrow-circle-left uk-margin-small-right"></i>Back</a>
                         </div>
                    </form>



               </div>
          </div>



          <!-- jQuery -->
          <script src=" https://code.jquery.com/jquery-3.4.1.min.js"
               integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
               </script>

          <!-- UIkit JS -->
          <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit.min.js"></script>

          <!-- Custom js -->
          <script src="../../js/script.js"></script>

</body>

</html>
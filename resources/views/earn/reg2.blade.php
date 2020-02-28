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
     <!-- JQ -->
     <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>  
     

     <title>Sidadiya Register</title>


</head>

<body>

     <div class="uk-flex uk-flex-center logincard uk-width-1-1@m">
          <div class="uk-card uk-card-default uk-card-body  uk-width-1-2@m uk-animation-slide-top-small">
               <div class="uk-card-title uk-text-center">Registration</div>
               <div class="uk-text-large uk-text-center uk-text-primary">2 | 2</div>
               <div class="uk-text-small uk-text-center">Verification Code</div>

               <div class="uk-child-width-1-1@s" uk-grid>

                    <form action="/verified" method="post">

                         <!-- Verify code -->
                         <div class="uk-margin">
                              <span class="uk-label">Verify code</span>
                              <div class="uk-inline uk-width-1-1">
                                   <span class="uk-form-icon"> <i class="fa fa-key"></i></span>
                                   <input required class="uk-input" name="vrify" autocomplete="off" type="text" placeholder="XXXXXX">
                              </div>
                         </div>


                         <!-- Back button -->
                         <div class="uk-align-left">
                              <a href="/reg" class="uk-button uk-button-default uk-text-bold backbtn"><i
                                        class="fas fa-arrow-circle-left uk-margin-small-right"></i>Back</a>

                         </div>
                         @csrf  
                         <!-- Verify button -->
                         <div class="uk-align-right">
                         
                              <button type="submit" 
                                   class="uk-button uk-button-default uk-text-bold loginbtn">
                                   <i class="fas fa-check-circle uk-margin-small-right"></i>Verify</button>
                         </div>
                    </form>

               </div>
          </div>


          <!-- Popup modal section -->

          <!-- Incorrect popup -->
              
          <div id="incorrectcode" uk-modal>
               <div class="incorrectcode uk-modal-dialog uk-modal-body uk-text-center">
                    <div class="uk-text-large"> <i class="fas fa-times-circle uk-margin-small-right"></i>Oopz !</div>
                    <div class="uk-align-center">
                         <img src="../../assets/oopz.svg" alt="" width="400" uk-img>
                    </div>
                    <p>
                         Incorrect Verification Code
                    </p>
                    <p class="uk-text-right">
                         <button class="uk-button uk-button-default uk-modal-close tryagainbtn" type="button"><i
                                   class="fas fa-redo-alt uk-margin-small-right"></i>Try Again</button> 
                    </p>
               </div>
          </div>
          
         

          <!-- Correct popup -->
          
          <div id="correctcode" uk-modal>
               <div class="correctcode uk-modal-dialog uk-modal-body uk-text-center">
                    <div class="uk-text-large">Awesome !</div>

                    <div class="uk-align-center">
                         <img src="../../assets/done.svg" alt="" width="400" uk-img>
                    </div>
                    <p>
                         You are successfully registered to <br>
                         <b class="uk-text-large">Sidadiya.lk</b>
                    </p>
                    <p class="uk-text-right">
                         <form action="/" method="get">  
                              <button type="submit"  class="uk-button uk-button-default loginbtn2" >
                                   <i class="fas fa-sign-in-alt uk-margin-small-right"></i>Login</button>
                         </form>
                    </p>
               </div>
          </div>

          
          <!--load messages modals -->
          @if(Session::has("success"))
               <script>
                    $( document ).ready(function() {
                    UIkit.modal('#correctcode').show();
                    });
               </script>
          @elseif(Session::has("fail"))
               <script>
                    $( document ).ready(function() {
                    UIkit.modal('#incorrectcode').show();
                    });
               </script>
          @endif

        



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
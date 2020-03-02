<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- UIkit CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/css/uikit.min.css" />


     <!-- iziToast -->
     <link rel="stylesheet" href="../iziToast/css/iziToast.css">

     <!-- Custom css -->
     <link rel="stylesheet" href="../css/login.css">

     <!-- Animecss -->
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

     <!--
 +-+ +-+ +-+ +-+ +-+ +-+ +-+ +-+ +-+ +-+ +-+                            
 |S| |i| |d| |a| |d| |i| |y| |a| |.| |l| |k|                            
 +-+ +-+ +-+ +-+ +-+ +-+ +-+ +-+ +-+ +-+ +-+                            
 +-+ +-+ +-+   +-+ +-+ +-+ +-+ +-+ +-+   +-+ +-+ +-+ +-+ +-+ +-+ +-+ +-+
 |A| |l| |l|   |R| |i| |g| |h| |t| |s|   |R| |e| |s| |e| |r| |v| |e| |d|
 +-+ +-+ +-+   +-+ +-+ +-+ +-+ +-+ +-+   +-+ +-+ +-+ +-+ +-+ +-+ +-+ +-+
Designed by Nisal Keerthisinhge
-->



     <title>Sidadiya Login</title>
</head>

<body>

     <!-- Main container -->
     <div class="uk-flex uk-flex-center uk-width-1-1@m uk-margin-large-top">
          <!-- Login card -->
          <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@m uk-width-1-2@m uk-margin uk-animation-slide-top-small"
               uk-grid>
               <div class="uk-card-media-left uk-cover-container">
                    <img src="../assets/back.jpg" alt="" uk-cover>
                    <canvas width="200" height="400"></canvas>
               </div>
               <div>
                    <div class="uk-card-body  right">
                         <form action="/login" class="uk-width-expand uk-text-center" method="get">
                              <h2>Sidadiya</h2>
                              <!-- <div class="uk-card-title uk-text-light">Login</div> -->

                              <img src="../assets/logo3.svg" class="uk-animation-stroke" width="100"
                                   uk-svg="stroke-animation: true">


                              <!-- Email -->
                              <div class="uk-margin">
                                   <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon"><i class="fas fa-user"></i></span>
                                        <input class="uk-input" name="email"  type="email" placeholder="Your email">
                                   </div>
                                   @if(Session::get("email")=="email")
                                        <span class="uk-text-small uk-margin-small-left uk-align-left uk-text-danger"><i class='fa fa-times-circle'></i> User not registered</span>
                                   @endif
                              </div>

                              <!-- Password -->
                              <div class="uk-margin">
                                   <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon"><i class="fas fa-key"></i></span>
                                        <input class="uk-input" type="password" name="password" placeholder="Your password">
                                   </div>
                                   @if(Session::has("pw"))
                                   <div><span class="uk-text-small uk-margin-small-left uk-align-left uk-text-danger"><i class='fa fa-times-circle'></i> Wrong password</span></div>
                                   @endif
                            
                              @csrf
                              </div>
                              <!-- Forgot password -->
                              <p class="uk-text-right">
                                   <a href="#forgotpass" uk-toggle style="text-decoration:none">Forgot password ?</a>
                              </p>

                              <!-- Login buttons -->

                              <a href="#" type="button" uk-toggle="target: #regtype"
                                   class="uk-button uk-width-1-1 uk-button-primary uk-text-lighter regbtn ">
                                   <i class="fas fa-user-plus uk-margin-small-right"></i>Register
                              </a>
                              <button id="login" type="submit" 
                                   class="uk-button uk-width-1-1 uk-margin-top uk-button-primary uk-text-lighter loginbtn "><i
                                        class="fas fa-sign-in-alt uk-margin-small-right"></i>Login
                         </button>

                    </div>
                    </form>

                    <!-- Registration type popup modal -->
                    <div id="regtype" uk-modal>
                         <div class="uk-modal-dialog">
                              <div class="uk-modal-body">

                                   <div class="uk-grid-small uk-child-width-expand@s uk-text-center uk-grid-match"
                                        uk-grid>
                                        <!-- Earning account card  -->
                                        <div>
                                             <div id="eacc" style="text-decoration: none;"
                                                  class="uk-card uk-card-default uk-card-small uk-card-hover uk-card-body  col1">
                                                  <i class="fas fa-coins fa-2x"></i>

                                                  <div class="uk-text-large">Earning Account</div>
                                                  <ul class="uk-list uk-list-bullet uk-text-left">
                                                       <li>Like & Share Posts</li>
                                                       <li>Earn Real Money</li>
                                                       <li>Make Friends</li>

                                                       <div class="uk-text-center animated pulse infinite"><span
                                                                 class="uk-text-large uk-text-bold">FREE</span>
                                                       </div>
                                                  </ul>
                                             </div>

                                        </div>
                                        <!--END Earning account card  -->

                                        <!-- Shopping account -->
                                        <div>
                                             <div id="sacc"
                                                  class="uk-card uk-card-default uk-card-small uk-card-hover uk-card-body col2">
                                                  <i class="fas fa-store fa-2x"></i>
                                                  <div class="uk-text-large">Shop Account</div>
                                                  <ul class="uk-list uk-list-bullet uk-text-left">
                                                       <li>Publish your shop</li>
                                                       <li>Sell your products</li>

                                                       <span
                                                            class="uk-label uk-label-danger animated pulse infinite uk-align-center uk-text-center">Promotion</span>
                                                       <div class="uk-text-center uk-margin-small-top"
                                                            style="text-decoration: line-through; color: #3e3e3e;">
                                                            Rs. <span class="uk-text-bold">2,500/=</span>
                                                       </div>
                                                       <div class="uk-text-center">Rs.<span
                                                                 class="uk-text-large uk-text-bold">500/=</span>
                                                       </div>

                                                  </ul>
                                             </div>
                                        </div>
                                        <!-- END Shopping account -->
                                   </div>

                                   <!-- Footer -->
                                   <p class="uk-align-right uk-margin-top">
                                        <button
                                             class="uk-button uk-button-small uk-button-danger uk-modal-close">Close</button>
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     </div>

     <!-- Popup section -->
          
     <!-- Forgot password -->
     <div id="forgotpass" uk-modal>
          <div class="uk-modal-dialog uk-modal-body uk-text-center">
               <img src="../assets/tenor.gif" width="300" alt="Loading...">
               <h2 class="uk-text-large">Forgot your password ?</h2>
               <p>Don't warry we forget everything sometimes :)</p>
               <form action="/forget" method="get" class="uk-form-stacked">
                    <div class="uk-margin">
                         <label class="uk-form-label" for="form-stacked-text"><i class="fas fa-envelope"></i>
                              Email</label>
                         <div class="uk-form-controls">
                              <input required class="uk-input" id="forgot" name="forgot" type="text" placeholder="Email">
                         </div>
                         <p id="forgot_message"></p>
                    </div>

                    <p class="uk-text-right">
                         <a class="uk-button uk-button-default uk-modal-close" type="button">Cancel</a>
                         <button class="uk-button uk-button-primary" type="submit" >Submit</button>
                    </p>
               </form>
          </div>
     </div>

     <script
     src="https://code.jquery.com/jquery-3.4.1.min.js"
     integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
     crossorigin="anonymous"></script>

     @if(Session::has("usern"))
     <script>
          $( document ).ready(function() {
               Swal.fire(
                    'OOpz!',
                    'You are not registered!',
                    'error'
                         )
          });
     </script>
    @elseif(Session::has("users"))
     <script>
          $( document ).ready(function() {
               Swal.fire(
                    'The link is already sent!',
                    'Please check your email!',
                    'warning'
                         )
          });
     </script>
     @elseif(Session::has("done"))
     <script>
          $( document ).ready(function() {
               Swal.fire(
                    'Reset link has been sent!',
                    'Please check your email!',
                    'success'
                         )
          });
     </script>
    @endif

     <!-- jQuery -->
     <script src=" https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
          </script>

     <!-- UIkit JS -->
     <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit.min.js"></script>


     <!-- iziToast -->
     <script src="../iziToast/js/iziToast.js"></script>

     <!-- Custom js -->
     <script src="../js/script.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
     <script>

          //     iziToast login error
          function trige() {
               iziToast.error({
                    backgroundColor: '#f85e5e',
                    title: '<span class="uk-text-middle">Incorrect credentials</span>',
               })
          }


     </script>
</body>

</html>
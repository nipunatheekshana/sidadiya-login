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

     <title>Sidadiya Register</title>


</head>

<body>

     <div class="uk-flex uk-flex-center logincard uk-margin-bottom uk-width-1-1@m">
          <div class="uk-card uk-card-default uk-card-body  uk-width-1-2@m uk-animation-slide-top-small">
               <div class="uk-card-title uk-text-center">Sidadiya Register</div>
               <div class="uk-text-large uk-text-center uk-text-primary">2 | 5</div>
               <div class="uk-text-small uk-text-center">Shop Details</div>

               <div class="uk-child-width-1-1@s" uk-grid>

                    <form action="../../view/shop/sreg3.html" method="POST">

                         <!-- Address-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label"> Shop Name</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input required class="uk-input" type="text" placeholder="LK Shop">
                              </div>
                         </div>

                         <!-- Shop phone-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Shop Phone</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input required class="uk-input" type="number" placeholder="070 000 0000">
                              </div>
                         </div>

                         <!-- Shop Type -->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Shop Type</span>
                              <div class="uk-inline uk-width-1-1">

                                   <div class="uk-margin">
                                        <select class="uk-select">
                                            <option value="">Choose</option>
                                            <option value="1">Electric</option>
                                            <option value="2">Fashion</option>
                                        </select>
                                    </div>
                              </div>
                         </div>

                         <!-- Delivery Type -->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Delivery Type</span>
                              <div class="uk-inline uk-width-1-1">

                                   <div class="uk-margin">
                                        <select class="uk-select">
                                            <option>Store Pickup</option>
                                            <option>Store Delivery</option>
                                        </select>
                                    </div>
                              </div>
                         </div>

                         
                         <!-- Contact Name-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">  Contact Name</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input required class="uk-input" type="text" placeholder="John doe">
                              </div>
                         </div>

                         <!-- Contact Phone-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Contact Phone</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input required class="uk-input" type="text" placeholder="070 000 0000">
                              </div>
                         </div>

                           <!-- Business Registration Number -->
                           <div class="uk-margin">
                              <span class="uk-label">Business Registration Number</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input class="uk-input" type="text" placeholder="PV128202">
                              </div>
                         </div>

                         <!-- Contact Email-->
                         <div class="uk-margin">
                              <span class="uk-label">Contact Email</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input class="uk-input" type="email" placeholder="sidadiya@example.com">
                              </div>
                         </div>

                       
                         

                         <div class="uk-align-right">
                              <button class="uk-button uk-button-default uk-text-bold nextbtn" type="submit">Next<i
                                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></button>
                         </div>
                         <div class="uk-align-left">
                              <a href="../../view/shop/sreg1.html" class="uk-button uk-button-default uk-text-bold backbtn"><i
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
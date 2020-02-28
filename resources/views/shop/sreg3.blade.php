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

     <div class="uk-flex uk-flex-center logincard uk-margin-bottom uk-width-1-1@m">
          <div class="uk-card uk-card-default uk-card-body  uk-width-1-2@m uk-animation-slide-top-small">
               <div class="uk-card-title uk-text-center">Sidadiya Register</div>
               <div class="uk-text-large uk-text-center uk-text-primary">3 | 5</div>
               <div class="uk-text-small uk-text-center">Location Details</div>

               <div class="uk-child-width-1-1@s" uk-grid>

                    <form action="../../view/shop/sreg4.html" method="POST">

                         <!-- Country-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Country</span>
                              <div class="uk-inline uk-width-1-1">

                                   <div class="uk-margin">
                                        <select required class="uk-select">
                                             <option value="1">Sri Lanka</option>
                                             <option value="2">India</option>
                                        </select>
                                   </div>
                              </div>
                         </div>

                         <!-- Province-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Province</span>
                              <div class="uk-inline uk-width-1-1">

                                   <div class="uk-margin">
                                        <select required class="uk-select">
                                             <option value="">Select</option>
                                             <option value="province_1">Central</option>
                                             <option value="province_2">Eastern</option>
                                             <option value="province_3">North Central</option>
                                             <option value="province_4">Northern</option>
                                             <option value="province_5">North Western</option>
                                             <option value="province_6">Sabaragamuwa</option>
                                             <option value="province_7">Southern</option>
                                             <option value="province_8">Uva</option>
                                             <option value="province_9">Western</option>
                                        </select>
                                   </div>

                              </div>
                         </div>

                         <!-- Address-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Street Address</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input required class="uk-input" type="text"
                                        placeholder="534/A , Main road, Colombo">
                              </div>
                         </div>

                         <!-- City-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">City</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input required class="uk-input" type="text" placeholder="Kadawatha">
                              </div>
                         </div>

                         <!-- Postal code-->
                         <div class="uk-margin">
                              <span class="uk-text-danger">*</span>
                              <span class="uk-label">Postal Code</span>
                              <div class="uk-inline uk-width-1-1">
                                   <input required class="uk-input" type="number" placeholder="11850">
                              </div>
                         </div>

                     

                        

                         <div class="uk-align-right ">
                              <button class="uk-button uk-button-default uk-text-bold nextbtn"
                                   id="nxtbtn" type="submit">Next<i
                                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></button>
                         </div>

                         <div class="uk-align-left">
                              <a href="/view/shop/sreg2.html"
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
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

     <title>Sidadiya Shop Register</title>


</head>

<body>

     <div class="uk-flex uk-flex-center logincard uk-width-1-1@m ">

          <div
               class="uk-card uk-card-default uk-card-body uk-text-center uk-width-1-2@m uk-animation-slide-top-small uk-margin-bottom">
               <div class="uk-card-title uk-text-center">Sidadiya Shop Register</div>
               <div class="uk-text-large uk-text-center uk-text-primary">1 | 5</div>
               <div class="uk-text-small uk-text-center uk-margin-bottom">Payment Method</div>


               <div class="uk-child-width-1-1@m uk-grid-small" uk-switcher="animation: uk-animation-fade; toggle: > *"
                    uk-grid>
                    <!-- Online payment button -->
                    <div>
                         <button class="uk-button loginbtn uk-width-1-2@m" type="button"><i
                                   class="fas fa-money-check-alt uk-margin-small-right"></i>Online Payment</button>
                    </div>
                    <!-- Bank deposit button -->
                    <div>
                         <button class="uk-button loginbtn uk-width-1-2@m" type="button">
                              <i class="fas fa-university uk-margin-small-right"></i>Bank Deposit</button>
                    </div>
                    <!-- Ez cash button -->
                    <div>
                         <button class="uk-button loginbtn uk-width-1-2@m" type="button"><i
                                   class="fas fa-money-bill-wave uk-margin-small-right"></i>Ez Cash</button>
                    </div>

                    <!-- Pin number button -->
                    <div>
                         <button class="uk-button regbtn uk-width-1-2@m" type="button"><i
                                   class="fas fa-key uk-margin-small-right"></i>Pin Number</button>
                    </div>
               </div>
               <hr>
               <ul class="uk-switcher uk-margin">

                    <!-- Online payment -->
                    <li>
                         <legend class="uk-legend uk-margin-small-bottom">Online Payment</legend>
                         <a class="uk-button uk-button-default" href="https://www.payhere.lk/pay/oc49a7e20">
                              <img src="../../assets/logo-payhere.png" width="100px" alt=""></a>
                    </li>

                    <!-- Bank deposit -->
                    <li>
                         <form action="" method="POST">
                              <fieldset class="uk-fieldset ">

                                   <legend class="uk-legend">Bank Deposit</legend>

                                   <!-- Bank -->
                                   <div class="uk-text-left">
                                        <label class="uk-form-label" for="form-horizontal-text">Bank</label>
                                        <div class="uk-form-controls">
                                             <input class="uk-input" id="form-horizontal-text" type="text"
                                                  placeholder="Bank">
                                        </div>
                                   </div>

                                   <!-- Branch -->
                                   <div class="uk-text-left">
                                        <label class="uk-form-label" for="form-horizontal-text">Branch</label>
                                        <div class="uk-form-controls">
                                             <input class="uk-input" id="form-horizontal-text" type="text"
                                                  placeholder="Branch">
                                        </div>
                                   </div>

                                   <!-- Trans/Ref no -->
                                   <div class="uk-text-left">
                                        <label class="uk-form-label" for="form-horizontal-text">Trans/Referance
                                             Number</label>
                                        <div class="uk-form-controls">
                                             <input class="uk-input" id="form-horizontal-text" type="number"
                                                  placeholder="Trans/Referance Number">
                                        </div>
                                   </div>

                                   <!-- Contact number -->
                                   <div class="uk-text-left">
                                        <label class="uk-form-label" for="form-horizontal-text">Contact Number</label>
                                        <div class="uk-form-controls">
                                             <input class="uk-input" id="form-horizontal-text" type="number"
                                                  placeholder="Contact Number">
                                        </div>
                                   </div>

                                   <!-- Slip -->
                                   <div class="uk-margin" uk-margin>
                                        <label class="uk-form-label" for="form-horizontal-text">Upload Slip</label><br>
                                        <div uk-form-custom="target: true">
                                             <input type="file" accept="image/*">
                                             <input class="uk-input uk-form-width-large" type="text"
                                                  placeholder="Select file" disabled>
                                        </div>
                                   </div>
                                   <button class="uk-button uk-button-primary" type="submit">Submit</button>

                              </fieldset>
                         </form>
                    </li>

                    <!-- Ez cash -->
                    <li>
                         <form action="" method="POST">
                              <fieldset class="uk-fieldset">

                                   <legend class="uk-legend">Ez Cash</legend>

                                   <p><span class="uk-text-primary">Ez Cash Details</span><br><b>EzCash Number: 077 007
                                             1527 </b></p>
                                   <p><span class="uk-text-primary">Contact Details</span><br><b>Head Office:
                                             +94113692688</b><br>
                                        <b>Mobile: +94770071527</b></p>
                                   <!-- Ez Cash Number -->
                                   <div class="uk-text-left">
                                        <label class="uk-form-label" for="form-horizontal-text">Ez Cash Number</label>
                                        <div class="uk-form-controls">
                                             <input class="uk-input" id="form-horizontal-text" type="number"
                                                  placeholder="Ez Cash Number">
                                        </div>
                                   </div>

                                   <!-- Referance Number -->
                                   <div class="uk-text-left">
                                        <label class="uk-form-label" for="form-horizontal-text">Referance Number</label>
                                        <div class="uk-form-controls">
                                             <input class="uk-input" id="form-horizontal-text" type="number"
                                                  placeholder="Referance Number">
                                        </div>
                                   </div>

                                   <!-- Contact number -->
                                   <div class="uk-text-left">
                                        <label class="uk-form-label" for="form-horizontal-text">Contact Number</label>
                                        <div class="uk-form-controls">
                                             <input class="uk-input" id="form-horizontal-text" type="number"
                                                  placeholder="Contact Number">
                                        </div>
                                   </div>

                                   <!-- Slip -->
                                   <div class="uk-margin" uk-margin>
                                        <label class="uk-form-label" for="form-horizontal-text">Upload Slip</label><br>
                                        <div uk-form-custom="target: true">
                                             <input type="file" accept="image/*">
                                             <input class="uk-input uk-form-width-large" type="text"
                                                  placeholder="Select file" disabled>
                                        </div>
                                   </div>
                                   <button class="uk-button uk-button-primary" type="submit">Submit</button>

                              </fieldset>
                         </form>
                    </li>

                    <!-- Pin number -->
                    <li>
                         <form action="" method="POST">
                              <fieldset class="uk-fieldset">

                                   <legend class="uk-legend">Pin Number</legend>

                                   <!-- Ez Cash Number -->
                                   <div class="uk-text-left">
                                        <label class="uk-form-label" for="form-horizontal-text">Pin Number</label>
                                        <div class="uk-form-controls">
                                             <input class="uk-input" id="form-horizontal-text" type="number"
                                                  placeholder="Enter Pin Number">
                                        </div>
                                   </div>
                                   <button class="uk-button uk-button-primary uk-margin-top"
                                        type="submit">Submit</button>
                              </fieldset>
                         </form>
                    </li>

               </ul>

               <div>
                    <a href="/view/login.html" class="uk-button uk-button-default uk-align-left backbtn">Back</a>
               </div>
          </div>
     </div>

     <!-- jQuery -->
     <script src=" https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
          </script>

     <!-- UIkit JS -->
     <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit.min.js"></script>

     <!-- Custom js -->
     <script src="../js/script.js"></script>


</body>

</html>
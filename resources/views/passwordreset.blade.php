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
    <div class="uk-flex uk-flex-center uk-margin-large-top">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m ">
            <h3 class="uk-card-title">Reset password</h3>
            <img src="../assets/password.svg" class="uk-align-center" width="400" alt="">


            <form class="uk-form-stacked uk-text-center" action="/login/{{$uid}}" method="POST">
                <div class="uk-margin">
                    
                    @method('patch')
                    <!-- Strength meter -->

                    <div>
                        <!-- New password -->
                        <label for="form-stacked-text"><i class="fa fa-key"></i> New password</label>
                        <div class="uk-form-controls">
                            <input required class="uk-input uk-form-width-large" id="txtNewPassword" name="newpassword" type="password"
                                placeholder="New password">


                        </div>
                        <progress class='uk-progress uk-width-1-2@m uk-align-center' id="progress" value="0"
                            max="100"></progress>
                        <span class="uk-lable-danger" id="progresslabel"></span>
                    </div>

                    <div class="uk-margin-top">
                        <!-- Repeat password -->
                        <label for="form-stacked-text"><i class="fa fa-key"></i> Repeat password</label>
                        <div class="uk-form-controls">
                            <input required class="uk-input uk-form-width-large" id="txtConfirmPassword" type="password"
                                placeholder="Repeat password" onChange="checkPasswordMatch();">
                        </div>
                    </div>
                    <!-- Password status -->
                    <br>
                    <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                </div>

                <!-- Back button -->
                    <a href="https://sidadiya.lk" class="uk-button uk-button-secondary" type="submit"><i
                            class="fas fa-chevron-circle-left"></i> Back</a>
                            @csrf
                <!-- Submit button -->
                    <button class="uk-button uk-button-default" type="submit" id="submitbtn"><i
                            class="fa fa-check-circle"></i>
                        Submit</button>


            </form>

        </div>
    </div>

    <!-- Popup section -->
    <!-- Forgot password -->
    <div id="forgotpass" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Forgot password ?</h2>
            <p>Don't warry we forget everything sometimes :)</p>
            <form action="" method="POST" class="uk-form-stacked">
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text"><i class="fas fa-envelope"></i>
                        Email</label>
                    <div class="uk-form-controls">
                        <input required class="uk-input" id="form-stacked-text" type="text" placeholder="Email">
                    </div>
                </div>

                <p class="uk-text-right">
                    <a class="uk-button uk-button-default uk-modal-close" type="button">Cancel</a>
                    <button class="uk-button uk-button-primary" type="submit">Submit</button>
                </p>
            </form>
        </div>
    </div>


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

    <script>

        // Password mathcher
        function checkPasswordMatch() {
            var password = $("#txtNewPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();

            if (password != confirmPassword) {
                $("#divCheckPasswordMatch").html("<span class='uk-text-danger'>Passwords do not match!</span>");
                $("#submitbtn").prop('disabled', true);
            } else {
                $("#divCheckPasswordMatch").html("<span class='uk-text-success'>Passwords match.</span>");
                $("#submitbtn").prop('disabled', false);
            }
        }
        $(document).ready(function () {
            $("#txtConfirmPassword").keyup(checkPasswordMatch);
        });

        // password strength checker
        var password = document.getElementById("txtNewPassword");
        password.addEventListener('keyup', function () {

            var pwd = password.value

            // Reset if password length is zero
            if (pwd.length === 0) {
                document.getElementById("progresslabel").innerHTML = "";
                document.getElementById("progress").value = "0";
                return;
            }

            // Check progress
            var prog = [/[$@$!%*#?&]/, /[A-Z]/, /[0-9]/, /[a-z]/]
                .reduce((memo, test) => memo + test.test(pwd), 0);

            // Length must be at least 8 chars
            if (prog > 2 && pwd.length > 7) {
                prog++;
            }

            // Display it
            var progress = "";
            var strength = "";
            switch (prog) {
                case 0:
                case 1:
                case 2:
                    strength = "<span class='uk-text-danger'>Weak</span>";
                    progress = "25";
                    break;
                case 3:
                    strength = "<span class='uk-text-warning'>Medium</span>";
                    progress = "50";
                    break;
                case 4:
                    strength = "<span class='uk-text-success'>Good</span>";
                    progress = "75";
                    break;
                case 5:
                    strength = "<span class='uk-text-success'>Excellent</span>";
                    progress = "100";
                    break;
            }
            document.getElementById("progresslabel").innerHTML = strength;
            document.getElementById("progress").value = progress;

        });


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
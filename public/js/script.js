

// Redirction triggers
$("#eacc").click(function () {
     window.location.href ="reg/";
});
$("#sacc").click(function () {
     window.location.href = '../view/shop/sreg1.html';
});


// Match password system
function checkPass() {
     //Store the password field objects into variables ...
     var password = document.getElementById('pass');
     var confirm = document.getElementById('repass');
     var nextbtn = document.getElementById('next');
     confirm.classList.remove('animated', 'shake');
     //Store the Confirmation Message Object ...
     var message = document.getElementById('confirm-message2');
     //Set the colors we will be using ...
     var good_color = "#32d296";
     var bad_color = "#f0506e";

     // URL Checker
     if (password.value == confirm.value) {//Correct
          confirm.style.borderColor = good_color;
          confirm.style.borderWidth = 2;
          message.style.color = good_color;
          nextbtn.style.visibility = 'visible';
          message.innerHTML = '<span class="uk-text-success"><i class="fas fa-check-circle"></i>Password Matched</span>';
     } else {//Incorrect
          nextbtn.style.visibility = 'hidden';
          confirm.style.borderColor = bad_color;
          message.style.color = bad_color;
          confirm.classList.add('animated', 'shake');
          message.innerHTML = '<span class="uk-text-danger"><i class="fas fa-times-circle"></i>Password Not Matched</span>';
     }
}  
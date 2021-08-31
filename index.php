<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UMESKIA SOFTWARES || FLUTERWAVE STK</title>
    <style>
        body{
  margin:5px;
  font-family:sans-serif;
  background:darkcyan;
}
.form{
  background:#262626;
  margin:100px auto;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  max-width:250px;
  min-height:300px;
  max-height:auto;
  padding:30px 20px;
  border-radius:10px;
  position:relative;
  overflow:hidden;
  box-shadow:0px 0px 35px 1px #333;
}
.top-bar{
  position:absolute;
  border-radius:10px 10px 0px 0px;
  max-width:100%;
  height:60px;
  display:flex;
  justify-content:center;
  align-items:center;
  background:#313131;
  top:0px;
  left:0px;
  right:0px;
  font-weight:bolder;
  color:white;
  user-select:none;
  font-size:23px;
}
input{
  width:85%;
  padding:5px 10px;
  outline:none;
  border:2px solid transparent;
  margin:25px 0px;
  font-size:15px;
  border-radius:2px;
}
button{
  border:2px solid dodgerblue;
  padding:10px 20px;
  text-align:center;
  background:none;
  outline:none;
  user-select:none;
  font-weight:bolder;
  font-size:14px;
  color:dodgerblue;
  border-radius:5px;
  cursor:pointer;
  margin-top:10px;
  transition:all 0.3s;
}
button:hover{
  background:dodgerblue;
  color:white;
}
.form p{
  color:gray;
  position:absolute;
  bottom:13px;
  font-size:11px;
  cursor:pointer;
  text-align:center;
}
.form p:hover{
  color:#fff;
}
.name-label::after{
  color:#333;
  position:absolute;
  content:"Enter your phone number";
  left:13%;
  width:85%;
  top:29%;
  cursor:text;
  font-size:15px;
  transition:all 0.3s;
}
.pass-label::after{
  color:#333;
  position:absolute;
  content:"Enter amount to pay";
  left:13%;
  width:85%;
  top:52%;
  cursor:text;
  font-size:15px;
  transition:all 0.3s;
}
#username:focus + .name-label::after{
  top:21%;
  left:10%;
  color:#ddd;
  cursor:default;
  font-size:14px;
}
#username:valid + .name-label::after{
  color:dodgerblue;
  content:"Phone number";
  cursor:default;
  top:21%;
  left:10%;
  font-size:14px;
}
#password:focus + .pass-label::after{
  top:44%;
  left:10%;
  color:#ddd;
  cursor:default;
  font-size:14px;
}
#password:valid + .pass-label::after{
  color:dodgerblue;
  content:"Amount";
  cursor:default;
  top:44%;
  left:10%;
  font-size:14px;
}

.info{
  max-width:350px;
  border-radius:5px;
  height:50px;
  margin:20px auto;
  background:#38a836;
  position:fixed;
  top:0px;
  left:200%;
  right:0px;
  display:flex;
  justify-content:center;
  user-select:none;
  align-items:center;
  font-weight:bolder;
  color:#ececec;
  font-size:18px;
  transition:all 0.6s;
}
.info a{
  position:absolute;
  right:5px;
  top:0px;
  transform:rotate(-45deg);
  font-size:22px;
  cursor:pointer;
  color:#3333;
}
.info a:hover{
  color:#fff;
}
    </style>
</head>
<body>
    <div class="info">
      PAYMENT COMPLETED
      <a class="close">+</a>
    </div>
    <form method="POST" action="processPayment.php" id="paymentForm">
    <div class="form">
    <input type="hidden" name="payment_options" value=""/>
    <!-- Can be card, account, ussd, qr, mpesa, mobilemoneyghana  (optional) -->
    <input type="hidden" name="description" value="SOFTWARES PRODUCT"/>
    <!-- Replace the value with your transaction description -->
    <input type="hidden" name="logo" value="https://umeskiasoftwares.com/images/umeskia_s.png"/>
    <!-- Replace the value with your logo url (optional) -->
    <input type="hidden" name="title" value="UMESKIA SOFTWARES"/>
    <!-- Replace the value with your transaction title (optional) -->
    <input type="hidden" name="country" value="KE"/> <!-- Replace the value with your transaction country -->
    <input type="hidden" name="currency" value="KES"/> <!-- Replace the value with your transaction currency -->
    <input type="hidden" name="email" value="busa@yahoo.com"/> <!-- Replace the value with your customer email -->
    <input type="hidden" name="firstname" value="ALVIN"/>
    <!-- Replace the value with your customer firstname (optional) -->
    <input type="hidden" name="lastname" value="KIVEU"/>
    <!-- Replace the value with your customer lastname (optional) -->
    <input type="hidden"  value="0768168060"/>
    <!-- Replace the value with your customer phonenumber (optional if email is passes) -->
    <input type="hidden" name="pay_button_text" value="Complete Payment"/>
    <!-- Replace the value with the payment button text you prefer (optional) -->
    <input type="hidden" name="ref" value="MY_NAME_5a22a7f270abc8879"/>
    <!-- Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. -->
    <input type="hidden" name="successurl" value="http://localhost/upay/flutterwave/success.php?status=success">
    <!-- Put your success url here -->
    <input type="hidden" name="failureurl" value="http://localhost/upay/flutterwave/failed.php?status=failed">
    <!-- Put your failure url here -->
      <div class="top-bar">FLUTERWAVE STK PUSH</div>
      <input  name="phonenumber" title="" pattern=".*[^ ].*" autocomplete="off" required type="number" id="username">
      <label for="username" class="name-label"></label>
      <input name="amount"  title="" required type="number" id="password">
      <label for="password" class="pass-label"></label>
      <button type="submit" >MAKE PAYMENT</button>
    </div>
    </form>
  </body>
  <script>

  </script>
</html>
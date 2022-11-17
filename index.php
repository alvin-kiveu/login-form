<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UMESKIA SOFTWARES || FLUTERWAVE STK</title>

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

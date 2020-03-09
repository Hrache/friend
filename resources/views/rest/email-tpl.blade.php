<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Activation</title>
  <style>
  .wrapper {max-height: 512px; min-width: 50%;}
  .button {
    -moz-box-shadow: 0px 0px 37px 9px #f9eca0;
    -webkit-box-shadow: 0px 0px 37px 9px #f9eca0;
    box-shadow: 0px 0px 37px 9px #f9eca0;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f0c911), color-stop(1, #f2ab1e));
    background:-moz-linear-gradient(top, #f0c911 5%, #f2ab1e 100%);
    background:-webkit-linear-gradient(top, #f0c911 5%, #f2ab1e 100%);
    background:-o-linear-gradient(top, #f0c911 5%, #f2ab1e 100%);
    background:-ms-linear-gradient(top, #f0c911 5%, #f2ab1e 100%);
    background:linear-gradient(to bottom, #f0c911 5%, #f2ab1e 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f0c911', endColorstr='#f2ab1e',GradientType=0);
    background-color:#f0c911;
    -webkit-border-radius:9px; -moz-border-radius:9px; border-radius:9px; border:1px solid #e65f44;
    display:inline-block; cursor:pointer; color:#c92200;
    font-family:Arial; font-size:28px; font-weight:bold;
    padding:32px 76px; text-decoration:none; text-shadow:0px 1px 0px #ded17c;
  }
  .button:hover {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f2ab1e), color-stop(1, #f0c911));
    background:-moz-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
    background:-webkit-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
    background:-o-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
    background:-ms-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
    background:linear-gradient(to bottom, #f2ab1e 5%, #f0c911 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f2ab1e', endColorstr='#f0c911',GradientType=0);
    background-color:#f2ab1e;
  }
  .button:active {
    position:relative;
    top:1px;
  }
  .dflex {display: flex;}
  .p-2 {padding: 1em;}
  .m-auto {margin: auto;}
  .b-1 {border: 1px #777 solid; border-radius: 1em;}
  .min-w {min-width: 50%; width: 50%;}
  </style>
</head>
<body>
  <section class="m-auto min-w dflex" class="wrapper">
    <div class="p-2 m-auto b-1 dflex" style="text-align: left; justify-content: start; flex-direction: column;">
      <h2>Account activation email</h2>
      <h4>{{ env('MAIL_FROM_ADDRESS') }}</h4>
      <h3>{{ request()->post('subject') }}</h3>
      <p class="p-2">{{ request()->post('content') }}</p>
      <p class="p-2"><a href="{{ route('email') }}" class="button">Account activation</a></p>
    </div>
  </section>
</body>
</html>
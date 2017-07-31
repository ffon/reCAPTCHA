<!doctype html>
<html>
  1
<head>
<meta charset="utf-8">
<title>Google reCAPTCHA</title>
<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
</head>
 
<body>
<form name="form1" method="post" action="send.php">
  <div>Message:  </div>
  <div>
    <textarea name="msg" cols="50" rows="3" id="msg"></textarea>
  </div>
  <script>
  function makeaction(){
        document.getElementById('btn_submit').disabled = false;  
  }
  </script>
  <div class="g-recaptcha" data-callback="makeaction" data-sitekey="6Ld8ICsUAAAAAAcQdF3S6-VxoGlqU8X8AXL7cTBC"></div>
  <div>
  <br>
    <button type="submit" id="btn_submit" name="btn_submit" disabled>Send Message</button>
  </div>
</form>
</body>
</html>

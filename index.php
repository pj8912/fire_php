<!DOCTYPE html>
<html>

<head>
  <title>Firebase Phone Verification</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link href="main.css" rel="stylesheet">
</head>

<body>
  <form>
    <h1>Firebase Phone verification In PHP</h1>
    <div class="formcontainer">
      <hr />
      <div class="container">
        <label for="uname"><strong>Phone Number</strong></label>
        <input type="text" id="number" placeholder="Enter phone number" name="uname" required>
      </div>
      <div id="recaptcha-container"></div>
      <button type="button" onclick="phoneAuth();">Send Otp</button>

  </form>
  <hr>
  <form>
    <h1>Firebase Phone verification In PHP</h1>
    <div class="formcontainer">
      <hr />
      <div class="container">
        <input type="text" id="verificationCode" placeholder="Enter verification code">

      </div>

      <button type="button" onclick="codeverify();">Verify code</button>

  </form>
  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
  <script>
    const firebaseConfig = {
      apiKey: "AIzaSyDayGk9hhaGdC7XRT0Mz6mZ651pEtmxm58",
      authDomain: "spoz-test.firebaseapp.com",
      projectId: "spoz-test",
      storageBucket: "spoz-test.appspot.com",
      messagingSenderId: "114279890971",
      appId: "1:114279890971:web:0bde75385f3e003fb138be"
    };
    // firebase.initializeApp(firebaseConfig);
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
  </script>
  <script src="firebase.js" type="text/javascript"></script>
</body>

</html>




</body>

</html>
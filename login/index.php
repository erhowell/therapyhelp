<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Login to TherapyHelp</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="parent">
        <button class="top active" id="login-header" onclick="openTab(event, 'login')">
          Log In
        </button>
        <button class="top" id="signup-header" onclick="openTab(event, 'signup')">
          Sign Up
        </button>
      <!--form action="insert.php" method="post"-->
        <div class="tab active" id="login">
          <h1>Log In To Your Account</h1>
          <div class="field">
            <input class="email" type="email" placeholder="Email" onkeyup="this.setAttribute('value', this.value);"/>
          </div>
          <div class="field">
            <input class="pw" type="text" placeholder="Password" onkeyup="this.setAttribute('value', this.value);"/>
          </div>
          <button class="submit" onclick="submitLoginData()">Submit</button>
        </div>
      <!--/form-->
      <!--form action="insert.php" method="post"-->
        <div class="tab" id="signup">
          <h1>Create Your Account</h1>
          <div class="field">
            <input class="fname" type="text" placeholder="First Name" onkeyup="this.setAttribute('value', this.value);"/>
          </div>
          <div class="field">
            <input class="lname" type="text" placeholder="Last Name" onkeyup="this.setAttribute('value', this.value);"/>
          </div>
          <div class="field">
            <input class="email" type="email" placeholder="Email" onkeyup="this.setAttribute('value', this.value);"/>
          </div>
          <div class="field">
            <input class="pw" type="text" placeholder="Password" onkeyup="this.setAttribute('value', this.value);"/>
          </div>
          <div class="field">
            <input class="pw" type="text" placeholder="Retype Password" onkeyup="this.setAttribute('value', this.value);"/>
          </div>
          <div class="radio-section">
            <input type="radio" name="account" class="account-type" value="professional">Professional<br>
            <input type="radio" name="account" class="account-type" value="client">Client<br>
          </div>
          <button class="submit" onclick="submitSignupData()">Submit</button>
        </div>
      <!--/form-->
  </div>
  <script src="script.js"></script>
  </body>

</html>
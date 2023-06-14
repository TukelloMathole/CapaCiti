<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./admin_css/login.css">

</head>

<body>
  <div class="Admin" style="background-color: steelblue; border-radius: 10px;">
    <h1>Sign In</h1>
    <p id="err" style="color:red"></p>
    <label for="">Username</label>
    <p id="valid" style="color: #90EE90"></p>
    <input type="text" id="Uname">
    <label for="">Password</label>
    <input type="password" id="password">
    <input type="button" value="Submit" id="submit">
  </div>
</body>
<script src="./admin_js/admin_script.js"></script>
</html>
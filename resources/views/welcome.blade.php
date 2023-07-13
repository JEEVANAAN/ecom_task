<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
  </head>
  <style>
    form {
  width: 400px;
  margin: 0 auto;
  padding: 55px;
  background-color: #e8e8e8;
  border-radius: 10px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="email"],
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-left: 9px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
  </style>
  <body>
    <h1 style="margin-left:40%; color:#3e8e41;">REGISTRATION</h1>
    <form method="post" action="<?=url('insert')?>">
  <label for="name">User:</label>
  <input type="text" id="name" name="name" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <label for="password">Email:</label>
  <input type="email" id="email" name="email" required>
  <input type="hidden" name="_token" id="" value="<?=csrf_token()?>">

  <input type="submit" value="Submit">
</form>

<h1 style="margin-left:394px; color:#3e8e41;"><?=session('message')?></h1>
  </body>
</html>
</body>
</html>
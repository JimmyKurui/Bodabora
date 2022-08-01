<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
  </head>
  <body style="background-color:rgb(173,216,230, 1);">
    <center>
  <div class="card" style="width:40%;margin-top:100px;">
    <div class="card-header"><h3 class="card-title">Register</h3></div>
  <div class="card-body">
  
  <form  action='register-script.php' method='POST'>
  <div class="mb-3">
    <label for="names" class="form-label">Names</label>
    <input type="text" class="form-control" id="names">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="Password" class="form-control" id="Password">
  </div>

  <div class="mb-3">
    <label for="Password2" class="form-label">Confirm Password</label>
    <input type="Password" class="form-control" id="Password2">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
  </div>
</div>
</center>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
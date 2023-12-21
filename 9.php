<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap
/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery
.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootst
rap.min.js"></script>
</head>
<body>
<div class="container">

<div class="well">Basic Well</div>

<button id="btn1" class="btn btn-primary">save3</button>
<input type="button" class="btn btn-success disabled" id="btn2" name="but2" value="button2">
</div>

<div class="alert alert-info">
    <strong>Success!</strong> Indicates a successful or positive action.
  </div>

  <button type="button" class="btn btn-link">Link</button>

  <div class="btn-group">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-danger">Samsung</button>
    <button type="button" class="btn btn-success">Sony</button>
  </div>

  <div class="btn-group">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>

    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Sony <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Tablet</a></li>
        <li><a href="#">Smartphone</a></li>
      </ul>
    </div>
  </div>

  <button type="button" class="btn btn-danger">Apple <span class="glyphicon glyphicon-trash"></span></button>

  <a href="tanub1.html" target="_blank">News <span class="badge">5</span></a><br>

</body>
</html>
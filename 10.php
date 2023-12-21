<!DOCTYPE html>
<html>
<head>
    <title>tanaya</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap
/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery
.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootst
rap.min.js"></script>
  </head>
  <body>
    <br> <br> <br> <br> <br>
<div class="dropup">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li class="dropdown-header ">langu</li>
    <li class="active"><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li class="divider"><a href="#">JavaScript</a></li>
    <li class="dropdown-header ">student</li>
    <li class="disabled"><a href="#">seema</a></li>
    <li><a href="#">siya</a></li>
  </ul>
</div>

<button data-toggle="collapse" data-target="#demo">Collapsible</button>

<div id="demo" class="collapse">
Lorem ipsum dolor text....
</div>

<div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2">Collapsible panel</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">Panel Body</div>
        <div class="panel-footer">Panel Footer</div>
      </div>

      <div id="collapse2" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item">One</li>
          <li class="list-group-item">Two</li>
          <li class="list-group-item">Three</li>
        </ul>
        <div class="panel-footer">Footer</div>
      </div>
   
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
              Collapsible Group 1</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse in">
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat.</div>
          </div>
        </div>
    </div>
      
    <ul class="list-inline">
        <li><a href="#">Home</a></li>
        <li><a href="#">Menu 1</a></li>
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
      </ul>
      
      <ul class="nav nav-pills">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Submenu 1-1</a></li>
              <li><a href="#">Submenu 1-2</a></li>
              <li><a href="#">Submenu 1-3</a></li>
            </ul>
          </li>
        
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
      </ul>
      
      <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
        <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
        <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
      </ul>

      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <h3>HOME</h3>
          <p>Some content.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>Menu 1</h3>
          <p>Some content in menu 1.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>Menu 2</h3>
          <p>Some content in menu 2.</p>
        </div>
      </div>
      
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            Try 
Navigation Bar With Dropdown
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>

            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
          
          <form class="navbar-form navbar-left" action="/action_page.php">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
      <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
       </form>
      
        </div>
       
      
      
      </nav>
      
    </div>
  </div>
  
</body>
</html>
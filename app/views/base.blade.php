<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/global.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  <title>
  GenericMS
  @section('title')
  @show
  </title>
  @section('head')
  @show
</head>
</head>
<body>
  <div class="container">
    <div class="site-flash row">
      <div class="col-xs-6 site-annoucement bg-primary">Please remember to vote for us every 6 hours!</div>
      <div class="col-xs-6 site-notice">The server will be restarting in an hour.</div>
    </div>
  </div>
  <div class="container header">
    <div class="mschar"></div>
    <div class="logo">GenericMS
      <div class="slogan">some bad slogan here</div>
    </div>
  </div>
  <div class="navbar container" role="navigation">
    <ul class="navbar-nav navbar-links">
      <li @if(Route::getCurrentRoute()->getName() == 'home') class="active" @endif ><a href="{{{ URL::route('home') }}}">Home</a></li>
      <li class="divider"></li>
      <li><a href="#">Community</a></li>
      <li class="divider"></li>
      <li @if(Route::getCurrentRoute()->getName() == 'players') class="active" @endif ><a href="./players.html">Players</a></li>
      <li class="divider"></li>
      <li @if(Route::getCurrentRoute()->getName() == 'vote') class="active" @endif ><a href="./vote.html">Vote</a></li>
      <li class="divider"></li>
      <li @if(Route::getCurrentRoute()->getName() == 'download') class="active" @endif ><a href="./download.html">Download</a></li>
      <li class="divider"></li>
    </ul>
    <ul class="navbar-nav navbar-right">
      <li class="divider"></li>
      <li class="server-status ttip" title="Server: <b>Online</b><br>[ 50 / 100 ]">50 <span class="glyphicon glyphicon-signal text-success"></span></li>
      <li class="divider"></li>
      <li><a href="./login.html">Login / Register</a></li>
    </ul>
  </div>
  <div class="container main-content">
    <div class="row">

      @section('content')
      @show

    </div>
  </div>
  <div id="footer">
    <div class="container">
      <p class="text-muted copyright">&copy; 2014 GenericMS
        <br>All images and other content related to MapleStory are owned by Nexon Corporation
      </p>
    </div>
  </div>
  <script type="text/javascript" src="./js/bootstrap.js"></script>
  <script type="text/javascript" src="./js/global.js"></script>
</body>
</html>

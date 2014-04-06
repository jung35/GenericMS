@extends('base')
@include('ranking')
@include('features')

@section('head')
  <link rel="stylesheet" href="./css/index.css">
@stop

@section('content')
  @section('ranking')
  @show

  <div class="col-xs-6">
    <h3 class="text-center">Notices / blogs</h3>
    <div class="site-blog">
      <div class="row text-center">
        <a href="#"><img src="http://placekitten.com/455/80"></a>
      </div>
      <div class="row">
        <div class="col-xs-2 col-xs-offset-half">
          <span class="label label-primary">blog</span>
          <span class="text-muted">[03.15]</span>
        </div>
        <div class="col-xs-6">
          <a href="./blog.html">100x EXP for the next 5 hours!</a>
        </div>
        <div class="col-xs-3 text-right"><b>300</b> views [ <a>Admin</a> ]</div>
      </div>
      <div class="row">
        <div class="col-xs-2 col-xs-offset-half">
          <span class="label label-primary">blog</span>
          <span class="text-muted">[03.15]</span>
        </div>
        <div class="col-xs-6">
          <a href="./blog.html">100x EXP for the next 5 hours!</a>
        </div>
        <div class="col-xs-3 text-right"><b>300</b> views [ <a>Admin</a> ]</div>
      </div>
      <div class="row">
        <div class="col-xs-2 col-xs-offset-half">
          <span class="label label-primary">blog</span>
          <span class="text-muted">[03.15]</span>
        </div>
        <div class="col-xs-6">
          <a href="./blog.html">100x EXP for the next 5 hours!</a>
        </div>
        <div class="col-xs-3 text-right"><b>300</b> views [ <a>Admin</a> ]</div>
      </div>
      <div class="row">
        <div class="col-xs-2 col-xs-offset-half">
          <span class="label label-success">Notice</span>
          <span class="text-muted">[03.15]</span>
        </div>
        <div class="col-xs-6">
          <a href="./blog.html">100x EXP for the next 5 hours!</a>
        </div>
        <div class="col-xs-3 text-right"><b>0</b> views [ <a href="./user.profile.html">Jung</a> ]</div>
      </div>
    </div>
    <h3 class="text-center">GM Blog</h3>
    <div class="site-blog">
      <div class="row">
        <div class="col-xs-2 col-xs-offset-half">
          <span class="label label-info">Blog</span>
          <span class="text-muted">[03.15]</span>
        </div>
        <div class="col-xs-6">
          <a href="./blog.html">100x EXP for the next 5 hours!</a>
        </div>
        <div class="col-xs-3 text-right"><b>300</b> views [ <a>Admin</a> ]</div>
      </div>
    </div>
  </div>

  @section('features')
  @show
@stop

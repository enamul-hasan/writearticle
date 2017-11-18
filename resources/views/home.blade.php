<!-- <style>
img {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    margin: auto;
    overflow: auto;
}
</style> -->

@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in!!!</p>
                    <br>
                    <p>Navigate To Article section of writing article</p>
                </div>
            </div>
        </div>
    </div>
</div>
 -->

 <!DOCTYPE html>
<html>
<head>
<style>
img {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
    overflow: auto;
}

.container .content {
    position:absolute; left:0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}
</style>
</head>
<body>

<div class="container">
  <img src="img/ccc.png" alt="Notebook" >
  <div class="content">
    <h1>Welcome To WriteArticle.com</h1>
    <p>Here you can write your own <strong>Aricles</strong> and Publish them in public </p>
  </div>
</div>

</body>
</html>



@endsection

@extends('layouts.app')

@section('content')
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
    text-align:center;
    background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}
</style>

<div class="container">
            <img src="{{ asset('img/index_image.jpg') }} " >
            <div class="content">
                <h1>Welcome To WriteArticle.com</h1>
                <p><strong> Here you can write your own Aricles and Publish them in public </strong></p>
            </div>
</div>

@endsection

<!DOCTYPE html>
<html>
<head>
    <title>FaceClone - The Social Network</title>
    <link rel="shortcut icon" type="images/png" href="assets/imgs/logo.png" sizes="16x16">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/admin.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .box{
            background: rgba(255,255,255,1);
            padding: 10px 20px;
            border-radius: 2px;
            box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>
    @include('layouts.header')
    <div class="main">
        <div class="container-fluid">
            @include('layouts.left')
                @yield('center')
            @include('layouts.right')
        </div>
    </div>
    @include('layouts.footer')


<script>
    function like(id){
        var elem = document.getElementById("post_like_count_"+id);
        var count = parseInt(elem.innerHTML);
        elem.innerHTML = count+1;
        highlight(elem);
    }
    function share(id){
        var elem = document.getElementById("post_share_count_"+id);
        var count = parseInt(elem.innerHTML);
        elem.innerHTML = count+1;
        highlight(elem);
    }
    function comment(id){
        var elem = document.getElementById("post_comment_count_"+id);
        var count = parseInt(elem.innerHTML);
        elem.innerHTML = count+1;
        highlight(elem);
    }
    function highlight(elem){
        elem.style.color = "red";
        elem.parentElement.parentElement.style.transform="scale(1.5)";
        setTimeout(function(){
            elem.style.color="";
            elem.parentElement.parentElement.style.transform="scale(1)";
        },300);
    }
</script>
</body>
</html>

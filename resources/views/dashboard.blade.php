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
        <div class="header no-shadow">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo">
                            <h1>FaceClone</h1>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <ul class="header-menu pull-right">
                            <li><a href="#" class="">Requests</a></li>
                            <li><a href="#" class="">Messages</a></li>
                            <li><a href="#" class="">Notifications</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container-fluid">
                <div class="col-sm-3 left-sidebar">
                    <ul>
                        <li><a href="./dashboard.html" class="active">News Feed</a></li>
                        <li><a href="./settings.html" class="active">Settings</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="post col-sm-12" id="new_post">
                        <div class="row post-heading" style="background: #2d9a40;">
                            <div class="col-sm-12">
                                <h4 id="post-header">Create New Post</h4><br/>

                            </div>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <div >
                                <textarea placeholder="Whats up?" maxlength="250"></textarea>
                            </div>
                            <br>
                            <div class="pull-left">
                                <label class="btn btn-success"><input name="image" type="file" style="display: none;"/>Add Image</label>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-primary">POST</button>
                            </div>
                            <br>
                        </div>

                    </div>
                    <div class="post col-sm-12" id="post_1">
                        <div class="row post-heading">
                            <div class="col-sm-12">
                                <a href="profile.html">
                                    <img src="assets/imgs/2.jpg" class="profile-picture pull-left"/>
                                    &nbsp;
                                    <span class="post-user-name">Maninder Kaur</span><br/>
                                    &nbsp;
                                    <small class="post-date text-mute">31th March, 2021 2:49PM</small>
                                </a>
                            </div>
                        </div>
                        <div class="row post-body">
                            <div class="col-sm-12">
This is the post body. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit.
                            </div>
                        </div>
                        <div class="row post-action">
                            <ul class="post-action-menu">
                                <li><a href="javascript:void(0);" class="text-mute" onclick="like(1);">Like</a></li>
                                <li><a href="javascript:void(0);" class="text-mute" onclick="share(1);">Share</a></li>
                                <li><a href="javascript:void(0);" class="text-mute" onclick="comment(1);">Comment</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_like_count_1">2142</span> Likes</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_comment_count_1">2172</span> Comments</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_share_count_1">200</span> Shares</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="post col-sm-12" id="post_2">
                        <div class="row post-heading">
                            <div class="col-sm-12">
                                <a href="profile.html">
                                    <img src="assets/imgs/3.jpg" class="profile-picture pull-left"/>
                                    &nbsp;
                                    <span class="post-user-name">Divyanshu Gupta</span><br/>
                                    &nbsp;
                                    <small class="post-date text-mute">31th March, 2021 2:49PM</small>
                                </a>
                            </div>
                        </div>
                        <div class="row post-body">
                            <div class="col-sm-12">
This is the post body. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit.

This is the post body. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit.

This is the post body. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit.
                            </div>
                        </div>
                        <div class="row post-action">
                            <ul class="post-action-menu">
                                <li><a href="javascript:void(0);" class="text-mute" onclick="like(2);">Like</a></li>
                                <li><a href="javascript:void(0);" class="text-mute" onclick="share(2);">Share</a></li>
                                <li><a href="javascript:void(0);" class="text-mute" onclick="comment(2);">Comment</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_like_count_2">2142</span> Likes</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_comment_count_2">2172</span> Comments</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_share_count_2">200</span> Shares</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="post col-sm-12" id="post_3">
                        <div class="row post-heading">
                            <div class="col-sm-12">
                                <a href="profile.html">
                                    <img src="assets/imgs/5.jpg" class="profile-picture pull-left"/>
                                    &nbsp;
                                    <span class="post-user-name">Sourabh Thakur</span><br/>
                                    &nbsp;
                                    <small class="post-date text-mute">31th March, 2021 2:49PM</small>
                                </a>
                            </div>
                        </div>
                        <div class="row post-body">
                            <div class="col-sm-12">
This is the post body. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit.
                            </div>
                        </div>
                        <div class="row post-action">
                            <ul class="post-action-menu">
                                <li><a href="javascript:void(0);" class="text-mute" onclick="like(3);">Like</a></li>
                                <li><a href="javascript:void(0);" class="text-mute" onclick="share(3);">Share</a></li>
                                <li><a href="javascript:void(0);" class="text-mute" onclick="comment(3);">Comment</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_like_count_3">2142</span> Likes</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_comment_count_3">2172</span> Comments</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_share_count_3">200</span> Shares</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="post col-sm-12" id="post_4">
                        <div class="row post-heading">
                            <div class="col-sm-12">
                                <a href="profile.html">
                                    <img src="assets/imgs/4.jpg" class="profile-picture pull-left"/>
                                    &nbsp;
                                    <span class="post-user-name">Akshima</span><br/>
                                    &nbsp;
                                    <small class="post-date text-mute">31th March, 2021 2:49PM</small>
                                </a>
                            </div>
                        </div>
                        <div class="row post-body">
                            <div class="col-sm-12">
This is the post body. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit.
                            </div>
                        </div>
                        <div class="row post-action">
                            <ul class="post-action-menu">
                                <li><a href="javascript:void(0);" class="text-mute" onclick="like(4);">Like</a></li>
                                <li><a href="javascript:void(0);" class="text-mute" onclick="share(4);">Share</a></li>
                                <li><a href="javascript:void(0);" class="text-mute" onclick="comment(4);">Comment</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_like_count_4">2142</span> Likes</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_comment_count_4">2172</span> Comments</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_share_count_4">200</span> Shares</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="post col-sm-12" id="post_5">
                        <div class="row post-heading">
                            <div class="col-sm-12">
                                <a href="profile.html">
                                    <img src="assets/imgs/1.jpg" class="profile-picture pull-left"/>
                                    &nbsp;
                                    <span class="post-user-name">Shubham Kumar</span><br/>
                                    &nbsp;
                                    <small class="post-date text-mute">31th March, 2021 2:49PM</small>
                                </a>
                            </div>
                        </div>
                        <div class="row post-body">
                            <div class="col-sm-12">
This is the post body. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit.
                            </div>
                        </div>
                        <div class="row post-action">
                            <ul class="post-action-menu">
                                <li><a href="javascript:void(0);" class="text-mute" onclick="like(5);">Like</a></li>
                                <li><a href="javascript:void(0);" class="text-mute" onclick="share(5);">Share</a></li>
                                <li><a href="javascript:void(0);" class="text-mute" onclick="comment(5);">Comment</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_like_count_5">2142</span> Likes</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_comment_count_5">2172</span> Comments</a></li>
                                <li class="pull-right"><a href="#" class="text-mute"><span id="post_share_count_5">200</span> Shares</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 chat-users">
                    <div class="row">
                        <h3>Chat</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 chat-user online">
                            <a href="#">
                                <img src="assets/imgs/1.jpg" class="pull-left"/>
                                &nbsp;
                                Shubham Kumar
                            </a>
                        </div>
                        <div class="col-sm-12 chat-user online">
                            <a href="#">
                                <img src="assets/imgs/2.jpg" class="pull-left"/>
                                &nbsp;
                                Maninder Kaur
                            </a>
                        </div>
                        <div class="col-sm-12 chat-user online">
                            <a href="#">
                                <img src="assets/imgs/3.jpg" class="pull-left"/>
                                &nbsp;
                                Divyanshu Gupta
                            </a>
                        </div>
                        <div class="col-sm-12 chat-user">
                            <a href="#">
                                <img src="assets/imgs/4.jpg" class="pull-left"/>
                                &nbsp;
                                Akshima
                            </a>
                        </div>
                        <div class="col-sm-12 chat-user online">
                            <a href="#">
                                <img src="assets/imgs/5.jpg" class="pull-left"/>
                                &nbsp;
                                Sourabh Thakur
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer no-shadow">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        &copy; FaceClone 2021.
                    </div>
                </div>
            </div>
        </div>
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

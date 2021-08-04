@extends('layouts.main')

@section('center')
    <div class="col-sm-6">
        <div class="post col-sm-12" id="new_post">
            <div class="row post-heading" style="background: #2d9a40;">
                <div class="col-sm-12">
                    <h4 id="post-header">Create New Post</h4><br/>

                </div>
            </div>
            <div class="row" style="padding: 10px;">
                <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <textarea name="status" placeholder="Whats up?" maxlength="250"></textarea>

                        @if($errors->has('status'))
                            <div class="alert alert-danger">
                                {{$errors->first('status')}}
                            </div>
                        @endif
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="pull-left">
                            <label class="btn btn-success"><input name="image" type="file" style="display: none;"/>Add Image</label>
                            @if($errors->has('image'))
                                <div class="alert alert-danger">
                                    {{$errors->first('image')}}
                                </div>
                            @endif
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-primary">POST</button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>

        </div>

        @foreach($posts as $post)
            <div class="post col-sm-12" id="post_1">
                <div class="row post-heading">
                    <div class="col-sm-12">
                        <a href="profile.html">
                            <img src="assets/imgs/sabrina.jpg" class="profile-picture pull-left"/>
                            &nbsp;
                            <span class="post-user-name">{{$post['user']->fname.' '.$post['user']->lname}}</span><br/>
                            &nbsp;
                            <small class="post-date text-mute">{{$post['created_at']}}</small>
                        </a>
                    </div>
                </div>
                <div class="row post-body">
                    <div class="col-sm-12">
                        {{$post['status']}}
                    </div>
                    <div class="col-sm-12">
                        <img src="{{$post['photo']}}" height="300" width="300">
                    </div>
                </div>
                <div class="row post-action">
                    <ul class="post-action-menu">
                        <li><a href="javascript:void(0);" class="text-mute" onclick="like(1);">Like</a></li>
                        <li><a href="javascript:void(0);" class="text-mute" onclick="share(1);">Share</a></li>
                        <li><a href="javascript:void(0);" class="text-mute" onclick="comment(1);">Comment</a></li>
                        <li class="pull-right"><a href="#" class="text-mute"><span id="post_share_count_1">{{$post['shares']}}</span> Shares</a></li>
                        <li class="pull-right"><a href="#" class="text-mute"><span id="post_comment_count_1">{{$post['comments']}}</span> Comments</a></li>
                        <li class="pull-right"><a href="#" class="text-mute"><span id="post_like_count_1">{{$post['likes']}}</span> Likes</a></li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection

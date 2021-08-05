@php
    \App\Models\User::where('id', auth()->user()->id)->update([
        'last_login'=> now()
    ]);
@endphp

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo">
                    <h1>FaceDiary</h1>
                </div>
            </div>
            <div class="col-sm-8 pull-right">
                <div class="inline-form pull-right">
                  <ul class="header-menu pull-right">
                    <img src="{{asset(auth()->user()->image?? '/images/no_user.png')}}" width="40px" height="40px"/>
                    &nbsp;
                    {{auth()->user()->fname}} {{auth()->user()->lname}}
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>

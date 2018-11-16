@php
    $user = Auth::user();
@endphp
<ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
        <div class="background">
        <img src="images/office.jpg">
        </div>
        <a href="#user"><img class="circle" src="images/user.png">
            <span class="black-text">{{$user->name}}</span>
        </a>
        <a href="#name"><span class="white-text name"></span></a>
        <a href="#email">
            <span class="white-text email">
                {{$user->email}}
            </span>
        </a>
    </div></li>
    <li>
        <a href="">
            <i class="fa fa-users"></i>
            Users
        </a>
    </li>
</ul>
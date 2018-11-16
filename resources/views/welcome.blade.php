
@extends('layouts.master')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
@endsection
@section('content')
<div class="parallax-container">
    <div class="parallax">
        <img src="{{asset('images/house1.jpg')}}">
    </div>
</div>
<div class="section white">
    <div class="row container">
        <h2 class="header">Welcome!</h2>
        <p class="grey-text text-darken-3 lighten-3">
            Some text can be here
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem perferendis illo rerum enim commodi inventore asperiores, excepturi id, suscipit debitis iure ullam ducimus deserunt optio sequi. Minus alias blanditiis numquam?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque unde commodi porro, amet voluptatem autem provident! Veritatis corrupti, quae deserunt, voluptate fuga blanditiis ipsum eos est consequuntur laborum, deleniti voluptatibus.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis itaque neque placeat aliquam dicta, fugiat recusandae enim. Iste, perferendis assumenda cumque expedita corporis dolore praesentium nihil, enim illum officia harum.
        </p>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax">
        <img src="{{asset('images/house3.jpg')}}">
    </div>
</div>    
@endsection
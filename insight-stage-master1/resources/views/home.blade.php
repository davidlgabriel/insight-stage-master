@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="post-slider">
        <h1 class="slider-title"><a href="">Trending Posts</a></h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>
        <div class="post-wrapper">
            <div class="post">
                <img src="{{ asset('img/23.jpeg') }}" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="">This is the Title of the post</a></h4>
                    <p>In this description we talk about a lot of finance and economy things,
                    that no one let use speak about in the newspaper</p>
                    <i class="far fa-user-circle">Nuno Dias </i>
                    &nbsp;
                    <i class="far fa-calendar-alt"> July 15, 2020</i>
                </div>
            </div>
            <div class="post">
                <img src="{{ asset('img/23.jpeg') }}" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="">This is the Title of the post</a></h4>
                    <p>In this description we talk about a lot of finance and economy things,
                    that no one let use speak about in the newspaper</p>
                    <i class="far fa-user-circle">John Afonso </i>
                    &nbsp;
                    <i class="far fa-calendar-alt"> July 15, 2020</i>
                </div>
            </div>
            <div class="post">
                <img src="{{ asset('img/23.jpeg') }}" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="">This is the Title of the post</a></h4>
                    <p>In this description we talk about a lot of finance and economy things,
                    that no one let use speak about in the newspaper</p>
                    <i class="far fa-user-circle">Ricardo Salgado </i>
                    &nbsp;
                    <i class="far fa-calendar-alt"> July 15, 2020</i>
                </div>
            </div>
            <div class="post">
                <img src="{{ asset('img/23.jpeg') }}" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="">This is the Title of the post</a></h4>
                    <p>In this description we talk about a lot of finance and economy things,
                    that no one let use speak about in the newspaper</p>
                    <i class="far fa-user-circle">Manuel Moura Guedes </i>
                    &nbsp;
                    <i class="far fa-calendar-alt"> July 15, 2020</i>
                </div>
            </div>
            <div class="post">
                <img src="{{ asset('img/23.jpeg') }}" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="">This is the Title of the post</a></h4>
                    <p>In this description we talk about a lot of finance and economy things,
                    that no one let use speak about in the newspaper/p>
                    <i class="far fa-user-circle">Cavaco Silva </i>
                    &nbsp;
                    <i class="far fa-calendar-alt"> July 15, 2020</i>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

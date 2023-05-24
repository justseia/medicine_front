@extends('layouts.app')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Новости</h2>
                <ul>
                    <li>
                        <a href="{{ route('home.index') }}"> Главная </a>
                    </li>
                    <li class="active">Новости</li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('assets/images/page-shape-1.png') }}" class="shape page-shape-1" alt="Изображение"/>
        <img src="{{ asset('assets/images/page-shape-2.png') }}" class="shape page-shape-2" alt="Изображение"/>
    </div>
    <div class="blog-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Записи в новости</span>
                <h2>Последние статьи из нашего блога</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($news as $news_item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog wow fadeInUp delay-0-2s">
                            <a href="{{ route('news.show', $news_item) }}">
                                <img src="{{ $news_item->image }}" alt="img"/>
                            </a>
                            <div class="blog-content">
                                <ul>
                                    <li>
                                        <i class="ri-calendar-line"></i>
                                        {{ $news_item->created_at->isoFormat('LL') }}
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{ route('news.show', $news_item) }}">{{ $news_item->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

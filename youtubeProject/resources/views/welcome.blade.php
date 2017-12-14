@extends('layouts.app')
@section('content')
    @include('partials._header')
    @include('partials._menu')
    @include('partials._banner')

<!-- Wrapper -->
<section id="wrapper">

    <!-- One -->
        <section id="one" class="wrapper spotlight style1">
            <div class="inner">
                <a href="/#latest-videos" class="image"><img src="{{$infoTable->section_one_image}}" alt="Videos" /></a>
                <div class="content">
                    <h2 class="major">{{$infoTable->section_one_title}}</h2>
                    <p>{{$infoTable->section_one_description}}</p>
                    <a href="{{$infoTable->section_one_link}}" class="special">{{$infoTable->section_one_link_title}}</a>
                </div>
            </div>
        </section>

    <!-- Two -->
        <section id="two" class="wrapper alt spotlight style2">
            <div class="inner">
                <a href="#" class="image"><img src="{{$infoTable->section_two_image}}" alt="Github" /></a>
                <div class="content">
                    <h2 class="major">{{$infoTable->section_two_title}}</h2>
                    <p>{{$infoTable->section_two_description}}</p>
                    <a href="{{$infoTable->section_two_link}}" class="special">{{$infoTable->section_two_link_title}}</a>
                </div>
            </div>
        </section>

    <!-- Three -->
        <section id="three" class="wrapper spotlight style3">
            <div class="inner">
                <a href="#" class="image"><img src="{{$infoTable->section_three_image}}" alt="Work Station" /></a>
                <div class="content">
                    <h2 class="major">{{$infoTable->section_three_title}}</h2>
                    <p>{{$infoTable->section_three_description}}</p>
                    <a href="{{$infoTable->section_three_link}}"class="special">{{$infoTable->section_three_link_title}}</a>
                </div>
            </div>
        </section>

    <!-- Four -->
        <section id="four" class="wrapper alt style1">
            <div class="inner">
                <h2 class="major">{{$infoTable->section_four_title}}</h2>
                <p>{{$infoTable->section_four_description}}</p>
                <section class="features">
                    <article>
                        <a href="#" class="image"><img src="https://unsplash.it/600/350.jpg" alt="" /></a>
                        <h3 class="major">Sed feugiat lorem</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="https://unsplash.it/600/350.jpg" alt="" /></a>
                        <h3 class="major">Nisl placerat</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="https://unsplash.it/600/350.jpg" alt="" /></a>
                        <h3 class="major">Ante fermentum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="https://unsplash.it/600/350.jpg" alt="" /></a>
                        <h3 class="major">Fusce consequat</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
                        <a href="#" class="special">Learn more</a>
                    </article>
                </section>
                <ul class="actions">
                    <li><a href="#" class="button">Browse All</a></li>
                </ul>
            </div>
        </section>
@endsection
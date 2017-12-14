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
                <a href="/#latest-videos" class="image"><img src="/assets/images/video-thumb.png" alt="Videos" /></a>
                <div class="content">
                    <h2 class="major">videos</h2>
                    <p>Check out the YouTube channel to see the latest video releases  and make sure you  like, comment, and subscribe!</p>
                    <a href="/#latest-videos" class="special">see latest videos</a>
                </div>
            </div>
        </section>

    <!-- Two -->
        <section id="two" class="wrapper alt spotlight style2">
            <div class="inner">
                <a href="#" class="image"><img src="/assets/images/github.png" alt="Github" /></a>
                <div class="content">
                    <h2 class="major">behind the code</h2>
                    <p>See all the code at the community Github account.  Feel free to take a pull, and make some changes you think would be cool.</p>
                    <a href="https://github.com/webdevprofesh" class="special">Learn more</a>
                </div>
            </div>
        </section>

    <!-- Three -->
        <section id="three" class="wrapper spotlight style3">
            <div class="inner">
                <a href="#" class="image"><img src="/assets/images/work-station.png" alt="Work Station" /></a>
                <div class="content">
                    <h2 class="major">behind the scenes</h2>
                    <p>Check out my set up and the processes involved in creating a YouTube channel.</p>
                    <a href="#" class="special">coming soon</a>
                </div>
            </div>
        </section>

    <!-- Four -->
        <section id="four" class="wrapper alt style1">
            <div class="inner">
                <h2 class="major">latest videos</h2>
                <p>Check out the latest Web Dev Profesh videos.</p>
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
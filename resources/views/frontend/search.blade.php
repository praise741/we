@extends('frontend.layout.layout')
@section('content')
<section class="section section--first section--bg" data-bg="{{ asset('storage/main/img/section/section.jpg') }}">

</section>

<div class="catalog">
    <div class="container">
        <div class="row">
            <!-- card -->
            @foreach ($results as $result )
            <div class="col-6 col-sm-12 col-lg-6">
                <div class="card card--list">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="card__cover">
                                <img src="{{ asset('storage/' . $result->cover) }}" alt="">
                                <a href="/details/{{ $result->id }}" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-8">
                            <div class="card__content">
                                <h3 class="card__title"><a href="#">{{ $result->title }}</a></h3>
                                <span class="card__category">
                                    <a href="/genre/{{ $result->genre }}">{{ $result->genre }}</a>

                                </span>


                                <div class="card__description">
                                   <p>{{ $result->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <!-- paginator -->
            <div class="col-12">
                <ul class="paginator paginator--list">
                    <li class="paginator__item paginator__item--prev">
                        <a href="#"><i class="icon ion-ios-arrow-back"></i></a>
                    </li>
                    <li class="paginator__item--active"><a href="#">1</a></li>
                    <li class="paginator__item paginator__item"><a href="#">2</a></li>
                    <li class="paginator__item"><a href="#">3</a></li>
                    <li class="paginator__item"><a href="#">4</a></li>
                    <li class="paginator__item paginator__item--next">
                        <a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
                    </li>
                </ul>
            </div>
            <!-- end paginator -->
        </div>
    </div>
</div>
@endsection

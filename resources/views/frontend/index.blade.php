@extends('frontend.layout.layout')
@section('content')


	<!-- home -->
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg2.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg3.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div>
		</div>
		<!-- end home bg -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
                        @foreach ($movies as $movie )


						<div class="item">
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
									<img style="height: 200px" src="{{ asset('storage/'.$movie->cover) }}" alt="">
									<a href="/details/{{ $movie->id }}" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">{{ $movie->title }}</a></h3>
									<span class="card__category">

										<a href="#">{{ $movie -> genre }}</a>
									</span>

								</div>
							</div>
							<!-- end card -->
						</div>
                        @endforeach

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->

@endsection

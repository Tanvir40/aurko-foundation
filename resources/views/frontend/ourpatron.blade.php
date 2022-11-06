	@include('frontend.partial.header')

			<main class="main">
				<!-- <section class="promo-primary">
					<!--<picture>
						<source srcset="{{asset('frontend/img/story-dtl-bnr-min.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/img/story-dtl-bnr-min.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title"></span>
										<h1 class="promo-primary__title"><span>Our</span> <span>Patron</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				stories start-->
				<section class="section stories">
					<div class="container">
						<div class="row offset-70">

							<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
								<div class="stories-item">
									<div class="row align-items-center flex-column-reverse flex-lg-row">
										<div class="col-lg-6 col-xl-6">
											<div class="heading heading--primary">
												<h2 class="heading__title"><span>About </span> <span>Us</span></h2>
											</div>
											<p>{{$about->first()->about}}
</p><!--<a class="button stories-item__button button--primary" href="storie-details.php">Read Story</a>-->
										</div>
										<div class="col-lg-6 col-xl-5 offset-xl-1">
											<div class="img-box"><img class="img--layout" src="{{asset('frontend/img/storie_2-layout.png')}}" alt="img"/>
												<div class="img-box__img"></div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>
				<!-- stories end-->
			</main>
			<!-- footer start-->
			@include('frontend.partial.footer')

@extends('layouts.app')

@section('header_styles')
    <link href="{{ elixir('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ elixir('css/filter.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="Slides">
	    <div class="Slides__slide">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12 col-xs-12">
	                    <div class="Slide__quotes">
	                        <div id="quotes" class="owl-carousel owl-theme">
	                            @forelse( $quotes as $quote )
		                            <?php $paragraphs =  explode('.', $quote->title); ?>
		                            <div class="item">
		                            	@if( count($paragraphs) == 1 )
				                            <p class="Slide__quote">
				                                {{ $quote->title }}.
				                            </p>
				                        @elseif( count($paragraphs) > 1 )
			                                <?php for($i = 0; $i < count($paragraphs) - 1; $i++ ) { ?>
			                                    <p class="Slide__quote">
			                                        {{ $paragraphs[$i] }}.
			                                    </p>
			                                <?php } ?>
		                            	@endif
		                            </div>
	                            @empty
	                            	<div class="item">
			                            <p class="Slide__quote">
			                                <a href="/dashboard">Go to Dashboard</a> to manage the quotes.
			                            </p>
		                            </div>
	                            @endforelse
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="Services">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <h3 class="SectionTitle Services__title">Services</h3>
	            </div>
	            <div class="col-md-3 col-sm-6 col-xs-12">
	                <figure class="Services__service">
	                    <figcaption>
	                        <img src="/images/icon-coffee.png" alt="Coffee" title="Coffee" class="img-responsive" />
	                        <h4 class="Services__service--title">Coffee</h4>
	                        <p class="Services__service--description">
	                            Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.
	                        </p>
	                    </figcaption>
	                </figure>
	            </div>

	            <div class="col-md-3 col-sm-6 col-xs-12">
	                <figure class="Services__service">
	                    <figcaption>
	                        <img src="/images/icon-instant.png" alt="Instant" title="Instant" class="img-responsive" />
	                        <h4 class="Services__service--title">Instant</h4>
	                        <p class="Services__service--description">
	                            Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.
	                        </p>
	                    </figcaption>
	                </figure>
	            </div>

	            <div class="col-md-3 col-sm-6 col-xs-12">
	                <figure class="Services__service">
	                    <figcaption>
	                        <img src="/images/icon-serious.png" alt="Serious" title="Serious" class="img-responsive" />
	                        <h4 class="Services__service--title">Serious</h4>
	                        <p class="Services__service--description">
	                            Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.
	                        </p>
	                    </figcaption>
	                </figure>
	            </div>

	            <div class="col-md-3 col-sm-6 col-xs-12">
	                <figure class="Services__service">
	                    <figcaption>
	                        <img src="/images/icon-frame.png" alt="Frame" title="Frame" class="img-responsive" />
	                        <h4 class="Services__service--title">Frame</h4>
	                        <p class="Services__service--description">
	                            Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.
	                        </p>
	                    </figcaption>
	                </figure>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="Portfolio">
	    <div class="container">
	        <div class="row">
	            <div class="cd-main-content">
	                <div class="Portfolio__header">
	                    <div class="col-md-6 col-xs-12">
	                        <h3 class="SectionTitle Portfolio__title">Portfolio</h3>
	                    </div>
	                    <div class="col-md-6 col-xs-12">
	                        <div class="cd-tab-filter-wrapper">
	                            <div class="Portfolio__filters cd-tab-filter">
	                                <ul class="cd-filters">
	                                    <li class="placeholder"> 
	                                        <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
	                                    </li> 
	                                    <li class="filter">
	                                        <a class="selected" href="#0" data-type="all">All</a>
	                                    </li>
	                                    <li class="filter" data-filter=".color-1">
	                                        <a href="#0" data-type="color-1">Panoramas</a>
	                                    </li>
	                                    <li class="filter" data-filter=".color-2">
	                                        <a href="#0" data-type="color-2">Portraits</a>
	                                    </li>
	                                    <li class="filter" data-filter=".color-3">
	                                        <a href="#0" data-type="color-3">Macro</a>
	                                    </li>
	                                    <li class="filter" data-filter=".color-4">
	                                        <a href="#0" data-type="color-4">Journal</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-12">
	                    <section class="cd-gallery">
	                        <ul>
	                            <li class="mix color-1">
	                                <a href="#">
	                                    <img src="/images/image_01.jpg" alt="Image 1">
	                                </a>
	                            </li>
	                            <li class="mix color-2">
	                                <a href="#">
	                                   <img src="/images/image_02.jpg" alt="Image 1">
	                                </a>
	                            </li>
	                            <li class="mix color-3">
	                                <a href="#">
	                                    <img src="/images/image_03.jpg" alt="Image 1">
	                                </a>
	                            </li>
	                            <li class="mix color-1">
	                                <a href="#">
	                                    <img src="/images/image_04.jpg" alt="Image 1">
	                                </a>
	                            </li>
	                            <li class="mix color-4">
	                                <a href="#">
	                                    <img src="/images/image_05.jpg" alt="Image 1">
	                                </a>
	                            </li>
	                            <li class="mix color-2">
	                                <a href="#">
	                                    <img src="/images/image_06.jpg" alt="Image 1">
	                                </a>
	                            </li>
	                            <li class="mix color-2">
	                                <a href="#">
	                                    <img src="/images/image_07.jpg" alt="Image 1">
	                                </a>
	                            </li>
	                            <li class="mix color-1">
	                                <a href="#">
	                                    <img src="/images/image_08.jpg" alt="Image 1">
	                                </a>
	                            </li>

	                            <li class="gap"></li>
	                            <li class="gap"></li>
	                            <li class="gap"></li>
	                        </ul>
	                        <div class="cd-fail-message">No results found</div>
	                    </section> <!-- cd-gallery -->
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="DefaultSection">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-6">
	                <h3 class="SectionTitle DefaultSection__title">Just default section</h3>
	                <p>
	                    Bear claw marzipan bear claw applicake I love muffin. Lemon drops gummi bears pastry gummi bears sesame snaps I love unerdwear.com. Soufflé cotton candy dessert candy ice cream wafer gummies cheesecake brownie.
	                </p>
	                <p>
	                    Muffin chupa chups jelly beans sweet pie applicake. Croissant chocolate cake I love pudding. Ice cream I love powder pudding apple pie marshmallow. Cupcake marzipan oat cake bonbon I love candy canes toffee.
	                </p>
	                <p class="DefaultSection__action">
	                    <a href="#" class="button button--white">Visit me</a>
	                </p>
	            </div>

	            <div class="col-md-6">
	                <div class="Video">
	                    <iframe src="https://player.vimeo.com/video/124208594" width="563" height="313" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection

@section('footer_scripts')
    <script src="{{ elixir('js/carousel.js') }}"></script>
    <script src="{{ elixir('js/filter.js') }}"></script>
@endsection
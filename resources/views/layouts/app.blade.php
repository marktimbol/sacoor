<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BLUEASY</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="logo">blu<span>e</span>asy</h1>
                    </div>
                    <div class="col-md-6">
                        <nav>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="Slides">
            <div class="Slides__slide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="Slide__quote">
                                &ldquo;I'm looking for the unexpected. I'm looking for the things I've never seen before.&rdquo;
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="Services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="Services__title">Services</h3>
                    </div>
                    <div class="col-md-3">
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

                    <div class="col-md-3">
                        <figure class="Services__service">
                            <figcaption>
                                <img src="/images/icon-coffee.png" alt="Coffee" title="Coffee" class="img-responsive" />
                                <h4 class="Services__service--title">Instant</h4>
                                <p class="Services__service--description">
                                    Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-3">
                        <figure class="Services__service">
                            <figcaption>
                                <img src="/images/icon-coffee.png" alt="Coffee" title="Coffee" class="img-responsive" />
                                <h4 class="Services__service--title">Serious</h4>
                                <p class="Services__service--description">
                                    Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-3">
                        <figure class="Services__service">
                            <figcaption>
                                <img src="/images/icon-coffee.png" alt="Coffee" title="Coffee" class="img-responsive" />
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
                    <div class="col-md-12">
                        <main class="cd-main-content">
                            <div class="cd-tab-filter-wrapper">
                                <div class="cd-tab-filter">
                                    <ul class="cd-filters">
                                        <li class="placeholder"> 
                                            <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                                        </li> 
                                        <li class="filter">
                                            <a class="selected" href="#0" data-type="all">All</a>
                                        </li>
                                        <li class="filter" data-filter=".color-1">
                                            <a href="#0" data-type="color-1">Color 1</a>
                                        </li>
                                        <li class="filter" data-filter=".color-2">
                                            <a href="#0" data-type="color-2">Color 2</a>
                                        </li>
                                    </ul> <!-- cd-filters -->
                                </div> <!-- cd-tab-filter -->
                            </div> <!-- cd-tab-filter-wrapper -->

                            <section class="cd-gallery">
                                <ul>
                                    <li class="mix color-1 check1 radio2 option3">
                                        <img src="http://placehold.it/270x270" alt="Image 1">
                                    </li>
                                    <li class="mix color-2 check2 radio2 option2">
                                        <img src="http://placehold.it/270x270" alt="Image 1">
                                    </li>
                                    <li class="mix color-1 check3 radio3 option1">
                                        <img src="http://placehold.it/270x270" alt="Image 1">
                                    </li>
                                    <li class="mix color-1 check3 radio2 option4">
                                        <img src="http://placehold.it/270x270" alt="Image 1">
                                    </li>
                                    <li class="mix color-1 check1 radio3 option2">
                                        <img src="http://placehold.it/270x270" alt="Image 1">
                                    </li>
                                    <li class="mix color-2 check2 radio3 option3">
                                        <img src="http://placehold.it/270x270" alt="Image 1">
                                    </li>
                                    <li class="mix color-2 check2 radio2 option1">
                                        <img src="http://placehold.it/270x270" alt="Image 1">
                                    </li>
                                    <li class="mix color-1 check1 radio3 option4">
                                        <img src="http://placehold.it/270x270" alt="Image 1">
                                    </li>

                                    <li class="gap"></li>
                                    <li class="gap"></li>
                                    <li class="gap"></li>
                                </ul>
                                <div class="cd-fail-message">No results found</div>
                            </section> <!-- cd-gallery -->
                        </main>
                    </div>
                </div>
            </div>
        </div>

        <div class="Portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="Portfolio__title">Portfolio</h3>
                    </div>

                    <div class="col-md-6">
                        <div class="Portfolio__filters">
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">Panoramas</a></li>
                                <li><a href="#">Portraits</a></li>
                                <li><a href="#">Macro</a></li>
                                <li><a href="#">Journal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach( range(1,8) as $index )
                    <div class="col-md-3 Portfolio__item">
                        <div class="Portfolio__image">
                            <img src="http://placehold.it/270x270" alt="Portfolio title" title="Portfolio title" class="img-responsive" />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="Default">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Just default section</h3>
                        <p>
                            Bear claw marzipan bear claw applicake I love muffin. Lemon drops gummi bears pastry gummi bears sesame snaps I love unerdwear.com. Soufflé cotton candy dessert candy ice cream wafer gummies cheesecake brownie.
                        </p>
                        <p>
                            Muffin chupa chups jelly beans sweet pie applicake. Croissant chocolate cake I love pudding. Ice cream I love powder pudding apple pie marshmallow. Cupcake marzipan oat cake bonbon I love candy canes toffee.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <img src="http://placehold.it/563x313" alt="Title" title="Title" class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Twitter</h3>
                        <p>
                            Unerdwear cookie liquorice. Cake donut cupcake lollipop soufflé candy. Chocolate oat cake @cheesecake tootsie roll.
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        @yield('content')

        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>

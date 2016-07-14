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
                            <div class="Slide__quotes">
                                <p class="Slide__quote">
                                    I'm looking for the unexpected.
                                </p>
                                <p class="Slide__quote">
                                    I'm looking for the things I've never seen before.
                                </p>
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
                                <img src="/images/icon-instant.png" alt="Instant" title="Instant" class="img-responsive" />
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
                                <img src="/images/icon-serious.png" alt="Serious" title="Serious" class="img-responsive" />
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
                            <div class="col-md-6">
                                <h3 class="Portfolio__title">Portfolio</h3>
                            </div>
                            <div class="col-md-6">
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
                        <h3 class="DefaultSection__title">Just default section</h3>
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
                        <iframe src="https://player.vimeo.com/video/124208594" width="563" height="313" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="Footer__title">Twitter</h3>
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

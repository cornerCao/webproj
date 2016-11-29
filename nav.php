<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/conference.php">COMP3421</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?if($active=='conference')echo "class='active'";?>><a href="conference.php">Home</a></li>
				<li <?if($active=='search')echo "class='active'";?>><a href="search.php">Search</a></li>
                <li <?if($active=='presentation')echo "class='active'";?>><a href="./presentation.php">Presentations</a></li>
                <li <?if($active=='speakers')echo "class='active'";?>><a href="speakers.php">Speakers<span class="sr-only">(current)</span></a></li>
                <li <?if($active=='attractions')echo "class='active'";?>><a href="./attractions.html">Attractions</a></li>
                <li <?if($active=='route')echo "class='active'";?>><a href="./RouteFromHKAirport.php">Route</a></li>
                <li <?if($active=='abouts')echo "class='active'";?>><a href="#">About</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

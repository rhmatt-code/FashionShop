<nav class="uk-uk-navbar-transparent uk-background-secondary uk-visible@s" uk-navbar="mode: click" style="background-color :black;">
    {{-- Navbar Kiri --}}
    <div class="uk-navbar-left">
        <div class="uk-navbar-item ">
        <a class="uk-navbar-item uk-logo" style="color: white" href="home">Fashion<strong>Shop.</strong></a>
        </div>
        <div class="uk-navbar-item">
            <form class="uk-search uk-search-navbar uk-background-priamry">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="search" placeholder="Search">
            </form>
        </div>
    </div>
    {{-- Navbar Kanan --}}
    <div class="uk-navbar-right">
        <ul class="uk-nav uk-nav-default pc-nav">
            <li>
                <a href="#" class="uk-active uk-margin-large-right uk-background-secondary uk-border-rounded uk-width-small">
                    <div class="uk-width-auto uk-margin-small-right uk-margin-small-left">
                        <img class="uk-border-circle" width="40" height="40" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png">
                    </div>
                    <span class="uk-text-default uk-margin-small-right">
                    Hi. {{explode(" ",Auth::user()->name)[0]}}
                    </span>
                </a>
            </li>
        </ul>
</nav>
        {{-- Handpone Mode --}}
<nav class="uk-uk-navbar-transparent uk-background-secondary uk-hidden@s" uk-navbar="mode: click" style="background-color :black;">
        <div class="uk-navbar-right">
                <form class="uk-search uk-search-navbar uk-background-priamry uk-width-max-small">
                    <span uk-search-icon></span>
                    <input class="uk-search-input" type="search" placeholder="Search">
                </form>
        </div>
    </div>

    <div class="uk-navbar-right">
        <div class="uk-navbar-item">
        <a href="#offcanvas-slide" class="uk-navbar-toggle uk-hidden@s" uk-toggle>
            <span uk-navbar-toggle-icon></span>
        </a>

            <div id="offcanvas-slide" uk-offcanvas>
                <div class="uk-offcanvas-bar">

                    <ul class="uk-nav uk-nav-default">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>

                </div>
            </div>
    </div>
</nav>

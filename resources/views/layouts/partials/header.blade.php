<header class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}"><i class="fa-solid fa-train"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('home')}}">Treni in partenza</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('alredyLeft')}}">Treni già partiti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

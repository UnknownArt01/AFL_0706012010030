
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end p" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item nav-pills"><a class="nav-link {{ ($title==="Home")?'active':''}}"  href="/">Home</a></li>
                    <li class="nav-item nav-pills"><a class="nav-link {{ ($title==="Author")?'active':''}}"  href="{{ route('pencipta.index') }}">List Author</a></li>
                    <li class="nav-item nav-pills"><a class="nav-link {{ ($title==="List Tarian")?'active':''}}"  href="{{ route('tarian.index') }}">List Tarian</a></li>    
                </ul>
            </div>
        </div>
    </nav>
    
    
        
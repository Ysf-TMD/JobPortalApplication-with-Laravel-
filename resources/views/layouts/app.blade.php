<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                @if(!Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{route("login")}}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route("create-seeker")}}">Job Seeker</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route("create.employer")}}" tabindex="-1" aria-disabled="true">Employer</a>
                </li>
                @endif
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link " href="#" id="logout" >Logout</a>
                </li>
                @endif
                <form id="form-logout" action="{{route("logout")}}" method="post">@csrf</form>
            </ul>
        </div>
    </div>
</nav>

@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    let logout = document.getElementById("logout");
    let form = document.getElementById('form-logout');
    logout.addEventListener('click',function(){
        form.submit();
    })
</script>
</body>
</html>

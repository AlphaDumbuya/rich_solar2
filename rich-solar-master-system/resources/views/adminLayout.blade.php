@auth
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Solar Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

</head>

<body>
    <div class="container">
        <aside>
            <!--Top side bar Logo and close icon-->
            <div class="top">
                <div class="logo">
                    <h2 class="text-2xl font-bold">RICH<span class="danger">SOLAR</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <!--Top side bar ends here-->
            
            <!---Side bar icons and all functions icons-->
            <div class="sidebar">
                <a href="/admin" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="/admin/users">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Users</h3>
                </a>
                <a href="/admin/categories">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Categories</h3>
                </a>
                <a href="/admin/batteries">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Batteries</h3>
                </a>
                <a href="/admin/controllers">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Controllers</h3>
                </a>
                <a href="/admin/fans">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Fans</h3>
                </a>
                <a href="/admin/freezers">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Freezers</h3>
                </a>
                <a href="/admin/inverters">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Inverters</h3>
                </a>
                <a href="/admin/lights">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Lights</h3>
                </a>
                <a href="/admin/panels">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Panels</h3>
                </a>
                <div class="logout">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <span class="material-icons-sharp">logout</span> <h3>Logout</h3>
                        </button>
                    </form>
                </div>
                
            </div>
        </aside>
        <!--ASIDE ENDS HERE-->
        <main>
            @yield('admincontent')
        </main>

    <!--RIGHT SIDE BAR STARTS HERE-->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active" >light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <b>{{auth()->user()->name}}</b>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="{{asset('/imgs/pngtree-gray-silhouette-avatar-png-image_3418406.jpg')}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ URL::asset('/js/main.js') }}"></script>
</html>
@endauth
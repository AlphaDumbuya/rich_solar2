<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <main>
            <div class="left-side">
                <h1>RICH SOLAR</h1>
                <p>Administration Login page</p>
            </div>
            <div class="right-side">
                <div class="mx-4">
                    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                        <header class="text-center">
                            <h2 class="text-2xl font-bold uppercase mb-1">
                                Log In
                            </h2>
                            <p class="mb-4">Log in to Rich Solar Admin Dashboard</p>
                        </header>

                        <form method="POST" action="/users/authenticate">
                            @csrf
                            <div class="mb-6">
                                <label for="email" class="inline-block text-lg mb-2">Email</label>
                                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" />
                                @error('email') 

                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label for="password" class="inline-block text-lg mb-2">
                                    Password
                                </label>
                                <input type="password" class="border border-gray-200 rounded p-2 w-full"
                                    name="password" />
                            </div>

                            <div class="mb-6">
                                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                                    Sign In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
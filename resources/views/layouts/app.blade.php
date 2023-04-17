<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menyertakan file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <!-- Header section -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Navigation menu -->
            <a class="navbar-brand" href="https://github.com/ikhsan1303">Ikhsan Pahdian</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
    <main>
        <!-- Main content section -->
        <div class="container mt-4">
            <!-- Container to hold main content -->
            @yield('content')
            <!-- Yield main content section -->
        </div>
    </main>
    <footer class="mt-4">
        <!-- Footer section -->
        <div class="container text-center">
            <p>&copy; 2023 Your App. All rights reserved.</p>
        </div>
    </footer>
    <!-- Menyertakan file JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

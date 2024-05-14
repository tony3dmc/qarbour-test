<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aperture Science Cake Division Vacancies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #202020;
            color: #f5f5f5;
            margin: 0;
            padding-top: 56px;
        }
        .navbar {
            background-color: #333333;
            border-bottom: 2px solid #67c1f5;
        }
        .navbar-brand, .nav-link {
            color: #67c1f5;
        }
        .container {
            padding: 20px;
        }
        h1, .vacancy-title {
            color: #67c1f5;
        }
        .vacancy {
            background-color: #333333;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="/">Aperture Science Cake Division</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Vacancy - {{ str_replace('_', ' ', Str::title($vacancy)) }}</h1>

        <p>As a Portal Cake Designer, you'll work within the boundaries of space-time to create cakes that redefine the meaning of 'instant delivery'. Ideal candidates will have experience in molecular gastronomy and a strong desire to challenge the conventional limits of cake design.</p>
        <p>Benefits include a competitive salary, access to cutting-edge technology, and the opportunity to work alongside some of the brightest minds in the industry.</p>
        <p>Apply now and take the first step towards a career that's out of this world!</p>

        <button type="button" class="btn btn-primary apply">Apply Now</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>


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
        <a class="navbar-brand" href="#">Aperture Science Cake Division</a>
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
        <h1>Vacancies</h1>
        <p>At the forefront of culinary and scientific innovation, the Aperture Science Cake Division is where baking meets quantum physics to unlock the secrets of the perfect cake. Join us, and be part of a team that's shaping the future of gastronomy.</p>

        <div class="vacancy">
            <h2 class="vacancy-title">Portal Cake Designer</h2>
            <p>As a Portal Cake Designer, you'll work within the boundaries of space-time to create cakes that redefine the meaning of 'instant delivery'. Ideal candidates will have experience in molecular gastronomy and a strong desire to challenge the conventional limits of cake design.</p>
        </div>
        <div class="vacancy">
            <h2 class="vacancy-title">Quantum Confectionery Physicist</h2>
            <p>Join our team as a Quantum Confectionery Physicist to explore the superposition of flavors that exist in multiple states simultaneously. This role requires a deep understanding of quantum mechanics and a passion for chocolate. Your work will lay the foundation for our next-generation dessert technologies.</p>
        </div>
        <div class="vacancy">
            <h2 class="vacancy-title">Experimental Baking Technician</h2>
            <p>The Experimental Baking Technician is on the cutting edge, literally slicing through the fabric of reality to bring forth baked goods the likes of which have never been seen. If you have hands-on experience with experimental baking techniques and a portfolio of impossible pastries, we want you.</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>


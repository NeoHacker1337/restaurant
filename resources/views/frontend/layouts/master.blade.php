<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto Flex', Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #000;
            line-height: 1.6;
        }

        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section {
            margin-bottom: 40px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .map img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .cities-list,
        .countries-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            /* Equal spacing between items */
            gap: 20px;
            /* Ensures consistent spacing between rows */
            padding: 0;
        }

        .cities-list ul,
        .countries-list ul {
            list-style: none;
            margin: 0;
            padding: 0;
            flex: 1;
            min-width: 200px;
            max-width: 300px;
            /* Optional: Ensures items don't stretch too wide */
            text-align: center;
            /* Centers text for better alignment */
        }

        .cities-list li,
        .countries-list li {
            margin-bottom: 5px;
        }

        .view-all {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            font-weight: bold;
            color: #0073e6;
        }

        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .auth-links {
            display: flex;
            gap: 10px;
        }

        .auth-links button {
            padding: 8px 15px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .auth-links button:hover {
            background-color: #333;
        }

        /* Hide menu-toggle button on larger screens */
        .menu-toggle {
            display: none;
            /* Default hidden */
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .auth-links button {
            margin-left: 10px;
            padding: 8px 15px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .auth-links button:hover {
            background-color: #333;
        }

        .container {
            text-align: center;
            margin-top: 200px;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-bar input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            outline: none;
        }

        .search-bar select {
            padding: 10px;
            border: 1px solid #ccc;
            border-left: none;
            border-radius: 0;
            outline: none;
        }

        .search-bar button {
            padding: 10px 15px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #333;
        }

        .features {
            display: flex;
            justify-content: space-between;
            /* Equal spacing between cards */
            gap: 20px;
            /* Space between cards */
            padding: 20px;
        }

        .feature {
            flex: 1;
            /* Equal width for all cards */
            text-align: center;
            padding: 10px;
        }

        .feature img {
            width: 100%;
            /* Responsive image */
            max-height: 200px;
            /* Limit height */
            object-fit: cover;
            /* Keep aspect ratio */
            border-radius: 8px;
            /* Add rounded corners */
            margin-bottom: 15px;
        }

        .feature h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .feature a {
            text-decoration: none;
            color: #0073e6;
            /* Link color */
            font-weight: bold;
            font-size: 14px;
        }

        .hero {
            background: url('{{ asset('public/frontend/images/top-view-circular-food-frame.jpg') }}') no-repeat center center/cover;
            text-align: center;
            padding: 150px 20px;
            /* Extra padding to account for the fixed header */
            color: white;
            position: relative;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
            text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
            /* Ensures readability */
        }

        .header-row {
            display: flex;
            justify-content: space-between;
            /* Space between the two elements */
            align-items: center;
            /* Aligns the elements vertically */
            margin-bottom: 20px;
        }

        .header-row h2 {
            margin: 0;
            /* Remove default margin */
            font-size: 24px;
        }

        .header-row .view-all {
            text-decoration: none;
            font-weight: bold;
            color: #0073e6;
            font-size: 16px;
        }

        .footer {
            background: #f9f9f9;
            padding: 20px 0;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .footer-top ul {
            list-style: none;
            padding: 0;
        }

        .footer-top ul li {
            margin-bottom: 10px;
        }

        .footer-top ul li a {
            text-decoration: none;
            color: #000;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #666;
        }

        /* Mobile Styles */
        @media (max-width: 768px) {
            .features {
                flex-direction: column;
            }

            .search-bar {
                flex-direction: column;
            }

            .search-bar input,
            .search-bar select,
            .search-bar button {
                width: 100%;
                margin-bottom: 10px;
            }

            .search-bar input[type="text"] {
                width: 100%;
                margin-bottom: 10px;
            }

            .features {
                flex-direction: column;
                /* Stack cards vertically */
                gap: 15px;
            }

            .menu-toggle {
                display: block;
                /* Visible on mobile */
                font-size: 1.5rem;
                background: none;
                border: none;
                cursor: pointer;
                color: #000;
            }

            .auth-links {
                display: none;
                flex-direction: column;
                background-color: rgba(255, 255, 255, 0.9);
                position: absolute;
                top: 100%;
                right: 0;
                padding: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            }

            .auth-links button {
                width: 100%;
                margin: 5px 0;
            }

            .auth-links.open {
                display: flex;
            }
        }
    </style>


</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="logo">Order Delivery</div>
            <button class="menu-toggle" onclick="toggleMenu()">☰</button>
            <div class="auth-links" id="auth-links">
                <button onclick="window.location.href='{{ route('login') }}'">Log in</button>
                <button onclick="window.location.href='{{ route('register') }}'">Sign up</button>
            </div>
        </nav>
    </header>


    <div class="hero">
        <h1>Order delivery near you</h1>
        <div class="search-bar">
            <input type="text" placeholder="Enter delivery address">
            <select>
                <option>Deliver now</option>
                <option>Schedule for later</option>
            </select>
            <button>Search here</button>
        </div>
    </div>


    <section class="features">
        <div class="feature">
            <img src="{{ asset('public/frontend/images/premium_photo-1680291971376-ccc54aacb22b.jpg') }}"
                alt="Feed your employees">
            <h3>Feed your employees</h3>
            <a href="#">Create a business account</a>
        </div>
        <div class="feature">
            <img src="https://www.ubereats.com/_static/711d51ca1b458931.webp" alt="Your restaurant, delivered">
            <h3>Your restaurant, delivered</h3>
            <a href="#">Add your restaurant</a>
        </div>
        <div class="feature">
            <img src="{{ asset('public/frontend/images/premium_photo-1661591165863-98c2d4f0743f.jpg') }}"
                alt="Deliver with us">
            <h3>Deliver with us</h3>
            <a href="#">Sign up to deliver</a>
        </div>
    </section>





    <!-- Cities Near Me Section -->
    <section class="section cities-near-me">
        <div class="header-row">
            <h2>Cities near me</h2>
            <a href="#" class="view-all">View all 500+ cities</a>
        </div>

        <div class="map">
            {{-- <img src="map-placeholder.png" alt="Map of cities" /> --}}
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252693.40697119603!2d76.92842237750638!3d28.643983880347314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e1!3m2!1sen!2sin!4v1737721598169!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="cities-list mt-2 mb-2">
            <ul>
                <li>Akron</li>
                <li>Albuquerque</li>
                <li>Bridgeport</li>
                <li>Concord</li>
                <li>Dayton</li>
                <li>El Paso</li>
            </ul>
            <ul>
                <li>Hartford</li>
                <li>Houston</li>
                <li>Indianapolis</li>
                <li>McAllen</li>
                <li>Mesa</li>
                <li>Milwaukee</li>
            </ul>
            <ul>
                <li>Nashville</li>
                <li>New Orleans</li>
                <li>Oklahoma City</li>
                <li>Omaha</li>
                <li>Orlando</li>
                <li>Palm Bay</li>
            </ul>
            <ul>
                <li>Providence</li>
                <li>Queens</li>
                <li>San Antonio</li>
                <li>Story Brook</li>
                <li>Tucson</li>
                <li>West Hollywood</li>
            </ul>
        </div>

    </section>

    <!-- Countries with  Section -->
    <section class="section countries">
        <h2>Countries with Restaurant</h2>
        <div class="countries-list">
            <ul>
                <li>Australia</li>
                <li>Belgium</li>
                <li>Canada</li>
                <li>Chile</li>
                <li>Costa Rica</li>
                <li>Dominican Republic</li>
                <li>Ecuador</li>
                <li>El Salvador</li>
            </ul>
            <ul>
                <li>France</li>
                <li>Germany</li>
                <li>Guatemala</li>
                <li>Ireland</li>
                <li>Italy</li>
                <li>Japan</li>
                <li>Kenya</li>
                <li>Luxembourg</li>
            </ul>
            <ul>
                <li>Mexico</li>
                <li>Netherlands</li>
                <li>New Zealand</li>
                <li>Panama</li>
                <li>Poland</li>
                <li>Portugal</li>
                <li>South Africa</li>
                <li>Spain</li>
            </ul>
            <ul>
                <li>Sri Lanka</li>
                <li>Sweden</li>
                <li>Switzerland</li>
                <li>Taiwan (ROC)</li>
                <li>United Kingdom</li>
                <li>United States</li>
            </ul>
        </div>
        <a href="#" class="view-all">View all countries</a>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <h3>Restaurant</h3>
            <ul>
                <li><a href="#">Get Help</a></li>
                <li><a href="#">Buy gift cards</a></li>
                <li><a href="#">Add your restaurant</a></li>
                <li><a href="#">Sign up to deliver</a></li>
                <li><a href="#">Create a business account</a></li>
                <li><a href="#">Promotions</a></li>
            </ul>
            <ul>
                <li><a href="#">Restaurants near me</a></li>
                <li><a href="#">View all cities</a></li>
                <li><a href="#">View all countries</a></li>
                <li><a href="#">Pickup near me</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Shop groceries</a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
            <p>&copy; 2025 Uber Technologies Inc.</p>
        </div>
    </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        function toggleMenu() {
            const authLinks = document.getElementById('auth-links');
            authLinks.classList.toggle('open');
        }
    </script>

</body>

</html>

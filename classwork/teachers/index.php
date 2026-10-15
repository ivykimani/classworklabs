<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mwalimu School System</title>
    <style>
        /* Base Styles & Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
 
        body {
            color: #333;
            background-color: #f8f9fa;
            line-height: 1.6;
        }
 
        /* Navigation Bar */
        header {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }
 
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
 
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #1a73e8;
            text-decoration: none;
        }
 
        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 30px;
        }
 
        .nav-links a {
            text-decoration: none;
            color: #5f6368;
            font-weight: 500;
            transition: color 0.3s;
        }
 
        .nav-links a:hover {
            color: #1a73e8;
        }
 
        /* Target Login Button */
        .btn-login {
            background-color: #1a73e8;
            color: #ffffff !important;
            padding: 10px 24px;
            border-radius: 5px;
            font-weight: 600 !important;
            transition: background-color 0.3s !important;
        }
 
        .btn-login:hover {
            background-color: #1557b0;
        }
 
        /* Hero Section */
        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }
 
        .hero-content {
            flex: 1;
        }
 
        .hero-content h1 {
            font-size: 48px;
            color: #202124;
            line-height: 1.2;
            margin-bottom: 20px;
        }
 
        .hero-content p {
            font-size: 18px;
            color: #5f6368;
            margin-bottom: 30px;
        }
 
        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }
 
        /* Visual placeholder instead of a heavy image file */
        .image-placeholder {
            width: 100%;
            max-width: 500px;
            height: 350px;
            background: linear-gradient(135deg, #e8f0fe 0%, #c2ecff 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1a73e8;
            font-size: 48px;
            font-weight: bold;
            box-shadow: 0 10px 30px rgba(26, 115, 232, 0.1);
        }
 
        /* Features Section */
        .features {
            background-color: #ffffff;
            padding: 80px 20px;
        }
 
        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
 
        .features-container h2 {
            font-size: 32px;
            color: #202124;
            margin-bottom: 40px;
        }
 
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
 
        .card {
            padding: 30px;
            background: #f8f9fa;
            border-radius: 10px;
            border: 1px solid #e8eaed;
            transition: transform 0.3s, box-shadow 0.3s;
        }
 
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }
 
        .card-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }
 
        .card h3 {
            font-size: 20px;
            color: #202124;
            margin-bottom: 10px;
        }
 
        .card p {
            color: #5f6368;
            font-size: 15px;
        }
 
        /* Footer */
        footer {
            background-color: #202124;
            color: #f8f9fa;
            text-align: center;
            padding: 30px 20px;
            font-size: 14px;
        }
 
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
                padding: 40px 20px;
            }
            .hero-content h1 {
                font-size: 32px;
            }
            .navbar {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
 
    <!-- Header / Navbar -->
    <header>
        <nav class="navbar">
            <a href="#" class="logo">Mwalimu System</a>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#about">About</a></li>
                <!-- Update the href value below with your actual login page URL -->
                <li><a href="login.php" class="btn-login">Login to Portal</a></li>
            </ul>
        </nav>
    </header>
 
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Empowering Teachers, Simplifying School Management.</h1>
            <p>Welcome to the Mwalimu School System. A comprehensive platform built to manage grading, student attendance, timetables, and smooth communication all in one place.</p>
            <a href="login.php" class="btn-login" style="display: inline-block; text-decoration: none;">Get Started</a>
        </div>
        <div class="hero-image">
            <div class="image-placeholder">📚</div>
        </div>
    </section>
 
    <!-- Features Section -->
    <section class="features" id="features">
        <div class="features-container">
            <h2>System Core Modules</h2>
            <div class="grid">
                <!-- Feature 1 -->
                <div class="card">
                    <div class="card-icon">🎯</div>
                    <h3>Exam & Grading</h3>
                    <p>Effortlessly process student marks, generate report cards, and analyze class performance tracking metrics.</p>
                </div>
                <!-- Feature 2 -->
                <div class="card">
                    <div class="card-icon">📅</div>
                    <h3>Smart Timetable</h3>
                    <p>Automate lesson schedules and substitute teacher allocations without clashing timelines.</p>
                </div>
                <!-- Feature 3 -->
                <div class="card">
                    <div class="card-icon">👥</div>
                    <h3>Attendance Tracker</h3>
                    <p>Keep precise daily records of student and staff attendance with real-time digital roll calls.</p>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Mwalimu School System. All Rights Reserved.</p>
    </footer>
 
</body>
</html>
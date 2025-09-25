<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System</title>
  <style>
    /* ==== Base Styles ==== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    body {
      background: linear-gradient(135deg, #3a7bd5, #3a6073);
      color: #fff;
      overflow-x: hidden;
    }

    /* ==== Header ==== */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 60px;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    header h1 {
      font-size: 1.5rem;
    }
    nav ul {
      display: flex;
      list-style: none;
    }
    nav ul li {
      margin-left: 30px;
    }
    nav ul li a {
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      transition: 0.3s;
    }
    nav ul li a:hover {
      color: #ffd369;
    }

    /* ==== Hero Section ==== */
    .hero {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
    }
    .hero h2 {
      font-size: 3rem;
      margin-bottom: 20px;
    }
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      max-width: 600px;
    }
    .buttons {
      display: flex;
      gap: 20px;
    }
    .btn {
      padding: 15px 40px;
      border: none;
      border-radius: 50px;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.3s;
    }
    .btn-login {
      background: #ffd369;
      color: #333;
      font-weight: bold;
      box-shadow: 0 4px 15px rgba(255, 211, 105, 0.5);
    }
    .btn-login:hover {
      transform: scale(1.05);
    }
    .btn-register {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(10px);
      color: #fff;
    }
    .btn-register:hover {
      transform: scale(1.05);
      background: rgba(255, 255, 255, 0.2);
    }

    /* ==== About Section ==== */
    .about {
      padding: 80px 60px;
      text-align: center;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      margin: 50px;
    }
    .about h3 {
      font-size: 2rem;
      margin-bottom: 20px;
    }
    .about p {
      font-size: 1.1rem;
      max-width: 800px;
      margin: auto;
      line-height: 1.6;
    }

    /* ==== Features Section ==== */
    .features {
      padding: 80px 60px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }
    .feature-card {
      background: rgba(255, 255, 255, 0.1);
      padding: 30px;
      border-radius: 20px;
      text-align: center;
      transition: 0.3s;
    }
    .feature-card:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.2);
    }
    .feature-card h4 {
      margin-bottom: 15px;
      font-size: 1.5rem;
    }

    /* ==== Footer ==== */
    footer {
      text-align: center;
      padding: 20px;
      background: rgba(0, 0, 0, 0.3);
    }

    /* ==== Floating Shapes (Background) ==== */
    .shape {
      position: absolute;
      border-radius: 50%;
      opacity: 0.4;
      animation: float 6s ease-in-out infinite alternate;
    }
    .shape1 { width: 100px; height: 100px; background: #ffd369; top: 20%; left: 10%; }
    .shape2 { width: 150px; height: 150px; background: #ff6b6b; bottom: 15%; right: 20%; }
    .shape3 { width: 80px; height: 80px; background: #1dd1a1; top: 70%; left: 50%; }

    @keyframes float {
      from { transform: translateY(0px); }
      to { transform: translateY(-30px); }
    }

    /* ==== Responsive ==== */
    @media (max-width: 768px) {
      .hero h2 { font-size: 2rem; }
      .hero p { font-size: 1rem; }
      header { padding: 15px 30px; }
      nav ul li { margin-left: 15px; }
    }
  </style>
</head>
<body>
  <!-- Floating shapes -->
  <div class="shape shape1"></div>
  <div class="shape shape2"></div>
  <div class="shape shape3"></div>

  <!-- Header -->
  <header>
    <h1>🏫 SMS</h1>
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="{{ url('register') }}">Register</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <h2>Welcome to Student Management System</h2>
    <p>Manage students, teachers, courses, and results easily and efficiently with our modern platform.</p>
    <div class="buttons">
      <a href="{{ url('login') }}" class="btn btn-login">Login</a>
      <a href="{{ url('register') }}" class="btn btn-register">Register</a>
    </div>
  </section>

  <!-- About Section -->
  <section class="about">
    <h3>About SMS</h3>
    <p>Our Student Management System helps schools and colleges streamline their processes. From student admissions to attendance, exams, and results – everything is organized in one place with a user-friendly interface.</p>
  </section>

  <!-- Features Section -->
  <section class="features">
    <div class="feature-card">
      <h4>📚 Student Records</h4>
      <p>Add, update, and view all student information with ease.</p>
    </div>
    <div class="feature-card">
      <h4>👨‍🏫 Teachers</h4>
      <p>Manage teacher profiles, subjects, and assignments.</p>
    </div>
    <div class="feature-card">
      <h4>📝 Attendance</h4>
      <p>Mark attendance daily and generate insightful reports.</p>
    </div>
    <div class="feature-card">
      <h4>🎓 Exams & Results</h4>
      <p>Upload marks, generate report cards, and share results instantly.</p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Student Management System. All rights reserved.</p>
  </footer>
</body>
</html>

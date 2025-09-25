<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS - Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: linear-gradient(135deg, #3a7bd5, #3a6073);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: #fff;
      overflow-x: hidden;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(15px);
      padding: 50px;
      border-radius: 20px;
      width: 400px;
      text-align: center;
      box-shadow: 0 8px 30px rgba(0,0,0,0.3);
    }

    .login-container h2 {
      margin-bottom: 30px;
      font-size: 2rem;
    }

    .login-container form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .login-container input {
      padding: 12px 15px;
      border: none;
      border-radius: 12px;
      font-size: 1rem;
      outline: none;
      background: rgba(255,255,255,0.2);
      color: #fff;
    }

    .login-container input::placeholder {
      color: #ddd;
    }

    .login-container button {
      padding: 12px;
      border: none;
      border-radius: 50px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      background: #ffd369;
      color: #333;
      box-shadow: 0 0 15px rgba(255, 211, 105, 0.5);
      transition: 0.3s;
    }

    .login-container button:hover {
      transform: scale(1.05);
    }

    .register-link {
      margin-top: 15px;
      font-size: 0.9rem;
    }

    .register-link a {
      color: #ffd369;
      text-decoration: none;
      font-weight: bold;
    }

    .register-link a:hover {
      text-decoration: underline;
    }

    /* Floating shapes */
    .shape {
      position: absolute;
      border-radius: 50%;
      opacity: 0.2;
      animation: float 6s infinite ease-in-out alternate;
    }
    .shape1 { width: 150px; height: 150px; background: #ffd369; top: 10%; left: 10%; }
    .shape2 { width: 100px; height: 100px; background: #ff6b6b; bottom: 20%; right: 15%; }
    .shape3 { width: 120px; height: 120px; background: #1dd1a1; top: 60%; left: 50%; }

    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
      100% { transform: translateY(0px); }
    }

    @media(max-width: 450px){
      .login-container {
        width: 90%;
        padding: 30px;
      }
    }
  </style>
</head>
<body>
  <!-- Floating shapes -->
  <div class="shape shape1"></div>
  <div class="shape shape2"></div>
  <div class="shape shape3"></div>

  <!-- Login Form -->
  <div class="login-container">
    <h2>Login</h2>
    <form action="{{ url('login') }}" method="POST">
      @csrf
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <div class="register-link">
      Don't have an account? <a href="{{ url('register') }}">Register</a>
    </div>
  </div>
</body>
</html>

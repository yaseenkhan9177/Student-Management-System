<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS Dashboard</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: linear-gradient(135deg, #3a7bd5, #3a6073);
      color: #fff;
      display: flex;
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(15px);
      padding: 30px 20px;
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    .sidebar h2 {
      font-size: 1.8rem;
      margin-bottom: 20px;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none;
      font-size: 1.1rem;
      padding: 10px 15px;
      border-radius: 12px;
      transition: 0.3s;
    }

    .sidebar a:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateX(5px);
    }

    /* Main Content */
    .main {
      flex: 1;
      padding: 30px;
      overflow-y: auto;
    }

    /* Header */
    .top-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .top-header h1 {
      font-size: 2rem;
    }

    .top-header .user {
      font-weight: bold;
    }

    /* Stats Cards */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-bottom: 40px;
    }

    .card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 20px;
      border-radius: 20px;
      text-align: center;
      transition: 0.3s;
    }

    .card:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-5px);
    }

    .card h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 1.2rem;
    }

    /* Student Table */
    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
    }

    table th, table td {
      padding: 15px;
      text-align: left;
    }

    table th {
      background: rgba(255, 255, 255, 0.2);
    }

    table tr:nth-child(even) {
      background: rgba(255, 255, 255, 0.05);
    }

    table tr:hover {
      background: rgba(255, 255, 255, 0.15);
      transform: scale(1.01);
      transition: 0.2s;
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

    @media(max-width: 768px){
      .sidebar {
        width: 60px;
        padding: 20px 10px;
      }

      .sidebar h2 { display: none; }
      .sidebar a { font-size: 0.9rem; padding: 10px 5px; }
    }
  </style>
</head>
<body>
  <!-- Floating shapes -->
  <div class="shape shape1"></div>
  <div class="shape shape2"></div>
  <div class="shape shape3"></div>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>SMS</h2>
    <a href="#">Dashboard</a>
    <a href="#">Students</a>
    <a href="#">Teachers</a>
    <a href="#">Attendance</a>
    <a href="#">Exams</a>
    <a href="#">Results</a>
    <a href="#">Logout</a>
  </div>

  <!-- Main Content -->
  <div class="main">
    <div class="top-header">
      <h1>Dashboard</h1>
      <div class="user">Admin</div>
    </div>

    <!-- Stats Cards -->
    <div class="cards">
      <div class="card">
        <h3>📚 Students</h3>
        <p>120</p>
      </div>
      <div class="card">
        <h3>👨‍🏫 Teachers</h3>
        <p>12</p>
      </div>
      <div class="card">
        <h3>📝 Attendance</h3>
        <p>95%</p>
      </div>
      <div class="card">
        <h3>🎓 Exams</h3>
        <p>5 Upcoming</p>
      </div>
    </div>

    <!-- Student Table -->
    <h2>Student List</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th>Class</th>
          <th>Age</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>101</td>
          <td>Ali Khan</td>
          <td>10-A</td>
          <td>15</td>
          <td>ali@example.com</td>
        </tr>
        <tr>
          <td>102</td>
          <td>Fatima Noor</td>
          <td>9-B</td>
          <td>14</td>
          <td>fatima@example.com</td>
        </tr>
        <tr>
          <td>103</td>
          <td>Ahmed Raza</td>
          <td>10-B</td>
          <td>15</td>
          <td>ahmed@example.com</td>
        </tr>
        <tr>
          <td>104</td>
          <td>Sara Khan</td>
          <td>8-A</td>
          <td>13</td>
          <td>sara@example.com</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>

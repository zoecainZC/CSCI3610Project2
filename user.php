<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome User</title>
  <style>
    body { font-family: Arial; padding: 20px; background-color: #f4f4f4; }
    .container { background: white; padding: 20px; border-radius: 8px; }
    input { display: block; margin-bottom: 15px; width: 100%; padding: 8px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 10px; }
    button { padding: 10px 15px; background: #28a745; color: white; border: none; cursor: pointer; }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome, User</h1>

    <label>Name: <input type="text" id="name" /></label>
    <label>Email: <input type="email" id="email" /></label>
    <label>Phone: <input type="tel" id="phone" /></label>
    <button onclick="saveUser()">Save</button>

    <h2>Your Schedule</h2>
    <table>
      <thead>
        <tr><th>Session Name</th><th>Date</th><th>Time</th></tr>
      </thead>
      <tbody id="sessionTable"></tbody>
    </table>
  </div>

  <script>
    async function loadUserData() {
      const res = await fetch('load_user.php');
      const data = await res.json();
      document.getElementById('name').value = data.name;
      document.getElementById('email').value = data.email;
      document.getElementById('phone').value = data.phone;

      const sessions = data.sessions;
      const tbody = document.getElementById('sessionTable');
      sessions.forEach(s => {
        const row = `<tr><td>${s.title}</td><td>${s.date}</td><td>${s.time}</td></tr>`;
        tbody.innerHTML += row;
      });
    }

    async function saveUser() {
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;

      const response = await fetch('save_user.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ name, email, phone })
      });

      const result = await response.text();
      alert(result);
    }

    loadUserData();
  </script>
</body>
</html>
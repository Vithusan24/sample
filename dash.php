<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS System - Multi Page</title>
  <style>
    body { margin:0; font-family:sans-serif; display:flex; height:100vh; }
    .sidebar { width:220px; background:#111827; color:#e5e7eb; display:flex; flex-direction:column; }
    .sidebar h2 { padding:20px; margin:0; background:#1f2937; font-size:18px; }
    .sidebar a { padding:14px 20px; color:#e5e7eb; text-decoration:none; display:block; }
    .sidebar a:hover, .sidebar a.active { background:#2563eb; }
    .main { flex:1; display:flex; flex-direction:column; }
    .topbar { background:#f3f4f6; padding:10px 20px; border-bottom:1px solid #ddd; display:flex; justify-content:space-between; align-items:center; }
    .content { flex:1; padding:20px; overflow:auto; }
  </style>
</head>
<body>
  <nav class="sidebar">
    <h2>POS System</h2>
    <a href="index.html" class="active">Dashboard</a>
    <a href="products.html">Products</a>
    <a href="billing.html">Billing</a>
    <a href="sales.html">Sales</a>
    <a href="reports.html">Reports</a>
    <a href="settings.html">Settings</a>
  </nav>
  <div class="main">
    <div class="topbar">
      <span>Welcome, User</span>
      <span>[Store Logo]</span>
    </div>
    <div class="content">
      <!-- Each page will load its content here -->
      <h1>Dashboard</h1>
      <p>This is the dashboard page. You can add graphs, stats, and quick links here.</p>
    </div>
  </div>
</body>
</html>

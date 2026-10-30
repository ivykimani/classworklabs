<!--This file handles the user dashboard logic for the Mwalimu System - note that this is separate from the student dashboard logic -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Mwalimu System</title>
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
            background-color: #f4f6f9;
            display: flex;
            min-height: 100vh;
        }
 
        /* Sidebar Navigation */
        .sidebar {
            width: 260px;
            background-color: #ffffff;
            border-right: 1px solid #e8eaed;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
        }
 
        .sidebar-header {
            padding: 24px;
            font-size: 20px;
            font-weight: 700;
            color: #1a73e8;
            border-bottom: 1px solid #f4f6f9;
        }
 
        .sidebar-menu {
            list-style: none;
            padding: 20px 0;
            flex: 1;
        }
 
        .sidebar-menu li a {
            display: flex;
            align-items: center;
            padding: 14px 24px;
            color: #5f6368;
            text-decoration: none;
            font-weight: 500;
            gap: 12px;
            transition: all 0.3s;
        }
 
        .sidebar-menu li a:hover, .sidebar-menu li a.active {
            color: #1a73e8;
            background-color: #e8f0fe;
            border-left: 4px solid #1a73e8;
        }
 
        .sidebar-menu li.logout-item {
            margin-top: auto;
            border-top: 1px solid #f4f6f9;
        }
 
        .sidebar-menu li.logout-item a:hover {
            color: #d93025;
            background-color: #fce8e6;
            border-left: 4px solid #d93025;
        }
 
        /* Main Content Layout */
        .main-content {
            margin-left: 260px;
            flex: 1;
            padding: 40px;
        }
 
        /* Top Header */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
 
        .welcome-msg h1 {
            font-size: 28px;
            color: #202124;
            margin-bottom: 5px;
        }
 
        .welcome-msg p {
            color: #5f6368;
        }
 
        .student-badge {
            background-color: #ffffff;
            padding: 10px 20px;
            border-radius: 30px;
            border: 1px solid #e8eaed;
            font-weight: 600;
            color: #202124;
        }
 
        /* Quick Overview Cards Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
 
        .stat-card {
            background-color: #ffffff;
            padding: 24px;
            border-radius: 10px;
            border: 1px solid #e8eaed;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
 
        .stat-card .label {
            font-size: 14px;
            color: #5f6368;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
 
        .stat-card .value {
            font-size: 24px;
            font-weight: 700;
            color: #202124;
        }
 
        /* Information Sections (Tables / Details) */
        .dashboard-section {
            background-color: #ffffff;
            border-radius: 10px;
            border: 1px solid #e8eaed;
            padding: 24px;
            margin-bottom: 30px;
        }
 
        .dashboard-section h2 {
            font-size: 20px;
            color: #202124;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
 
        /* Simple Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
 
        th, td {
            padding: 14px;
            border-bottom: 1px solid #e8eaed;
        }
 
        th {
            background-color: #f8f9fa;
            color: #5f6368;
            font-weight: 600;
        }
 
        tr:hover td {
            background-color: #f8f9fa;
        }
 
        .status-badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }
 
        .status-paid { background-color: #e6f4ea; color: #137333; }
        .status-pending { background-color: #fef7e0; color: #b06000; }
 
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }
            .sidebar-header, .sidebar-menu span {
                display: none;
            }
            .main-content {
                margin-left: 70px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
 
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-header">Mwalimu Portal</div>
        <ul class="sidebar-menu">
            <li><a href="#profile" class="active">👤 <span>Profile</span></a></li>
            <li><a href="#units">📚 <span>Registered Units</span></a></li>
            <li><a href="#transcript">📝 <span>View Transcript</span></a></li>
            <li><a href="#attendance">📅 <span>Attendance</span></a></li>
            <li><a href="#fees">💰 <span>Fees Status</span></a></li>
            <li class="logout-item"><a href="index.html">🚪 <span>Logout</span></a></li>
        </ul>
    </aside>
 
    <!-- Main Content Area -->
    <main class="main-content">
       
        <!-- Top Bar Header -->
        <header class="top-bar">
            <div class="welcome-msg">
                <h1>Welcome back, Alex!</h1>
                <p>Academic Year 2026/2027 — Semester 1</p>
            </div>
            <div class="student-badge">ID: STD-2026-089</div>
        </header>
 
        <!-- Quick Summary Widgets -->
        <section class="stats-grid">
            <div class="stat-card">
                <span class="label">Current GPA</span>
                <span class="value">3.72 / 4.00</span>
            </div>
            <div class="stat-card">
                <span class="label">Term Attendance</span>
                <span class="value">94.5%</span>
            </div>
            <div class="stat-card">
                <span class="label">Fee Balance</span>
                <span class="value">KES 0.00</span>
            </div>
        </section>
 
        <!-- Dynamic Content Sections (Rendered as mock segments) -->
        <section class="dashboard-section" id="units">
            <h2>📚 Current Registered Units</h2>
            <table>
                <thead>
                    <tr>
                        <th>Unit Code</th>
                        <th>Unit Title</th>
                        <th>Credits</th>
                        <th>Instructor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>CSC 311</strong></td>
                        <td>Advanced Web Development</td>
                        <td>4</td>
                        <td>Dr. J. Ngeru</td>
                    </tr>
                    <tr>
                        <td><strong>MAT 240</strong></td>
                        <td>Linear Algebra II</td>
                        <td>3</td>
                        <td>Prof. A. Omwamba</td>
                    </tr>
                    <tr>
                        <td><strong>CSC 315</strong></td>
                        <td>Database Management Systems</td>
                        <td>4</td>
                        <td>Mrs. E. Waweru</td>
                    </tr>
                </tbody>
            </table>
        </section>
 
        <section class="dashboard-section" id="fees">
            <h2>💰 Recent Fee Statements</h2>
            <table>
                <thead>
                    <tr>
                        <th>Reference</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>REC-994221</td>
                        <td>Tuition Fees - Sem 1 Invoice Payment</td>
                        <td>KES 45,000</td>
                        <td><span class="status-badge status-paid">Fully Paid</span></td>
                    </tr>
                    <tr>
                        <td>REC-992104</td>
                        <td>Student Activity & Medical Fund</td>
                        <td>KES 3,500</td>
                        <td><span class="status-badge status-paid">Fully Paid</span></td>
                    </tr>
                </tbody>
            </table>
        </section>
 
    </main>
 
</body>
</html>
 
 
Tuesday 3:16 PM Meeting ended: 2h 3m 6s 

 
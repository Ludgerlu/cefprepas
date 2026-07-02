
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - CEFPREPAS</title>
  <link rel="shortcut icon" href="{{ asset('assets/img/Logo_CEFPREPAS.j.png') }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="dashboard.css">
  <!-- PWA Meta Tags -->
    <meta name="theme-color" content="#1a73e8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="msapplication-TileColor" content="#00d2a9">
    <meta name="msapplication-config" content="/browserconfig.xml">
    
    <!-- Manifest -->
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" href="/icons/icon-152x152.png">
    <link rel="icon" type="image/png" href=" {{ asset('assets/icons/favicon-96x96.png') }} " sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href=" {{ asset('assets/icons/favicon.svg') }} " />
    <link rel="shortcut icon" href="{{ asset('assets/icons/favicon.ico') }} " />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/icons/apple-touch-icon.png') }} " />
    <meta name="apple-mobile-web-app-title" content="CEFPREPAS" />
  <style>
    /* Base Styles */
    :root {
      --primary-color: #2c3e50;
      --secondary-color: #3498db;
      --success-color: #28a745;
      --danger-color: #dc3545;
      --warning-color: #ffc107;
      --info-color: #17a2b8;
      --light-color: #f8f9fa;
      --dark-color: #343a40;
      --sidebar-width: 250px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f7fa;
      color: #333;
      line-height: 1.6;
    }

    /* Layout */
    .dashboard-container {
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
      width: var(--sidebar-width);
      background-color: var(--light-color);
      color: white;
      position: fixed;
      height: 100vh;
      padding: 20px 0;
      transition: all 0.3s;
      z-index: 1000;
    }

    .sidebar-header {
      padding: 0 20px 20px;
      text-align: center;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .sidebar-brand {
      color: white;
      font-size: 1.5rem;
      font-weight: 700;
      text-decoration: none;
      display: block;
      margin-bottom: 10px;
    }

    .sidebar-brand img {
      max-height: 50px;
    }

    .sidebar-menu {
      padding: 20px;
    }

    .sidebar-menu ul {
      list-style: none;
    }

    .sidebar-menu li {
      margin-bottom: 5px;
    }

    .sidebar-menu a {
      color: var(--dark-color);
      text-decoration: none;
      padding: 10px 15px;
      display: block;
      border-radius: 5px;
      transition: all 0.3s;
    }

    .sidebar-menu a:hover, 
    .sidebar-menu a.active {
      background-color: #b9dda3;
      color: black;
    }

    .sidebar-menu a i {
      margin-right: 10px;
      width: 20px;
      text-align: center;
    }

    .sidebar-menu .badge {
      float: right;
    }

    /* Main Content */
    .main-content {
      margin-left: var(--sidebar-width);
      flex: 1;
      padding: 20px;
      transition: all 0.3s;
    }

    /* Top Navigation */
    .top-nav {
      background-color: white;
      padding: 15px 20px;
      border-radius: 5px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      margin-bottom: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .top-nav h1 {
      font-size: 1.5rem;
      margin: 0;
    }

    .user-menu {
      display: flex;
      align-items: center;
    }

    .user-menu img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
    }

    /* Cards */
    .card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      margin-bottom: 20px;
      border: none;
    }

    .card-header {
      padding: 15px 20px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      background-color: transparent;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .card-header h2 {
      font-size: 1.2rem;
      margin: 0;
    }

    .card-body {
      padding: 20px;
    }

    /* Stats Cards */
    .stats-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-bottom: 20px;
    }

    .stat-card {
      background-color: white;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      text-align: center;
    }

    .stat-card i {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .stat-card .stat-value {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .stat-card .stat-label {
      color: #6c757d;
      font-size: 0.9rem;
    }

    /* Tables */
    .table-responsive {
      overflow-x: auto;
    }

    .table {
      width: 100%;
      border-collapse: collapse;
    }

    .table th, .table td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #dee2e6;
    }

    .table th {
      background-color: #f8f9fa;
      font-weight: 600;
    }

    .table tr:hover {
      background-color: #f8f9fa;
    }

    /* Forms */
    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
    }

    .form-control {
      width: 100%;
      padding: 10px 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 1rem;
    }

    .form-control:focus {
      outline: none;
      border-color: var(--secondary-color);
      box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
    }

    textarea.form-control {
      min-height: 150px;
      resize: vertical;
    }

    /* Buttons */
    .btn {
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: 500;
      cursor: pointer;
      border: none;
      transition: all 0.3s;
    }

    .btn-primary {
      background-color: var(--primary-color);
      color: white;
    }

    .btn-primary:hover {
      background-color: #1a252f;
    }

    .btn-secondary {
      background-color: var(--secondary-color);
      color: white;
    }

    .btn-secondary:hover {
      background-color: #1a73e8;
    }

    .btn-danger {
      background-color: var(--danger-color);
      color: white;
    }

    .btn-danger:hover {
      background-color: #c82333;
    }

    .btn-sm {
      padding: 5px 10px;
      font-size: 0.875rem;
    }

    /* Badges */
    .badge {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 50px;
      font-size: 0.75rem;
      font-weight: 600;
    }

    .badge-primary {
      background-color: var(--primary-color);
      color: white;
    }

    .badge-secondary {
      background-color: var(--secondary-color);
      color: white;
    }

    .badge-success {
      background-color: var(--success-color);
      color: white;
    }

    .badge-warning {
      background-color: var(--warning-color);
      color: #212529;
    }

    .badge-danger {
      background-color: var(--danger-color);
      color: white;
    }

    /* Tabs */
    .nav-tabs {
      border-bottom: 1px solid #dee2e6;
      margin-bottom: 20px;
    }

    .nav-tabs .nav-item {
      margin-bottom: -1px;
    }

    .nav-tabs .nav-link {
      padding: 10px 20px;
      border: 1px solid transparent;
      border-radius: 5px 5px 0 0;
      color: #495057;
      font-weight: 500;
    }

    .nav-tabs .nav-link.active {
      color: var(--primary-color);
      background-color: white;
      border-color: #dee2e6 #dee2e6 #fff;
    }

    /* Messages Section */
    .message-item {
      padding: 15px;
      border-bottom: 1px solid #eee;
      transition: all 0.3s;
    }

    .message-item:hover {
      background-color: #f8f9fa;
    }

    .message-item.unread {
      background-color: #f0f7ff;
    }

    .message-sender {
      font-weight: 600;
      margin-bottom: 5px;
    }

    .message-subject {
      font-weight: 500;
      margin-bottom: 5px;
    }

    .message-preview {
      color: #6c757d;
      font-size: 0.9rem;
    }

    .message-date {
      color: #6c757d;
      font-size: 0.8rem;
    }

    /* Testimonials Section */
    .testimonial-item {
      padding: 15px;
      border-bottom: 1px solid #eee;
    }

    .testimonial-author {
      font-weight: 600;
      margin-bottom: 5px;
    }

    .testimonial-content {
      margin-bottom: 10px;
    }

    .testimonial-status {
      display: inline-block;
      padding: 3px 8px;
      border-radius: 3px;
      font-size: 0.8rem;
    }

    .testimonial-status.pending {
      background-color: #fff3cd;
      color: #856404;
    }

    .testimonial-status.approved {
      background-color: #d4edda;
      color: #155724;
    }

    /* Courses Section */
    .course-card {
      border: 1px solid #eee;
      border-radius: 8px;
      overflow: hidden;
      transition: all 0.3s;
    }

    .course-card:hover {
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .course-image {
      height: 150px;
      background-color: #eee;
      background-size: cover;
      background-position: center;
    }

    .course-body {
      padding: 15px;
    }

    .course-title {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .course-meta {
      color: #6c757d;
      font-size: 0.9rem;
      margin-bottom: 10px;
    }

    /* News Section */
    .news-item {
      margin-bottom: 20px;
      border-bottom: 1px solid #eee;
      padding-bottom: 20px;
    }

    .news-title {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .news-date {
      color: #6c757d;
      font-size: 0.9rem;
      margin-bottom: 10px;
    }

    .news-excerpt {
      margin-bottom: 10px;
    }

    /* Modal */
    .modal-content {
      border-radius: 8px;
      border: none;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }

    .modal-header {
      border-bottom: 1px solid #eee;
      padding: 15px 20px;
    }

    .modal-footer {
      border-top: 1px solid #eee;
      padding: 15px 20px;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .sidebar {
        transform: translateX(-100%);
      }
      
      .sidebar.active {
        transform: translateX(0);
      }
      
      .main-content {
        margin-left: 0;
      }
      
      .mobile-menu-btn {
        display: block;
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #b9dda3;
        color: white;
        border: none;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        font-size: 1.2rem;
      }
    }

    @media (max-width: 768px) {
      .stats-container {
        grid-template-columns: 1fr 1fr;
      }
      
      .table th, .table td {
        padding: 8px 10px;
      }
    }

    @media (max-width: 576px) {
      .stats-container {
        grid-template-columns: 1fr;
      }
      
      .top-nav {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .user-menu {
        margin-top: 10px;
      }
    }
    .btn-cef-green {
    background-color: #adcd62 !important;
    color: #ffffff !important;
    }
    .btn-cef-green:hover {
    background-color: #aabb82 !important;
    }
  </style>
@yield('style')
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar bg-white shadow-sm">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    <img src="{{ asset("assets/img/Logo_CEFPREPAS.JPG") }}" alt="CEFPREPAS">
                </a>
            </div>
            <nav class="sidebar-menu">               
              <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.messages.index') }}" class="{{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
                        <i class="bi bi-envelope"></i> Messages 
                        <span class="badge bg-danger">5</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.inscriptions.index') }}" class="{{ request()->routeIs('admin.inscriptions.*') ? 'active' : '' }}">
                        <i class="bi bi-file-earmark-person"></i> Inscriptions 
                    </a>
                </li>
                <li>
                    <a href=" {{ route('admin.testimonies.index') }} " class="{{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                        <i class="bi bi-chat-square-quote"></i> Testimoniages
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.formations.index') }}" class="{{ request()->routeIs('admin.filieres.*') ? 'active' : '' }}">
                        <i class="bi bi-book"></i> Formation
                    </a>
                </li>
                <li class="nav-item mb-2">
                  <a href="{{ route('admin.events.index') }}" class="nav-link rounded {{ request()->routeIs('admin.events.*') ? 'active' : '' }}"><i class="bi bi-newspaper me-2"></i> News</a>
                </li>
               {{-- <li class="nav-item mb-2">
                  <a href="{{ route('admin.documents.index') }}" class="nav-link rounded {{ request()->routeIs('admin.documents.*') ? 'active' : '' }}"><i class="bi bi-newspaper me-2"></i> Documents</a>
                </li> --}}
                <li class="nav-item mb-2">
                  <a href="{{ route('admin.images.index') }}" class="nav-link rounded {{ request()->routeIs('admin.images.*') ? 'active' : '' }}"><i class="bi bi-people me-2"></i> Galerie</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="{{ route('admin.partners.index') }}" class="nav-link rounded {{ request()->routeIs('admin.partners.*') ? 'active' : '' }}"><i class="bi bi-people me-2"></i> Partners</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link rounded"><i class="bi bi-gear me-2"></i> Settings</a>
                </li>
                <!-- Logout Button -->
                <li class="nav-item mt-auto">
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a href="{{ route('logout') }}" 
                        class="nav-link rounded"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                          <i class="bi bi-box-arrow-right me-2"></i> Déconnexion
                      </a>
                  </form>
                </li>
              </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        @yield('main')
        
    </div>

    <!-- Mobile Menu Button (hidden on desktop) -->
    <button class="mobile-menu-btn" id="mobileMenuBtn">
        <i class="bi bi-list"></i>
    </button>




    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle sidebar on mobile
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/service-worker.js')
                    .then((registration) => {
                        console.log('SW registered: ', registration);
                    })
                    .catch((registrationError) => {
                        console.log('SW registration failed: ', registrationError);
                    });
            });
        }
    </script>
    @yield('script')

</body>
</html>
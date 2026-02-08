<!DOCTYPE html>
<html>
<head>
    <title>Super Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
        <span class="navbar-brand fw-bold">
            Platform Dashboard (Super Admin)
        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-light btn-sm">
                Logout
            </button>
        </form>
    </div>
</nav>

<div class="container mt-4">

    <div class="mb-4">
        <h4>Welcome, {{ auth()->user()->name }}</h4>
        <p class="text-muted mb-0">
            Role: <strong>SUPER ADMIN</strong>
        </p>
    </div>

    <div class="row g-3">

        {{-- Organizations --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Organizations</h5>
                    <p class="card-text">
                        View and manage all client organizations.
                    </p>
                    <a href="/organizations" class="btn btn-primary">
                        Manage Organizations
                    </a>
                </div>
            </div>
        </div>

        {{-- Employees --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Employees</h5>
                    <p class="card-text">
                        View employees across all organizations.
                    </p>
                    <a href="/employees" class="btn btn-success">
                        View Employees
                    </a>
                </div>
            </div>
        </div>

        {{-- Leads --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Leads / CRM</h5>
                    <p class="card-text">
                        View and manage leads across organizations.
                    </p>
                    <a href="/leads" class="btn btn-warning">
                        View Leads
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>

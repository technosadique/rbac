<!DOCTYPE html>
<html>
<head>
    <title>Organization Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-light bg-white shadow-sm">
    <div class="container">
        <span class="navbar-brand fw-bold">
            Organization Dashboard
        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger btn-sm">Logout</button>
        </form>
    </div>
</nav>

<div class="container mt-4">

    <div class="mb-4">
        <h4>Welcome, {{ auth()->user()->name }}</h4>
        <p class="text-muted mb-0">
            Role: <strong>{{ strtoupper(auth()->user()->role) }}</strong>
        </p>
    </div>

    <div class="row g-3">

        {{-- Employee Module --}}
        @if(in_array(auth()->user()->role, ['org_admin', 'org_hr']))
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Employee Module</h5>
                        <p class="card-text">
                            Manage organization employees
                        </p>
                        <a href="/employees" class="btn btn-primary">
                            Go to Employees
                        </a>
                    </div>
                </div>
            </div>
        @endif

        {{-- Leads / CRM Module --}}
        @if(in_array(auth()->user()->role, ['org_admin', 'org_sales']))
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">CRM / Leads</h5>
                        <p class="card-text">
                            Manage sales leads
                        </p>
                        <a href="/leads" class="btn btn-success">
                            Go to Leads
                        </a>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>

</body>
</html>

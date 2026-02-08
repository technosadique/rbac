<!DOCTYPE html>
<html>
<head>
    <title>Lead Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-light bg-white shadow-sm">
    <div class="container">
        <span class="navbar-brand fw-bold">CRM / Leads</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger btn-sm">Logout</button>
        </form>
    </div>
</nav>

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            Lead Details
        </div>

        <div class="card-body">
            <p><strong>Lead Name:</strong> {{ $lead->lead_name }}</p>
            <p><strong>Company:</strong> {{ $lead->company }}</p>
            <p><strong>Phone:</strong> {{ $lead->phone }}</p>
            <p><strong>Status:</strong> {{ ucfirst($lead->status) }}</p>

            <a href="/leads" class="btn btn-secondary mt-3">
                Back to Leads
            </a>
        </div>
    </div>
</div>

</body>
</html>

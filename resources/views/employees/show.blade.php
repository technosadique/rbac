<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-light bg-white shadow-sm">
    <div class="container">
        <span class="navbar-brand fw-bold">Employee Module</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger btn-sm">Logout</button>
        </form>
    </div>
</nav>

<div class="container mt-5">
    <div class="col-md-6 mx-auto">

        <div class="card">
            <div class="card-body">
                <h4 class="mb-3">Employee Details</h4>

                <p><strong>Name:</strong> {{ $employee->name }}</p>
                <p><strong>Designation:</strong> {{ $employee->designation }}</p>
                <p><strong>Phone:</strong> {{ $employee->phone }}</p>

                <a href="/employees" class="btn btn-secondary">
                    Back
                </a>
            </div>
        </div>

    </div>
</div>

</body>
</html>

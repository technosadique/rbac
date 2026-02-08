<!DOCTYPE html>
<html>
<head>
    <title>Leads</title>
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

<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h3>Leads</h3>
        <a href="/leads/create" class="btn btn-primary">Add Lead</a>
    </div>

    <table class="table table-bordered bg-white">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Lead Name</th>
                <th>Company</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @forelse($leads as $lead)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $lead->lead_name }}</td>
                <td>{{ $lead->company }}</td>
                <td>{{ $lead->phone }}</td>
                <td>
                    <span class="badge bg-info text-dark">
                        {{ ucfirst($lead->status) }}
                    </span>
                </td>
                <td>
                    <a href="/leads/{{ $lead->id }}" class="btn btn-sm btn-info">
                        View
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center text-muted">
                    No leads found
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

</body>
</html>

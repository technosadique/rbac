<!DOCTYPE html>
<html>
<head>
    <title>Organizations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-light bg-white shadow-sm">
    <div class="container">
        <span class="navbar-brand mb-0 h5">Organizations Module</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger btn-sm">
                Logout
            </button>
        </form>
    </div>
</nav>

<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h3>Organizations (Platform)</h3>

        <a href="/platform/dashboard" class="btn btn-primary">
            Back to Dashboard
        </a>
    </div>

    <table class="table table-bordered bg-white">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Organization Name</th>
                <th>Created At</th>
            </tr>
        </thead>

        <tbody>
            @forelse($organizations as $org)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $org->name }}</td>
                    <td>{{ $org->created_at->format('d M Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center text-muted">
                        No organizations found
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post - ItStuffSolutions.io</title>

    <!-- ✅ Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h3 class="mb-4">Create New Post- ItStuffSolutions.io</h3>

        <!-- Success message -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form -->
        <form action="{{ route('store') }}" method="POST">
            @csrf

            <!-- Select User -->
            <div class="mb-3">
                <label for="user_id" class="form-label">Select User</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    <option value="">-- Choose User --</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} </option>
                    @endforeach
                </select>
            </div>

            <!-- Post Title -->
            <div class="mb-3">
                <label class="form-label">Post Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter post title" required>
            </div>

            <!-- Post Description -->
            <div class="mb-3">
                <label class="form-label">Post Description</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Enter post description" required></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

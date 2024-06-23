<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input NBI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-outline {
            border: 3px solid #000; 
        }
        .thick-outline {
            outline: 3px solid #000;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 card-outline">
            <form action="{{ route('generate.surat') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nbi" class="form-label" style="font-weight: bold;">NBI </label>
                    <input type="text" class="form-control thick-outline" id="nbi" name="nbi" required>
                </div>
                <button type="submit" class="btn btn-primary">Cetak Surat</button>
            @error('nbi')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
            </form>
        </div>
    </div>
</body>
</html>
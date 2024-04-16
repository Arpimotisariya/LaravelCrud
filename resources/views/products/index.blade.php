<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #ffffff;
        }
        .container {
            margin-top: 20px;
        }
        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
        }
        .btn-dark:hover {
            background-color: #23272b;
            border-color: #23272b;
        }
        .table {
            background-color: #ffffff;
        }
        .table th, .table td {
            border: 1px solid #dee2e6;
        }
        .table th {
            background-color: #343a40;
            color: #ffffff;
        }
        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
        .btn-sm i {
            font-size: 0.9rem;
        }
    </style>
  <title>PRODUCT LIST</title>
</head>

<body>


  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" href="{{route('products.index')}}">Product</a>
      </li>
    </ul>
  </nav>
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

  <div class="container">

    <a href="{{ route('products.create') }}" class="btn btn-dark mt-2">Add New product</a>

    <table class="table table-hover my-5">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($product as $product)
        <tr>
          <td>{{ $loop->index+1 }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-dark btn-sm"><i
                class="fas fa-edit"></i></a>
            <a href="{{ route('products.delete', $product->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"
                aria-hidden="true"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>  
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
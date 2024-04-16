<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>PRODUCT EDIT</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('products.index') }}">Product</a>
            </li>
        </ul>
    </nav>

    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong> {{ $message }} </strong>
    </div>
    @endif

    <div class="container mt-2">
        <div class="card mt-3 p-2">
            <h3 class="text-muted">Product Edit #{{$product->id}}</h3>
            <form action="{{ route('products.update', $product->id) }}" method="POST" id="productEditForm">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name"
                        value="{{ old('name' , $product->name) }}" />
                    <span id="nameError" class="text-danger"></span>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"
                        placeholder="Enter product description">{{ old('description' ,$product->description) }}</textarea>
                    <span id="descriptionError" class="text-danger"></span>
                </div>
                <button class="btn btn-dark" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#productEditForm').validate({
                errorElement: "span", 
                errorPlacement: function (error, element) {
                    error.addClass("text-danger");
                    error.attr('role', 'alert'); 
                    error.insertAfter(element); 
                },
                rules: {
                    name: {
                        required: true
                    },
                    description: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "Please enter product name"
                    },
                    description: {
                        required: "Please enter product description"
                    }
                }
            });
        });
    </script>
</body>

</html>

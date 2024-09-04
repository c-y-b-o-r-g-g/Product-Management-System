<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Product</h1>
        
        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form to edit a product -->
        <form action="{{ route('updateProduct', $product->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Product Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
            </div>
            <div class="mb-3">
                <label for="discount" class="form-label">Product Discount</label>
                <input type="number" class="form-control" id="discount" name="discount" value="{{ $product->discount }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</body>
</html>
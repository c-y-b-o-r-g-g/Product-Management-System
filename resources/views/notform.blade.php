<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Add New Product</h1>
    
    <div id="success-message" class="alert alert-success" style="display:none;">
        Product created successfully!
    </div>
    
    <form id="product-form" action="{{ route('adder') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        </div>
        
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="discount" class="form-label">Discount (%)</label>
            <input type="text" name="discount" id="discount" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>

<!-- Bootstrap JS (Optional, for any Bootstrap components that require JavaScript) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Optional: JavaScript for form handling -->
<script>
    document.getElementById('product-form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Add form submission logic here
        document.getElementById('success-message').style.display = 'block';
    });
</script>

</body>
</html>
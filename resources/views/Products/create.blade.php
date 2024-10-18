<h2>Create a product</h2>
@csrf
<form action="{{ route('products.store')}}" method="POST">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="description">Description</label>
    <input type="text" id="description" name="description" required><br><br>

    <label for="price">Price</label>
    <input type="number" id="price" name="price" required><br><br>

    <button type="submit">Save</button>

</form>

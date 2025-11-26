<h1>Add New Item</h1>

<form action="{{ route('items.store') }}" method="POST">
    @csrf

    <div style="margin-bottom: 10px">
        <label>Name:</label>
        <input type="text" name="name" required />
    </div>

    <div style="margin-bottom: 10px">
        <label>Description:</label>
        <textarea name="description"></textarea>
    </div>

    <div style="margin-bottom: 10px">
        <label>Serial Number:</label>
        <input type="text" name="serial_number" required />
    </div>

    <div style="margin-bottom: 10px">
        <label>Price:</label>
        <input type="number" name="price" step="0.01" required />
    </div>

    <div style="margin-bottom: 10px">
        <label>Quantity:</label>
        <input type="number" name="quantity" required />
    </div>

    <button type="submit">Save</button>
</form>

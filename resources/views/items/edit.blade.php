<h1>Edit Item</h1>

<form action="{{ route('items.update', $item->id) }}" method="POST">
    @csrf @method('PUT')
    <div style="margin-bottom: 10px">
        <label>Name:</label>
        <input type="text" name="name" value="{{ $item->name }}" required />
    </div>

    <div style="margin-bottom: 10px">
        <label>Description:</label>
        <textarea name="description">{{ $item->description }}</textarea>
    </div>

    <div style="margin-bottom: 10px">
        <label>Serial Number:</label>
        <input
            type="text"
            name="serial_number"
            value="{{ $item->serial_number }}"
            disabled
        />
    </div>

    <div style="margin-bottom: 10px">
        <label>Price:</label>
        <input
            type="number"
            name="price"
            step="0.01"
            value="{{ $item->price }}"
            required
        />
    </div>

    <div style="margin-bottom: 10px">
        <label>Quantity:</label>
        <input
            type="number"
            name="quantity"
            value="{{ $item->quantity }}"
            required
        />
    </div>

    <button type="submit">Update Item</button>
</form>

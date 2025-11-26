<h1>Inventory List</h1>

<div style="margin-bottom: 20px">
    <a href="{{ route('items.create') }}">Add New Item</a>
</div>

<table
    border="1"
    cellpadding="10"
    cellspacing="0"
    style="width: 100%; text-align: left"
>
    <thead>
        <tr>
            <th>Name</th>
            <th>Serial Number</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->serial_number }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->description }}</td>
            <td>
                <a href="{{ route('items.edit', $item->id) }}">Edit</a>
                <form
                    action="{{ route('items.destroy', $item->id) }}"
                    method="POST"
                    style="display: inline"
                    onsubmit="return confirm('Are you sure?');"
                >
                    @csrf @method('DELETE')
                    <button type="submit" style="color: red">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

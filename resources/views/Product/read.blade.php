{{-- @extends('layout.app') --}}
<h2>List Products</h2>
<a href="{{ url('products/create')}}" class="btn btn-primary pull-right">Add Product</a>
<div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->description}}</td>
                <td>
                    {{ $item->price}}
                </td>
                <td>
                    <a href="{{ url('products/'.$item->id.'/edit')}}" class="btn btn-primary">Edit</a>
                    <a href="{{ url('products/'.$item->id.'/delete')}}" class="btn btn-danger">Delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

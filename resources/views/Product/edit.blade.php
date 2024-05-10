{{-- @extends('layout.app') --}}
<form action="{{ url('products/'.$product->id.'/edit')}}" method="post">
    @csrf
    <div class="mb-3">
        <label>Category Name</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name}}">
    </div>
    <div class="mb-3">
        <label>Category Description</label>
        <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="text" name="price" class="form-control" value="{{ $product->price}}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

@extends('welcome')
@section('content')
    <div class="col-md-12">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Category:</label>
                    <select name="category_id[]" id="cate" multiple class="form-control">
                        @foreach ($categories as $cate)
                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Description:</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Quantity:</label>
                    <input type="number" name="qty" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Quantity:</label>
                    <input type="checkbox" name="status">
                </div>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
@endsection
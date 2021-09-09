@extends('welcome')
@section('content')
    <div class="col-md-12">
        <form action="{{ route('category.update',['id' => $category->id]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" value="{{ $category->name }}" name="name" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mt-3">
                    <label>Status</label>
                    <input type="checkbox" {{ $category->status == config('common.status.active') ? 'checked' : ''}} name="status">
                </div>
            </div>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
@endsection

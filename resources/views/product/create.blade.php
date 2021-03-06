@extends('welcome')
@section('content')
    <div class="col-md-12">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>{{ __('quicktask.label.name') }}:</label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>{{ __('quicktask.label.category') }}:</label>
                    <select name="category_id[]" id="cate" multiple class="form-control">
                        @foreach ($categories as $cate)
                            @if ($cate->status == config('common.status.active'))
                                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>{{ __('quicktask.label.description') }}:</label>
                    <input type="text" name="description" class="form-control">
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>{{ __('quicktask.label.qty') }}:</label>
                    <input type="number" name="qty" class="form-control">
                    @error('qty')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>{{ __('quicktask.label.status') }}:</label>
                    <input type="checkbox" name="status">
                </div>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="{{ __('action.submit') }}">
            </div>
        </form>
    </div>
@endsection

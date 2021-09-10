@extends('welcome')
@section('content')
    <div class="col-md-12">
        <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label>{{ __('quicktask.label.name') }}:</label>
                    <input type="text" name="name" value="{{ $product->name }}"class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>{{ __('quicktask.label.category') }}:</label>
                    <select name="category_id[]" id="cate" multiple class="form-control">
                        @foreach ($categories as $cate)
                            @if (in_array($cate->id, $arrIdCate))
                                <option selected value="{{ $cate->id }}">{{ $cate->name }}</option>
                            @else
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
                    <input type="text" value="{{ $product->description }}" name="description" class="form-control">
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>{{ __('quicktask.label.qty') }}:</label>
                    <input type="number" value="{{ $product->qty }}"name="qty" class="form-control">
                    @error('qty')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>{{ __('quicktask.label.status') }}:</label>
                    <input type="checkbox" {{ $product->status == config('common.status.active') ? 'checked' : '' }} name="status">
                </div>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="{{ __('action.submit') }}">
            </div>
        </form>
    </div>
@endsection

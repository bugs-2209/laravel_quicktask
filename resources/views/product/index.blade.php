@extends('welcome')
@section('content')
    <div>
        <a href="{{ route('product.create') }}" class="btn btn-success">{{ __('action.create') }}</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">{{ __('quicktask.colums.stt') }}</th>
                <th scope="col">{{ __('quicktask.colums.product_name') }}</th>
                <th scope="col">{{ __('quicktask.colums.qty') }}</th>
                <th scope="col">{{ __('quicktask.colums.category_name') }}</th>
                <th scope="col">{{ __('quicktask.colums.status') }}</th>
                <th scope="col">{{ __('quicktask.colums.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>
                        @foreach ($product->categories as $category)
                            {{ $category->name }} </br>
                        @endforeach
                    </td>
                    <td>Onl</td>
                    <td>
                        <a href="#"class="btn btn-primary">{{ __('action.edit') }}</a>
                    </td>
                    <td>
                        <form action="#" method="post">
                            <button type="submit" class="btn btn-danger">{{ __('action.delete') }}</button> 
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

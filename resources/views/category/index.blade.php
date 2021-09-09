@extends('welcome')
@section('content')
    @if (session('notification'))
        <div class="alert alert-success">
            {{ session('notification') }}
        </div>
    @endif
    <div>
        <a href="{{ route('category.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">{{ __('quicktask.colums.stt') }}</th>
                <th scope="col">{{ __('quicktask.colums.category_name') }}</th>
                <th scope="col">{{ __('quicktask.colums.status') }}</th>
                <th scope="col">{{ __('quicktask.colums.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $cate)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $cate->name }}</td>
                    @if ($cate->status == config('common.status.active'))
                        <td><span class="badge badge-success">{{ __('quicktask.status.active') }}</span></td>
                    @else
                        <td><span class="badge badge-danger">{{ __('quicktask.status.deactive') }}</span></td>
                    @endif
                    <td>
                        <a href="{{ route('category.edit', ['id' => $cate->id]) }}"class="btn btn-primary">{{ __('action.edit') }}</a>
                    </td>
                    <td>
                        <form action="{{ route('category.delete', ['id' => $cate->id]) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">{{ __('action.delete') }}</button> 
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

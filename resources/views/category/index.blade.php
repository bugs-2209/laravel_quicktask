@extends('welcome')
@section('content')
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
            <tr>
                <th scope="row">1</th>
                <td>Cate1</td>
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
        </tbody>
    </table>
@endsection

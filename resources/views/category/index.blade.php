@extends('welcome')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cate1</td>
                <td>Onl</td>
                <td>
                    <a href="#"class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="#" method="post">
                        <button type="submit" class="btn btn-danger">Delete</button> 
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection

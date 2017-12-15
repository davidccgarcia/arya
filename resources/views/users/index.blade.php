@extends('layouts.app')

@section('content')
<h1 class="page-header">
    Dashboard
</h1>
@if (count($users) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Users</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($users as $user)
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endif
@endsection

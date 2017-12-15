<table>
    <thead>
        <th>ID</th>
        <th>name</th>
        <th>email</th>
    </thead>
@foreach ($users as $user)
    <tr>
        <th>{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
@endforeach
</table>
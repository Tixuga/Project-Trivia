<table class="table table-bordered table-dark">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Points</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->points }}</td>
    </tr>
    @endforeach
</table>
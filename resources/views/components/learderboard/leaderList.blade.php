<table class="table table-bordered table-dark">
    <tr>
        <th>Ranking</th>
        <th>Username</th>
        <th>Points</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{++$i}}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->points }}</td>
    </tr>
    @endforeach
</table>
{{-- {{ $users->links() }} --}}

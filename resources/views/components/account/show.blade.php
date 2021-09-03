<table class="table table-bordered table-dark">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Points</th>
        <th></th>
        
    </tr>
    <tr>
        <td>{{ $users->name }}</td>
        <td>{{ $users->email }}</td>
        <td>{{ $users->points }}</td>
        <td><a href="/edit_user"><button type="button" class="btn btn-success">Edit</button></a></td> 
            <form action="/user/{{$users->id}}/delete" method="post">
                @csrf
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete Account</button></td>
            </form>
    </tr>
</table>
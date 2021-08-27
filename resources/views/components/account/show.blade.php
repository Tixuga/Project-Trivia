<table class="table table-bordered table-dark">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Points</th>
        <th>Actions</th>
        
    </tr>
    <tr>
        <td>{{ $users->name }}</td>
        <td>{{ $users->email }}</td>
        <td>{{ $users->points }}</td>
        <td><a href="/editUser"><button type="button" class="btn btn-danger">Edit</button></a> 
            <form action="/user/{{$users->id}}/delete" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Account</button>
            </form>
         </td>
        
    </tr>
</table>
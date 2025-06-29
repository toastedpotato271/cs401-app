<div>
    <a href={{route('roles.create')}}>Create New Role</a>
    <table style="border: 2px solid black">
        <tr>
            <th style="border: 2px solid black">Role Name</th>
            <th style="border: 2px solid black" colspan="3">Actions</th>
        </tr>
        @foreach ($roles as $role)
        <tr>
            <td style="border: 2px solid black">{{$role->description}}</td>
            <td style="border: 2px solid black"><a href={{route('roles.show', $role->id)}}>Details</a></td>
            <td style="border: 2px solid black"><a href={{route('roles.edit', $role->id)}}>Edit</a></td>
            <td style="border: 2px solid black">
                <form action={{route('roles.destroy', $role->id)}} method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onClick="return 
                                    confirm('Are you sure you want to delete this role?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
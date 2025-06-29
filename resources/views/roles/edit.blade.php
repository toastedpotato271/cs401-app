<div>
    <form action={{route('roles.update', $role->id)}} method="POST">
        @csrf
        @method('PUT')
        <label for="role_name">Role Name: </label>
        <input type="text" id="role_name" name="role_name" value={{$role->role_name}} />
        <label for="description">Description: </label>
        <textarea id="description" name="description" rows="5" cols="30">
            {{$role->description}}
        </textarea>
        <button type="submit">Update</button>
        <a href={{route('roles.index')}}>Back</a>
    </form>
</div>
<div>
    <label for="role_name">Role Name: </label>
    <input type="text" id="role_name" disabled value={{$role->role_name}} />
    <label for="description">Description: </label>
    <textarea id="description" disabled>{{$role->description}}</textarea>
    <a href={{route('roles.index')}}>Back</a>
</div>
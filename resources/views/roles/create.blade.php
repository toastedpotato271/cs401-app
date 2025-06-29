<div>
    <form action={{route('roles.store')}} method="POST">
        @csrf
        <label for="role_name">Role Name: </label>
        <input type="text" id="role_name" name="role_name" />
        <label for="description">Description: </label>
        <textarea id="description" name="description" rows="5" cols="30">
        </textarea>
        <button type="submit">Save</button>
        {{-- <button type="button" onclick="window.location.href='{{ route('roles.index') }}'">Back</button>
        --}}
        <a href={{route('roles.index')}}>Back</a>
    </form>
</div>
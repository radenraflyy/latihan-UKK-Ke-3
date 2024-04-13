<table class="table table-striped" id="table1">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>fullname</th>
            <th>address</th>
            <th>email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->role->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

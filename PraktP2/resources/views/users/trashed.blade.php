<h2>User Terhapus</h2>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <form action="{{ route('users.restore', $user->id) }}" method="POST">
                @csrf
                <button type="submit">Restore</button>
            </form>
            <form action="{{ route('users.forceDelete', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus Permanen</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ route('users.index') }}">Kembali</a>

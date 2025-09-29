<h2>Daftar User Aktif</h2>
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
            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Soft Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ route('users.trashed') }}">Lihat User Terhapus</a>

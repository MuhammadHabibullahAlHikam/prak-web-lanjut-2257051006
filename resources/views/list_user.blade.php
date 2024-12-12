
    @extends('Layout.app')

    @section ('content')
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
<!--
    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
-->
    <div class="row">
    @foreach ($users as $user) 
    
        <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('upload/img/'. $user->foto)}}" alt="Foto User" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user['nama'] }}</h5>
                        <p class="card-text">
                            NPM: {{ $user['npm'] }}<br>
                            Kelas: {{ $user['nama_kelas'] }}<br>
                            Jurusan: {{ $user['jurusan'] }}<br>
                            Semester: {{ $user['semester'] }}
                        </p>
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{route('user.destroy', $user['id']) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                            onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
<!--
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
                <img src="{asset('',$user->foto)}}" alt="Foto User" width="50">
            </td>
            <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm">View</a>
            <a href="{{route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{route('user.destroy', $user['id']) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type = "submit" class = "btn btn-danger btn-sm" 
                            onclick= "return confirm('Apakah anda yakin ingin menghpus user ini?')">Delete</button> 
                        </form>
        </tr>

    }
 
    </tbody>
    </table>
-->
    @endsection



@extends('Layout.app')
    @section('content')
    <div>
        <!-- Isi Section -->
        <form action="{{ route('user.update', $user['id']) }}}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama', $user->nama)}}"><br>

            <label for="npm" class="form-label">NPM : </label>
                <input type="text" class="form-control" id="npm" name="npm" value="{{old('npm', $user->npm)}}"><br>

            <label for="kelas_id" class="form-label">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-select">
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" 
                    {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                            </option>
                            @endforeach
                        </select>
                            @foreach ($errors->get('kelas_id') as $msg)
                        <p class="text-danger small">{{$msg}}</p>
                @endforeach

                <label for="jurusan" >Jurusan: </label>
                <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan') }}"><br>
            @foreach ($errors->get('jurusan') as $msg)
                <p class="text-danger small">{{$msg}}</p><br>
            @endforeach
                
            <label for="semester" >Semester: </label>
                <input type="text" id="semester" name="semester" value="{{ old('semester') }}"><br>
            @foreach ($errors->get('semester') as $msg)
                <p class="text-danger small">{{$msg}}</p><br>
            @endforeach
            

                <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" id="foto" name="foto">
                @if ($user->foto)
                <img src="{{asset($user->foto)}}" alt="User Photo" width="100" class="mt-2">
                @endif
            </div>
            
            <button type="submit">Submit</button>
        </form>
    </div>
    @endsection


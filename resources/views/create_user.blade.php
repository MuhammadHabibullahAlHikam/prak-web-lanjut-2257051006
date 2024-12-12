@extends('Layout.app')
    @section('content')
    <div>
        <!-- Isi Section -->
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama"><br>
            <label for="npm">NPM : </label>
                <input type="text" id="npm" name="npm"><br>
            <label for="kelas">Kelas :</label>
                <select name="kelas_id" id="kelas_id">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select><br>

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
            
            <label for="foto">foto: </label><br>
            <input type="file" id="foto" name="foto"><br><br>
            
                <button type="submit" >Submit</button>
        </form>
    </div>
    @endsection

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
   <link rel="stylesheet" href="{{ asset('assets/css/create_user.css') }}">
  <title>Create User</title>
</head>
<body>
  <h1>Create User</h1>

  
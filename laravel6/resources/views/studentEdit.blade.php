<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PrakLaravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Laravel</a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            
          <li class="nav-item">
              <a class="nav-link" href="/">Beranda</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/mahasiswa/create">Tambah</a>
            </li>

          </ul>
        </div>
      </nav>

      <div class="container">
          @yield('content')
      </div>
      
    <div class="container">
        <h1>Edit Mahasiswa</h1>
        <form action="/mahasiswa/{{$student->id}}/edit" method="post">
            @csrf
            @method('put')

            <label for="nim">NIM</label>
            <input value="{{$student->nim}}" type="text" name="nim" id="nim" required>

            <br>

            <label for="name">Name</label>
            <input value="{{$student->name}}" type="text" name="name" id="name" required>

            <br>

            <label for="gender">Gender</label>
            <select name="gender" required id="">
                <option value="#">Pilih</option>
                <option selected value="{{$student->gender}}">
                    {{$student->gender}}
                </option>

                @foreach ($gender as $g)
                    <option value="{{$g}}">
                        {{$g}}
                    </option>
                @endforeach
            </select>

            <br>

            <label for="departement">Jurusan</label>
            <select name="departement" required id="">
                <option value="#">Pilih</option>
                <option selected value="{{$student->departement}}">
                    {{$student->departement}}
                </option>

                @foreach ($departement as $d)
                    <option value="{{$d}}">
                        {{$d}}
                    </option>
                @endforeach
            </select>

            <br>

            <label for="address">Address</label>
            <input value="{{$student->address}}" type="text" name="address" id="address" required>

            <br>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
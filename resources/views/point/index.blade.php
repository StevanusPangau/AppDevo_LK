@extends('template')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POINTS</title>
</head>
<body>
<h1>POINT</h1>
    <a href="{{url('/admin/points/create')}}"> + tambah Data baru</a>
    <br/>
    <br/>

    <table border="1" class="table">
        <thead class="table-dark">
    <tr>
        <th>No</th>
        <th>Mahasiswa</th>
        <th>NIM</th>
        <th>Aksi</th>
    </tr>
        </thead>
        @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->nim}}</td>
                <td>
                    <a href="{{route('points.show',$user->id)}}">Detail Poin</a>
                </td>
            </tr>
        @endforeach
    </table>
{{$users->links()}}
</body>
</main>
@endsection

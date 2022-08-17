<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail Pengumuman</title>

    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body>
    <div class="row mt-2 p-4">
        <div class="container">
            <div class="row justify-content-center">
                <form action="{{ route('pengumuman.store') }}" enctype="multipart/form-data" method="POST" class="p-4">
                    @csrf

                    <h2 class="text-center" style="color: #2D3F9F;">Tambah Pengumuman</h2>
                    <hr class="mt-4" style="color: #F0803C; height: 4px;">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="judul" class="form-label text-bold"><b>Judul Kegiatan</b></label>
                                <input type="text" class="form-control form-control-md" id="judul" placeholder="" name="judul" value="" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="penyelenggara" class="form-label mt-2 text-bold"><b>Penyelenggara</b></label>
                                <input type="text" class="form-control form-control-md" id="penyelenggara" placeholder="" name="penyelenggara" value="" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="gambar" class="form-label mt-2"><b>Poster Kegiatan</b></label>
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" required>
                                @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-4" style="color: #2D3F9F;">Deskripsi Kegiatan</h5>
                    <div class="form-group">
                        <input id="deskripsi" type="hidden" name="deskripsi" required>
                        <trix-editor input="deskripsi" class="@error('deskripsi') is-invalid @enderror"></trix-editor>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <button type="submit" name="submit" id="simpan" class="btn btn-primary mr-1 mx-2" style="float: right">Simpan</button>
                            <a href="{{ route('pengumuman.index')}}" class="btn btn-danger mr-2" style="float: right">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>

</html>
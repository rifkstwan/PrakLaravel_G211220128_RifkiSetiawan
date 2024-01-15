<html>
<head>
    <title>Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($erros->all() as $error)
        {{$error}} <br>
        @endforeach
    </div>
    @endif
    <form action="/upload/proses" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <b>File Gambar</b>
            <input type="file" name="file" id="file">
        </div>
        <div class="form-group">
            <b>Keterangan</b>
            <textarea class="form-control" name="keterangan" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Upload" class="btn btn-primary">
    </form>
</body>
</html>
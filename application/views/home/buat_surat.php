<h1 class="mt-4">Buat Surat</h1>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Buat Surat</li>
</ol>

<div class="card mb-4">
    <div class="card-header">
        Form Buat Surat
    </div>
    <div class="card-body">
        <form action="" enctype="multipart/media">

            <div class="form-group">
                <label>Judul Surat</label>
                <input type="text" class="form-control" name="judul_surat">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label>Deskripsi Surat</label>
                <textarea class="form-control" rows="3" name="deskripsi_surat"></textarea>
            </div>

            <div class="form-group">
                <label>Unggah Surat</label>
                <input type="file" class="form-control-file" name="file_surat">
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>

        </form>
    </div>
</div>
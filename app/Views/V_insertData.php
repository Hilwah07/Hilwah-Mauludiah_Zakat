<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form Mahasiswa</title>
    <style>
     body {
    background-image: url('https://mandiriamalinsani.or.id/wp-content/uploads/2019/03/HIKMAH-ZAKAT.jpg');
    background-size: 50%;
  }
</style>

</head>
<body>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card border-0 shadow">
        <div class="card-header bg-primary text-white text-center">
          <h3 class="my-3">Form Zakat</h3>
        </div>
        <div class="card-body bg-light">
          <form action="<?= base_url('data/saveData') ?>" method="post">
            <div class="form-group">
              <label for="nik">NIK</label>
              <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK Anda" required>
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda" required>
            </div>
            <div class="form-group">
              <label for="no_telpon">Nomor Telepon</label>
              <input type="text" class="form-control" id="no_telpon" name="no_telpon" placeholder="Masukan Nomor Telepon Anda" required>
            </div>
            <div class="form-group">
              <label for="jenis_zakat">Jenis Zakat</label>
              <select name="jenis_zakat" class="form-control" required>
                <option value="">-- Pilih Jenis Zakat --</option>
                <option value="zakat_fitrah">Zakat Fitrah</option>
                <option value="zakat_mal">Zakat Mal</option>
                <option value="infaq">Sedekah</option>
                <option value="infaq">Donasi</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jumlah_jiwa">Jumlah Jiwa</label>
              <input type="text" class="form-control" id="jumlah_jiwa" name="jumlah_jiwa" placeholder="Masukan Jumlah Jiwa" required>
            </div>
            <div class="form-group">
              <label for="nominal">Nominal</label>
              <input type="text" class="form-control" id="nominal" name="nominal" placeholder="Masukan Nominal Anda" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary px-4 mt-4">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
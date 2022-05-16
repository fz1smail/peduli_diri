<form action='{{ route('edit') }}' method="POST" >
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Tanggal</label>
          <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="form-group">
          <label>Waktu</label>
          <input type="time" class="form-control" id="waktu" name="waktu">
        </div>
        <div class="form-group">
          <label>Lokasi</label>
          <input type="text" class="form-control datemask" id="lokasi" name="lokasi">
        </div>
        <div class="form-group">
          <label>Suhu Tubuh</label>
          <input type="text" class="form-control" id="suhu" name="suhu">
        </div>
      <div class="card-body">
          <button class="btn btn-primary">Simpan</button>
          <button class="btn btn-dark">Batal</button>    
      </div>
    </form>
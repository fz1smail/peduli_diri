<form action='{{ route('inputPerjalanan') }}' method="POST" >
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
      {{-- <div class="form-group">
        <label class="form-label">Jenis Kelamin</label>
        <div class="selectgroup w-100">
          <label for=class="selectgroup-item">
            <input type="radio" name="kelamin" id="kelamin"  class="selectgroup-input" checked="">
            <span class="selectgroup-button" value="lakilaki">L</span>
          </label>
          <label class="selectgroup-item">
            <input type="radio" name="kelamin" id="" class="selectgroup-input">
            <span class="selectgroup-button" value="perempuan">P</span>
          </label>
        </div>
      </div> --}}
    <div class="card-body">
        <button class="btn btn-primary">Simpan</button>
        <button class="btn btn-dark">Batal</button>    
    </div>
  </form>
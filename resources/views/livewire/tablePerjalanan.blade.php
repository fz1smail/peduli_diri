
<div class="card-body">
  <table class="table">
    <thead>
      @php
          $a = 1
      @endphp
      <tr>
        <th scope="col">NO</th>
        {{-- <th scope="col">User ID</th> --}}
        <th scope="col">
          Tanggal
          <span wire:click="sortBy('tanggal')" class="float-right text-sm">
            <i class="fa fa-angle-up" style="cursor: pointer" ></i>
            <i class="fa fa-angle-down text-muted" ></i>
          </span>
        </th>
        <th scope="col">
          Waktu
          <span wire:click="sortBy('waktu')" class="float-right text-sm">
            <i class="fa fa-angle-up" style="cursor: pointer" ></i>
            <i class="fa fa-angle-down text-muted" ></i>
          </span>
        </th>
        <th scope="col">Lokasi</th>
        <th scope="col">Suhu</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
      <tr>
        <th scope="row">{{$a++}}</th>
        {{-- <td>{{ $d->id_user }}</td> --}}
        <td>{{ $d->tanggal }}</td>
        <td>{{ $d->waktu }}</td>
        <td>{{ $d->lokasi }}</td>
        <td>{{ $d->suhu }}°C</td>
      </tr>
      
    </tbody>
    @endforeach
    @livewireScripts
  </table>

  
  
</div>
<div class="card-body">
    <table class="table">
      <thead class="thead-light">
        @php
            $a = 1 + (($data->currentpage()-1) * $data->perPage() )
        @endphp
        <tr>
          <th scope="col">NO</th>
          {{-- <th scope="col">User ID</th> --}}
          <th scope="col">
            @sortablelink('data', 'Tanggal')

          
          </th>
          <th scope="col">
            @sortablelink('data', 'Waktu')

          </th>
          <th scope="col">
            @sortablelink('data', 'Lokasi')
          </th>
          <th scope="col">
            @sortablelink('data', 'Suhu')
          </th>
          <th scope="col">Edit Data</th>
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
          <td>
            <a href="{{ route('editData', auth()->user()->user_id) }}">Update</a>
              
            <a href="{{ route('editData', auth()->user()->user_id) }}"></a>
          </td>
        </tr>
        
      </tbody>
      @endforeach
      @livewireScripts
    </table>
    

    
    
  </div>
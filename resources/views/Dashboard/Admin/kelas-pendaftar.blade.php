@extends('Dashboard.Admin.Layout.index')

@section('container')
<div class="card" style="width: 20rem;">
    <div class="card-body ">
      <h5 class="card-title">Kuota Kelas</h5>
      @foreach ($siswaKelas as $key => $item)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios"
                    @if ($item['siswa_kuota'] < 1) disabled @endif id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    {{ $item['nama_kelas'] }} ({{ $item['siswa_kuota'] }}/{{ $item['kuota'] }})
                </label>
            </div>
        @endforeach

        <div class="form-group text-center">
            <button class="btn btn-outline-success" class="form-control"
                type="submit">Pilih</button>
        </div>
  </div>





@endsection

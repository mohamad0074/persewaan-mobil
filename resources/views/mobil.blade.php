@extends('layouts.app')

@section('content')



<div class="card" style="padding: 15px;">

	<form action="/mobil/cari" method="GET">
		<div class="mb-4">
		<div class="input-group input-group-dynamic">
		<div class="row" style="width: 900px !important;">
              <div class="col-md-4">
                <div class="input-group input-group-dynamic mb-4">
                  <input class="form-control" type="text" name="merk" placeholder="Merk Mobil .." value="{{ old('merk') }}">
                </div>
              </div>
              <div class="col-md-4 ps-2">
                <div class="input-group input-group-dynamic">
                  <input type="text" class="form-control" name="model"  placeholder="Model Mobil">
                </div>
              </div>
              <div class="col-md-4 ps-2">
                <div class="input-group input-group-dynamic">
                  <input type="checkbox" name="tersedia" value="1"> &nbsp;&nbsp;<label >Tersedia</label>
                </div>
              </div>
            </div>

           <div style="padding-left: 30px;">
			<input type="submit" class="btn btn-primary" value="CARI">
			<a href="/mobil/tambah" class="btn btn-primary">Tambah Mobil</a>
			</div>
		</div>
	</div>
	</form>

	  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MERK</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">MODEL</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAMA</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NO. PLAT</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TARIF</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
@php $no = 1; @endphp
@foreach($mobil as $p)
        <tr>
          <td>
            <div class="d-flex px-2">
              <div>
                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2">
              </div>
              <div class="my-auto">
                <h6 class="mb-0 text-xs">{{ $p->merk }}</h6>
              </div>
            </div>
          </td>
          <td class="align-middle text-center">
            <div class="d-flex align-items-center">
              <span class="me-2 text-xs">{{ $p->model }}</span>
            </div>
          </td>
          <td class="align-middle text-center">
            <div class="d-flex align-items-center">
              <span class="me-2 text-xs">{{ $p->nama }}</span>
            </div>
          </td>
          <td>
            <span class="badge badge-dot me-4">
              <i class="bg-info"></i>
              <span class="text-dark text-xs">{{ $p->no_plat }}</span>
            </span>
          </td>
          <td>
            <p class="text-xs font-weight-normal mb-0">{{ $p->tarif }}</p>
          </td>

          <td class="align-middle">
            <button class="btn btn-link text-secondary mb-0">
              <span class="material-icons">
              more_vert
              </span>
            </button>
          </td>
        </tr>
@php $no++; @endphp
@endforeach

      </tbody>
    </table>
  </div>
  </div>

@endsection
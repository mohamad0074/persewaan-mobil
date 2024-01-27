@extends('layouts.app')

@section('content')

<section>
  <div class="container py-4">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center">Order Sewa Mobil</h3>
        <form method="post" action="/transaksi/store" enctype="multipart/form-data">
        	{{ csrf_field() }}
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <label style="margin-top: -25px !important;" class="form-label">Tanggal Awal</label>
                  <input class="form-control datepicker" name="tgl_mulai" type="date">
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group input-group-dynamic">
                  <label style="margin-top: -25px !important;" class="form-label">Tanggal Akhir</label>
                  <input class="form-control datepicker" name="tgl_akhir" type="date">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <!-- <input class="form-control" name="nama" type="text"  placeholder="Nama Mobil"> -->


                  <select name="mmid">
                    @foreach($list_mobil as $p)
                    <option value="{{ $p->mmid }}">{{ $p->nama }}</option>
                    @endforeach                    
                  </select>
                </div>
              </div>
            </div>


              <div class="col-md-12">
                <button type="submit" class="btn bg-gradient-dark w-100">Submit</button>
              </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
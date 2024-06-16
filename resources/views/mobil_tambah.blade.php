@extends('layouts.app')

@section('content')


<section>
  <div class="container py-4">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center">Tambah Mobil aku aja</h3>
        <form method="post" action="/mobil/store" enctype="multipart/form-data">
        	{{ csrf_field() }}
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <input class="form-control" name="merk" type="text"  placeholder="Merk Mobil">
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <div class="input-group input-group-dynamic">
                  <input type="text" class="form-control" name="model"  placeholder="Model Mobil">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <input class="form-control" name="nama" type="text"  placeholder="Nama Mobil">
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <div class="input-group input-group-dynamic">
                  <input type="checkbox" name="tersedia" value="1"> &nbsp;&nbsp;<label >Tersedia</label>
                </div>
              </div>
            </div>
            <!-- <div class="mb-4">
              <div class="input-group input-group-dynamic">
                <label class="form-label">Nama Mobil</label>
                <input type="email" class="form-control">
              </div>
            </div> -->
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <input class="form-control" name="no_plat" type="text"   placeholder="No. Plat">
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <div class="input-group input-group-dynamic">
                  <input type="number" class="form-control" name="tarif"   placeholder="Tarif / hari">
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
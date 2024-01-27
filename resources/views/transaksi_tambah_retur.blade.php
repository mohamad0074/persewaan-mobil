@extends('layouts.app')

@section('content')

<section>
  <div class="container py-4">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center">Kembalikan Mobil</h3>
        <form method="post" action="/transaksi/update_retur" enctype="multipart/form-data">
        	{{ csrf_field() }}
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <input class="form-control" name="no_plat" type="text"  placeholder="Nomor Plat">
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
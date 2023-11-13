@extends('admin.include.master')
@section('title', 'Add Vendor')
@section('content')
<!--start content-->
          <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Vendor</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Vendor Details</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <a href="{{ url('admin/vendor') }}" class="btn btn-primary">Vendor List</a>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->

               <div class="row">
                 <div class="col-lg-8 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent">
                       <h5 class="mb-0">Add New Vendor</h5>
                      </div>
                    <div class="card-body">
                      <div class="border p-3 rounded">
                      <form class="row g-3" method="post">
						@csrf
                        <div class="col-12">
                          <label class="form-label">Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Vendor Name">
                        </div>
						<div class="col-12">
                          <label class="form-label">Mobile</label>
                          <input type="text" name="mobile" class="form-control" placeholder="Mobile Number">
                        </div>
						<div class="col-12">
                          <label class="form-label">GST</label>
                          <input type="text" name="gst" class="form-control" placeholder="Vendor Gst (Optional)">
                        </div>
						<div class="col-12">
                          <label class="form-label">Address</label>
                          <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>
						<div class="col-12">
                          <label class="form-label">City</label>
                          <input type="text" name="city" class="form-control" placeholder="City">
                        </div>

                        <div class="col-12">
                          <button type="submit" class="btn btn-primary px-4">Submit</button>
                        </div>
                      </form>
                      </div>
                     </div>
                    </div>
                 </div>
              </div><!--end row-->





          </main>
       <!--end page main-->


@endsection

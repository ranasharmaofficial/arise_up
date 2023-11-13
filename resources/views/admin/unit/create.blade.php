@extends('admin.include.master')
@section('title', 'Add Unit')
@section('content')
<!--start content-->
          <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Unit</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Unit Details</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <a href="{{ url('admin/unit') }}" class="btn btn-primary">Unit List</a>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->

               <div class="row">
                 <div class="col-lg-8 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent">
                       <h5 class="mb-0">Add Unit</h5>
                      </div>
                    <div class="card-body">
                      <div class="border p-3 rounded">
                      <form class="row g-3" method="post">
						@csrf
                        <div class="col-sm-6">
                          <label class="form-label">Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Unit Name">
                        </div>
						<div class="col-sm-6">
                          <label class="form-label">Status</label>
                          <select type="text" name="status" class="form-control">
							<option value="1">Active</option>
							<option value="0">In Active</option>
						  </select>
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

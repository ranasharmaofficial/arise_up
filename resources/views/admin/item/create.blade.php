@extends('admin.include.master')
@section('title', 'Add Item')
@section('content')
<!--start content-->
          <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Item</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Item Details</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <a href="{{ url('admin/item') }}" class="btn btn-primary">Item List</a>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->

               <div class="row">
                 <div class="col-lg-10 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent">
                       <h5 class="mb-0">Add Item</h5>
                      </div>
                    <div class="card-body">
                      <div class="border p-3 rounded">
                      <form class="row g-3" method="post">
						@csrf
						<div class="col-sm-6">
                          <label class="form-label">Select Category</label>
                          <select type="text" name="category_id" class="form-control">
							<option value="1">Category Name</option>
						  </select>
                        </div>
						<div class="col-sm-6">
                          <label class="form-label">Select Unit</label>
                          <select type="text" name="unit" class="form-control">
							<option value="1">Unit</option>
						  </select>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label">Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Item Name">
                        </div>
						<div class="col-sm-6">
                          <label class="form-label">HSN Code</label>
                          <input type="text" name="hsn_code" class="form-control" placeholder="HSN Code">
                        </div>
						<div class="col-sm-6">
                          <label class="form-label">Item Code</label>
                          <input type="text" name="item_code" class="form-control" placeholder="Item Code">
                        </div>
						<div class="col-sm-6">
                          <label class="form-label">Selling Unit</label>
                          <select type="text" name="selling_unit" class="form-control">
							<option value="1">Unit</option>
						  </select>
                        </div>
						<div class="col-sm-6">
                          <label class="form-label">IGST (%)</label>
                          <input type="text" name="igst" class="form-control" placeholder="IGST Tax">
                        </div>
						<div class="col-sm-6">
                          <label class="form-label">CGST (%)</label>
                          <input type="text" name="cgst" class="form-control" placeholder="CGST Tax">
                        </div>
						<div class="col-sm-6">
                          <label class="form-label">SGST (%)</label>
                          <input type="text" name="sgst" class="form-control" placeholder="SGST Tax">
                        </div>
						<div class="col-sm-6">
                          <label class="form-label">Selling Price</label>
                          <input type="text" name="selling_price" class="form-control" placeholder="Selling Price">
                        </div>
						<div class="col-sm-12">
                          <label class="form-label">Description</label>
                          <input type="text" name="description" class="form-control" placeholder="Enter Description Price">
                        </div>
						<div class="col-sm-12">
                          <label class="form-label">Status</label>
                          <select type="text" name="status" class="form-control">
							<option value="1">Active</option>
							<option value="0">In Active</option>
						  </select>
                        </div>
                         
						 <hr>
						 
						 <div class="col-12">
							<div class="card-header">Set Vendor and Order Price</div>
						  <div class="table-responsive" id="listTable">
							<table class="table table-bordered">
						<thead>
							<tr>
								<th style="text-align:center;">#</th>
								<th>Vendor</th>
								<th style="width:15%;">Price</th>
								<th style="width:15%;">CGST</th>
								<th style="width:15%;">SGST</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="text-align:center;"><input type="checkbox" value="3" name="selectedIds[]" id="sl_3"  ></td>
								<td><input type="text" class="form-control" id="name_3" value="Vendor Name will be here" disabled></td> 
								<td> <input type="text" class="form-control" name="amt[]" placeholder="Price" id="amt_3" value="0" ></td>
								<td> <input type="text" class="form-control" name="cgst[]" placeholder="CGST" id="cgst_3" value="0" ></td>
								<td> <input type="text" class="form-control" name="sgst[]" placeholder="SGST" id="sgst_3" value="0" ></td>
							</tr>
														 
						</tbody>
					</table>
					</div>
						  
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

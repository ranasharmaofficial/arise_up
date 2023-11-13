@extends('admin.include.master')
@section('title', 'Item List')
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
                    <li class="breadcrumb-item active" aria-current="page">Item Details</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <a href="{{ url('admin/item/create') }}" class="btn btn-primary">Add Item</a>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->

               <div class="card">
                 <div class="card-body">
                   <div class="d-flex align-items-center">
                      <h5 class="mb-0">Item Details</h5>
                       <form class="ms-auto position-relative">
                         <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                         <input class="form-control ps-5" type="text" placeholder="search">
                       </form>
                   </div>
                   <div class="table-responsive mt-3">
                     <table class="table align-middle">
                       <thead class="table-secondary">
                         <tr>
                            <th>#</th>
                            <th class="text-center">Category</th>
							<th class="text-center">HSN Code</th>
							<th class="text-center">Item Code</th>
							<th class="text-center">Item Name</th>
							<th class="text-center">IGST (%)</th>
							<th class="text-center">CGST (%)</th>
							<th class="text-center">SGST (%)</th>		
							<th class="text-center">Order Unit</th>
							<th class="text-center">C Factor</th>
							<th class="text-center">Selling Unit</th>
							<th class="text-center">Selling Price</th>
                          <th>Actions</th>
                         </tr>
                       </thead>
                       <tbody>
					   <tr>
							<td >1</td>
							<td >Spare Parts</td>
							<td >NA</td>
							<td >NC</td>
							<td >Battery 150 AH</td>
							<td class="text-right">0.0000</td>							
							<td class="text-right">0.00</td>
							<td class="text-right">0.00</td>
							<td class="text-center">Pice</td>
							<td class="text-center">1.0000</td>
							<td class="text-center">Pice</td>
							<td class="text-right">25000.00</td>							
							<td>
                             <div class="table-actions d-flex align-items-center gap-3 fs-6">
                               <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                               <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                               <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                             </div>
                           </td>
						</tr>
                          
                          

                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>





          </main>
       <!--end page main-->


@endsection

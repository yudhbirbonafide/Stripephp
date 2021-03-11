@extends("layouts.admin")
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin_category_list')}}">Orders</a></li>
              <li class="breadcrumb-item active">Orders</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	@include("layouts.flash")
	<?php //dd($designer);?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<!-- /.card -->
				<div class="card">
					<!--div class="card-header">
						<div class="add_elemnt_cls"><a href="{{route('admin_category_add')}}" class="btn btn-block btn-info btn-flat">Add Product</a></div>
					</div-->
				  <!-- /.card-header -->
				  <div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
					  <thead>
					  <tr>
						<th>User Name</th>
						<th>Payment ID</th>
						<th>Amount</th>
						<th>Currency</th>
						<th>Customer ID</th>
						<th>Card Type</th>
						<th>Placed On</th>
						<th>Actions</th>						
					  </tr>
					  </thead>
					  <tbody>
					  <?php 
					  if(!empty($orders)){
					  foreach($orders as $val){?>
					  <tr>
						<td><?php echo (!empty($val['name']))?$val['name']:''?></td>
						<td><?php echo (!empty($val['payment_id']))?$val['payment_id']:''?></td>
						<td><?php echo (!empty($val['amount']))?$val['amount']:''?></td>
						<td><?php echo (!empty($val['currency']))?$val['currency']:''?></td>
						<td><?php echo (!empty($val['customer']))?$val['customer']:''?></td>
						<td><?php echo (!empty($val['card_type']))?$val['card_type']:''?></td>
						<td><?php echo (!empty($val['created_on']))?$val['created_on']:''?></td>
						<!--td><span class="badge badge-success">Success</span></td-->
						<td>
							<!--a class="btn btn-info btn-sm" href="{{route('admin_product_edit',['id'=>$val['id']])}}">
							  <i class="fas fa-pencil-alt">
							  </i>
							  Edit
							</a-->														
							<a class="btn btn-danger btn-sm" href="{{route('admin_product_delete',['id'=>$val['id']])}}">
							  <i class="fas fa-trash">
							  </i>
							  Delete
							</a>
						</td>
						
					  </tr>
					  <?php }}else{?>
						<tr>
							<td colspan="3"><p>No Record Found.</p></td>						
						</tr>					  
					  <?php }?>					                    
					  </tbody>                 
					</table>
					<br>
					<?php if(!empty($orders)){?>
					{{ $orders->links() }}
					<?php }?>
				  </div>
				  <!-- /.card-body -->
				</div>
            <!-- /.card -->
			</div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
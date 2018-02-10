<!DOCTYPE html>
<html>
<head>
	<title>Lihat Customer</title>
</head>
<body>
	<?=$this->session->flashdata('notif')?>
	<div class="table-responsive">
		<table id="table_id" class="table table-bordered table-striped table-hover">
			<thead>
				<h1 class="text-center">Daftar Customer</h1><br>
				<button class="btn btn-success" onclick="tambah_cust()"><i class="glyphicon glyphicon-plus"></i> Tanbah Customer</button><br><br>
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Phone</th>
					<th>Gender</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($show as $customer)
				{?>
					<tr>
						<td><?php echo $customer->id ?></td>
						<td><?php echo $customer->name ?></td>
						<td><?php echo $customer->address ?></td>
						<td><?php echo $customer->phone ?></td>
						<td><?php echo $customer->gender ?></td>
						<td>
							<button class="btn btn-warning" onclick="ngedit_cust(<?php echo $customer->id;?>)">Edit</button>
							<button class="btn btn-danger" onclick="ngapus_cust(<?php echo $customer->id;?>)">Hapus</button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
<!-- Bootstrap modal Edit and Add -->
	  <div class="modal fade" id="modal_form" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 class="modal-title">Customer</h3>
	      </div>
	      <div class="modal-body form">
	        <form action="#" id="form" class="form-horizontal">
	          <input type="hidden" value="" name="id"/>
	          <div class="form-body">
	            <div class="form-group">
	              <label class="control-label col-md-3">Nama</label>
	              <div class="col-md-9">
	                <input name="nama" placeholder="Nama" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">Alamat</label>
	              <div class="col-md-9">
	                <input name="alamat" placeholder="Alamat" class="form-control" type="text" required="true">
	              </div>
	            </div>
				<div class="form-group">
	              <label class="control-label col-md-3">Phone</label>
	              <div class="col-md-9">
	                <input name="phone" placeholder="Phone" class="form-control" type="tel" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">Gender</label>
	              <div class="col-md-9">
	                <input name="gender" placeholder="Gender" class="form-control" type="text" required="true">
	              </div>
	            </div>
	          </div>
	        </form>
	          </div>
	          <div class="modal-footer">
	            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
	            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
	          </div>
	        </div><!-- /.modal-content -->
	      </div><!-- /.modal-dialog -->
	    </div><!-- /.modal -->
	  <!-- End Bootstrap modal -->



		<script type="text/javascript">
	  		$(document).ready( function () {
	     	$('#table_id').DataTable();
	  		} );

	    	var save_method; //for save method string
	    	var table;

	    	function tambah_cust()
	    	{
	    		save_method = 'add';
		      	$('#form')[0].reset(); // reset form on modals
		      	$('#modal_form').modal('show'); // show bootstrap modal
		      	$('.modal-title').text('Tambah Customer'); // Set Title to Bootstrap modal title
	    	}

	    	function ngedit_cust(id)
	    	{
	      		save_method = 'update';
	      		$('#form')[0].reset(); // reset form on modals

		      	//Ajax Load data from ajax
		      	$.ajax({
			        url : "<?php echo base_url('admin/admin/edit_cust/')?>/" + id,
			        type: "GET",
			        dataType: "JSON",
			        success: function(data)
			        {
			        	$('[name="id"]').val(data.id);
			        	$('[name="nama"]').val(data.name);
			        	$('[name="alamat"]').val(data.address);	
			            $('[name="phone"]').val(data.phone);
			            $('[name="gender"]').val(data.gender);

			            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
			            $('.modal-title').text('Edit Customer'); // Set title to Bootstrap modal title

		        },
	
	    		});
	    	}

	    	function ngapus_cust(id)
		    {
		      if(confirm('Anda yakin akan menghapus customer dengan id ' + id + '?'))
		      {
		        // ajax delete data from database
		          $.ajax({
		            url : "<?php echo base_url('admin/admin/ngapus_cust')?>/"+id,
		            type: "POST",
		            dataType: "JSON",
		            success: function(data)
		            {
		               location.reload();
		            },
		            error: function (jqXHR, textStatus, errorThrown)
		            {
		                alert('Error pada saat menghapus data!');
		            }
		        });

		      }
		    }

		    function save()
		    {
		    	var url;
		      	if (save_method == 'update')
		      	{
		       		url = "<?php echo base_url('admin/admin/update_cust')?>";
		      	}
		      	else if (save_method == 'add') 
		      	{
		      		url = "<?php echo base_url('admin/admin/tambah_cust') ?>"
		      	}

		       // ajax adding data to database
		          $.ajax({
		            url : url,
		            type: "POST",
		            data: $('#form').serialize(),
		            dataType: "JSON",
		            success: function(data)
		            {
		               //if success close modal and reload ajax table
		               $('#modal_form').modal('hide');
		              location.reload();// for reload a page
		            },
		            error: function (jqXHR, textStatus, errorThrown)
		            {
		                alert('Terjadi kesalahan!');
		            }
		        });
		    }
		</script>
</html>
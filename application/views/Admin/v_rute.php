<!DOCTYPE html>
<html>
<head>
	<title>Lihat Transportasi</title>
</head>
<body>
	<?=$this->session->flashdata('notif')?>
	<div class="table-responsive">
		<table id="table_id" class="table table-bordered table-striped table-hover">
			<thead>
				<h1 class="text-center">Daftar Rute</h1><br>
				<button class="btn btn-success" onclick="tambah_rute()"><i class="glyphicon glyphicon-plus"></i> Tanbah Rute</button><br><br>
				<tr>
					<th>ID</th>
					<th>Depart At</th>
					<th>Arrive</th>
					<th>Tanggal Terbang</th>
					<th>Tanggal Kembali</th>
					<th>Rute From</th>
					<th>Rute To</th>
					<th>Harga</th>
					<th>ID Transportasi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($show as $transport)
				{?>
					<tr>
						<td><?php echo $transport->id ?></td>
						<td><?php echo $transport->depart_at ?></td>
						<td><?php echo $transport->arrive ?></td>
						<td><?php echo $transport->tanggal_terbang ?></td>
						<td><?php echo $transport->tanggal_kembali ?></td>
						<td><?php echo $transport->rute_from ?></td>
						<td><?php echo $transport->rute_to ?></td>
						<td><?php echo $transport->price ?></td>
						<td><?php echo $transport->transportationid ?></td>
						<td>
							<button class="btn btn-warning" onclick="ngedit_rute(<?php echo $transport->id;?>)">Edit</button>
							<button class="btn btn-danger" onclick="ngapus_rute(<?php echo $transport->id;?>)">Hapus</button>
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
	        <h3 class="modal-title">Rute</h3>
	      </div>
	      <div class="modal-body form">
	        <form action="#" id="form" class="form-horizontal">
	          <input type="hidden" value="" name="id"/>
	          <div class="form-body">
	            <div class="form-group">
	              <label class="control-label col-md-3">Depart At</label>
	              <div class="col-md-9">
	                <input name="depart_at" placeholder="Depart At" class="form-control" type="time" required="true">
	              </div>
	            </div>
	             <div class="form-group">
	              <label class="control-label col-md-3">Arrive</label>
	              <div class="col-md-9">
	                <input name="arrive" placeholder="Arrive" class="form-control" type="time" required="true">
	              </div>
	            </div>
	             <div class="form-group">
	              <label class="control-label col-md-3">Tanggal Terbang</label>
	              <div class="col-md-9">
	                <input name="tgl_terbang" placeholder="Tanggal Terbang" class="form-control" type="date" required="true">
	              </div>
	            </div>
	             <div class="form-group">
	              <label class="control-label col-md-3">Tanggal Kembali</label>
	              <div class="col-md-9">
	                <input name="tgl_kembali" placeholder="Tanggal Kembali" class="form-control" type="date" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">Rute From</label>
	              <div class="col-md-9">
	                <input name="rute_from" placeholder="Rute From" class="form-control" type="number" min="1" required="true">
	              </div>
	            </div>
				<div class="form-group">
	              <label class="control-label col-md-3">Rute To</label>
	              <div class="col-md-9">
	                <input name="rute_to" placeholder="Rute To" class="form-control" type="number" min="1" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">Harga</label>
	              <div class="col-md-9">
	                <input name="price" placeholder="Harga" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">ID Transportasi</label>
	              <div class="col-md-9">
	                <input name="transportation_id" placeholder="ID Transportasi" class="form-control" type="text" required="true">
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

	    	function tambah_rute()
	    	{
	    		save_method = 'add';
		      	$('#form')[0].reset(); // reset form on modals
		      	$('#modal_form').modal('show'); // show bootstrap modal
		      	$('.modal-title').text('Tambah Rute'); // Set Title to Bootstrap modal title
	    	}

	    	function ngedit_rute(id)
	    	{
	      		save_method = 'update';
	      		$('#form')[0].reset(); // reset form on modals

		      	//Ajax Load data from ajax
		      	$.ajax({
			        url : "<?php echo base_url('admin/admin/edit_rute/')?>/" + id,
			        type: "GET",
			        dataType: "JSON",
			        success: function(data)
			        {
			        	$('[name="id"]').val(data.id);
			        	$('[name="depart_at"]').val(data.depart_at);
			        	$('[name="arrive"]').val(data.arrive);
			        	$('[name="tgl_terbang"]').val(data.tanggal_terbang);
			        	$('[name="tgl_kembali"]').val(data.tanggal_kembali);
			        	$('[name="rute_from"]').val(data.rute_from);	
			            $('[name="rute_to"]').val(data.rute_to);
			            $('[name="price"]').val(data.price);
			            $('[name="transportation_id"]').val(data.transportationid);

			            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
			            $('.modal-title').text('Edit Rute'); // Set title to Bootstrap modal title

		        },
	
	    		});
	    	}

	    	function ngapus_rute(id)
		    {
		      if(confirm('Anda yakin akan menghapus data rute dengan id ' + id + '?'))
		      {
		        // ajax delete data from database
		          $.ajax({
		            url : "<?php echo base_url('admin/admin/ngapus_rute')?>/"+id,
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
		       		url = "<?php echo base_url('admin/admin/update_rute')?>";
		      	}
		      	else if (save_method == 'add') 
		      	{
		      		url = "<?php echo base_url('admin/admin/tambah_rute') ?>"
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
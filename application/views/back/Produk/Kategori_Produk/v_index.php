<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Kategori Produk</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse" id="collapseCardExample">
      <div class="card-body">
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">Tambahkan Kategori Baru :</h1>
        </div>
        <form class="kategori" action="<?php echo base_url().'back/Kategori_produk/simpan'; ?>">
          <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0">
              <input type="text" class="form-control" name="txt-nama" placeholder="Nama Kategori Baru..." autocomplete="off" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0">
              <select name = "txt-status" class="form-control" required="--Pilih Status--" >
                <option selected="">--Pilih Status--</option>
                <option value = "1">Aktif</option>
                <option value = "0">Non-Aktif</option>
              </select>
            </div>
          </div>
          <input type="submit" name="" class="btn btn-primary btn-kategori btn-block" value="Simpan">
        </form>
      </div>
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List Kategori Produk</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th>Nama Kategori</th>
              <th>Status</th>
              <th class="text-center" width="5%">Edit</th>
              <th class="text-center" width="5%">Hapus</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>Status</th>
              <th class="text-center">Edit</th>
              <th class="text-center">Hapus</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $i=0; foreach ($dt_kategori as $key) { ?>
            <tr>
              <td><?php echo $i+1 ?></td>
              <td><?php echo $dt_kategori[$i]['nama'] ?></td>
              <td><?php echo ($dt_kategori[$i]['status'] == 1)? 'Aktif' : 'Non-Aktif'; ?></td>
              <td class="text-center"><a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
              <td class="text-center"><a href="<?php echo base_url().'back/Kategori_produk/hapus?id='.$dt_kategori[$i]['id_kategori']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
            </tr>
              
            <?php $i++; } ?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">                    
                    <div class="form-group row">
                      <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="text" class="form-control" name="txt-nama" placeholder="Nama Kategori Baru..." autocomplete="off" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12 mb-3 mb-sm-0">
                        <select name = "txt-status" class="form-control" required="--Pilih Status--" >
                          <option selected="">--Pilih Status--</option>
                          <option value = "1">Aktif</option>
                          <option value = "0">Non-Aktif</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/back/js/demo/datatables-demo.js" defer></script>
<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0">Manajemen Data Pelanggan</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel">
   <div id="tablePelanggan" data-list='{"valueNames":["no","kode","nama","tipe","telepon","alamat"],"page":10,"pagination":true}'>

    <div class="row align-items-center mb-3">
     <div class="col-auto">
      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#pelangganModal">
       <span class="fas fa-plus me-2"></span>Tambah Pelanggan Baru
      </button>
     </div>
     <div class="col-auto col-sm-5 ms-auto">
      <form>
       <div class="input-group">
        <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Cari Nama Pelanggan..." aria-label="search" />
        <div class="input-group-text bg-transparent"><span class="fa fa-search fs-10 text-600"></span></div>
       </div>
      </form>
     </div>
    </div>

    <div class="table-responsive scrollbar">
     <table class="table table-bordered table-striped fs-10 mb-0">
      <thead class="bg-200">
       <tr>
        <th class="text-900 sort" data-sort="no">No</th>
        <th class="text-900 sort" data-sort="kode">Kode</th>
        <th class="text-900 sort" data-sort="nama">Nama Pelanggan</th>
        <th class="text-900 sort" data-sort="tipe">Tipe</th>
        <th class="text-900 sort" data-sort="telepon">No. Telepon</th>
        <th class="text-900 sort" data-sort="alamat">Alamat</th>
        <th class="text-900">Aksi</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="kode">CUST-001</td>
        <td class="nama">Toko Tani Jaya</td>
        <td class="tipe">Grosir</td>
        <td class="telepon">081211112222</td>
        <td class="alamat">Jl. Pasar No. 1, Kab. X</td>
        <td><a href="#" onclick="editData('CUST-001')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="kode">CUST-002</td>
        <td class="nama">Kelompok Tani Sido Makmur</td>
        <td class="tipe">Kelompok Tani</td>
        <td class="telepon">085622223333</td>
        <td class="alamat">Desa Sido Makmur, Kab. X</td>
        <td><a href="#" onclick="editData('CUST-002')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
       <tr>
        <td class="no">3</td>
        <td class="kode">CUST-003</td>
        <td class="nama">Bp. Anton (Retail)</td>
        <td class="tipe">Retail</td>
        <td class="telepon">081933334444</td>
        <td class="alamat">Jl. Mawar No. 3, Kab. X</td>
        <td><a href="#" onclick="editData('CUST-003')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
      </tbody>
     </table>
    </div>

   </div>
  </div>
 </div>
</div>

<div class="modal fade" id="pelangganModal" tabindex="-1" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="pelangganModalLabel"><span class="fas fa-plus me-2"></span>Tambah Pelanggan Baru</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <form>
     <div class="row">
      <div class="col-md-6 mb-3">
       <label class="form-label" for="pel-kode">Kode Pelanggan</label>
       <input class="form-control" id="pel-kode" type="text" placeholder="e.g., CUST-004" />
      </div>
      <div class="col-md-6 mb-3">
       <label class="form-label" for="pel-nama">Nama Pelanggan</label>
       <input class="form-control" id="pel-nama" type="text" placeholder="e.g., Toko Tani Maju" />
      </div>
     </div>
     <div class="row">
      <div class="col-md-6 mb-3">
       <label class="form-label" for="pel-tipe">Tipe Pelanggan</label>
       <select class="form-select" id="pel-tipe">
        <option>Retail</option>
        <option>Grosir</option>
        <option>Kelompok Tani</option>
       </select>
      </div>
      <div class="col-md-6 mb-3">
       <label class="form-label" for="pel-telepon">No. Telepon</label>
       <input class="form-control" id="pel-telepon" type="tel" placeholder="08xxxx" />
      </div>
     </div>
     <div class="mb-3">
      <label class="form-label" for="pel-alamat">Alamat</label>
      <textarea class="form-control" id="pel-alamat" rows="3" placeholder="Alamat lengkap pelanggan"></textarea>
     </div>
    </form>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Simpan Data</button>
   </div>
  </div>
 </div>
</div>

<script>
 var pelangganModal = new bootstrap.Modal(document.getElementById('pelangganModal'));
 function editData(kode) {
  document.getElementById('pelangganModalLabel').innerHTML = '<span class="fas fa-edit me-2"></span>Edit Pelanggan';
  document.getElementById('pel-kode').value = kode;
  document.getElementById('pel-nama').value = 'Nama Pelanggan...';
  pelangganModal.show();
 }
</script>

<?php include "footer.php";?>
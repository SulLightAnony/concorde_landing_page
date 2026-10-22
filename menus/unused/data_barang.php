<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0">Manajemen Data Barang (SKU)</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel">
   <div id="tableBarang" data-list='{"valueNames":["no","sku","nama","kategori","satuan","h_beli","h_jual"],"page":10,"pagination":true}'>

    <div class="row align-items-center mb-3">
     <div class="col-auto">
      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#barangModal">
       <span class="fas fa-plus me-2"></span>Tambah Barang Baru
      </button>
     </div>
     <div class="col-auto col-sm-5 ms-auto">
      <form>
       <div class="input-group">
        <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Cari SKU atau Nama Barang..." aria-label="search" />
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
        <th class="text-900 sort" data-sort="sku">Kode SKU</th>
        <th class="text-900 sort" data-sort="nama">Nama Barang</th>
        <th class="text-900 sort" data-sort="kategori">Kategori</th>
        <th class="text-900 sort" data-sort="satuan">Satuan</th>
        <th class="text-900 sort" data-sort="h_beli">Harga Beli</th>
        <th class="text-900 sort" data-sort="h_jual">Harga Jual</th>
        <th class="text-900">Aksi</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="sku">PUPUK-UREA-001</td>
        <td class="nama">Pupuk Urea Non-Subsidi (50kg)</td>
        <td class="kategori">Pupuk</td>
        <td class="satuan">Karung</td>
        <td class="h_beli">Rp 300.000</td>
        <td class="h_jual">Rp 320.000</td>
        <td><a href="#" onclick="editBarang('PUPUK-UREA-001')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="sku">PST-DGW-001</td>
        <td class="nama">Pestisida Dangke 40WP</td>
        <td class="kategori">Pestisida</td>
        <td class="satuan">Pcs</td>
        <td class="h_beli">Rp 45.000</td>
        <td class="h_jual">Rp 55.000</td>
        <td><a href="#" onclick="editBarang('PST-DGW-001')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
       <tr>
        <td class="no">3</td>
        <td class="sku">BIBIT-JAGUNG-001</td>
        <td class="nama">Bibit Jagung NK-212 (1kg)</td>
        <td class="kategori">Bibit</td>
        <td class="satuan">Pack</td>
        <td class="h_beli">Rp 80.000</td>
        <td class="h_jual">Rp 95.000</td>
        <td><a href="#" onclick="editBarang('BIBIT-JAGUNG-001')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
      </tbody>
     </table>
    </div>

   </div>
  </div>
 </div>
</div>

<div class="modal fade" id="barangModal" tabindex="-1" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="barangModalLabel"><span class="fas fa-plus me-2"></span>Tambah Barang Baru</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <form>
     <div class="row">
      <div class="col-md-6 mb-3">
       <label class="form-label" for="brg-sku">Kode SKU</label>
       <input class="form-control" id="brg-sku" type="text" placeholder="e.g., PUPUK-UREA-001" />
      </div>
      <div class="col-md-6 mb-3">
       <label class="form-label" for="brg-nama">Nama Barang</label>
       <input class="form-control" id="brg-nama" type="text" placeholder="e.g., Pupuk Urea Non-Subsidi (50kg)" />
      </div>
     </div>
     <div class="row">
      <div class="col-md-6 mb-3">
       <label class="form-label" for="brg-kategori">Kategori</label>
       <select class="form-select" id="brg-kategori">
        <option value="Pupuk">Pupuk</option>
        <option value="Pestisida">Pestisida</option>
        <option value="Bibit">Bibit</option>
        <option value="Alat">Alat Tani</option>
       </select>
      </div>
      <div class="col-md-6 mb-3">
       <label class="form-label" for="brg-satuan">Satuan Utama</label>
       <input class="form-control" id="brg-satuan" type="text" placeholder="e.g., Karung, Pcs, Pack, Kg" />
      </div>
     </div>
     <div class="row">
      <div class="col-md-6 mb-3">
       <label class="form-label" for="brg-h_beli">Harga Beli (Modal)</label>
       <input class="form-control" id="brg-h_beli" type="number" placeholder="Rp 0" />
      </div>
      <div class="col-md-6 mb-3">
       <label class="form-label" for="brg-h_jual">Harga Jual</label>
       <input class="form-control" id="brg-h_jual" type="number" placeholder="Rp 0" />
      </div>
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
 var barangModal = new bootstrap.Modal(document.getElementById('barangModal'));
 function editBarang(sku) {
  // Simulasi load data
  document.getElementById('barangModalLabel').innerHTML = '<span class="fas fa-edit me-2"></span>Edit Barang';
  document.getElementById('brg-sku').value = sku;
  if(sku === 'PUPUK-UREA-001'){
    document.getElementById('brg-nama').value = 'Pupuk Urea Non-Subsidi (50kg)';
  } else {
    document.getElementById('brg-nama').value = 'Nama Barang...';
  }
  barangModal.show();
 }
</script>

<?php include "footer.php";?>
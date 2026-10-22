<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0">Manajemen Data Supplier</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel">
   <div id="tableSupplier" data-list='{"valueNames":["no","kode","nama","sales","telepon","alamat"],"page":10,"pagination":true}'>

    <div class="row align-items-center mb-3">
     <div class="col-auto">
      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#supplierModal">
       <span class="fas fa-plus me-2"></span>Tambah Supplier Baru
      </button>
     </div>
     <div class="col-auto col-sm-5 ms-auto">
      <form>
       <div class="input-group">
        <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Cari Nama Supplier atau Sales..." aria-label="search" />
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
        <th class="text-900 sort" data-sort="nama">Nama Supplier</th>
        <th class="text-900 sort" data-sort="sales">Kontak (Sales)</th>
        <th class="text-900 sort" data-sort="telepon">No. Telepon</th>
        <th class="text-900 sort" data-sort="alamat">Alamat</th>
        <th class="text-900">Aksi</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="kode">SUP-001</td>
        <td class="nama">PT Pupuk Sejahtera</td>
        <td class="sales">Bpk. Rahmat</td>
        <td class="telepon">08123456789</td>
        <td class="alamat">Jl. Industri No. 1, Gresik</td>
        <td><a href="#" onclick="editData('SUP-001')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="kode">SUP-002</td>
        <td class="nama">CV Bibit Unggul</td>
        <td class="sales">Ibu Sinta</td>
        <td class="telepon">08567891234</td>
        <td class="alamat">Jl. Pertanian No. 5, Malang</td>
        <td><a href="#" onclick="editData('SUP-002')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
       <tr>
        <td class="no">3</td>
        <td class="kode">SUP-003</td>
        <td class="nama">PT Pestisida Jaya</td>
        <td class="sales">Bpk. Tono</td>
        <td class="telepon">08111222333</td>
        <td class="alamat">Jl. Kimia No. 10, Cikarang</td>
        <td><a href="#" onclick="editData('SUP-003')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
      </tbody>
     </table>
    </div>

   </div>
  </div>
 </div>
</div>

<div class="modal fade" id="supplierModal" tabindex="-1" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="supplierModalLabel"><span class="fas fa-plus me-2"></span>Tambah Supplier Baru</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <form>
     <div class="row">
      <div class="col-md-6 mb-3">
       <label class="form-label" for="sup-kode">Kode Supplier</label>
       <input class="form-control" id="sup-kode" type="text" placeholder="e.g., SUP-004" />
      </div>
      <div class="col-md-6 mb-3">
       <label class="form-label" for="sup-nama">Nama Supplier</label>
       <input class="form-control" id="sup-nama" type="text" placeholder="e.g., PT Tani Makmur" />
      </div>
     </div>
     <div class="row">
      <div class="col-md-6 mb-3">
       <label class="form-label" for="sup-sales">Nama Kontak (Sales)</label>
       <input class="form-control" id="sup-sales" type="text" placeholder="e.g., Bpk. Budi" />
      </div>
      <div class="col-md-6 mb-3">
       <label class="form-label" for="sup-telepon">No. Telepon</label>
       <input class="form-control" id="sup-telepon" type="tel" placeholder="08xxxx" />
      </div>
     </div>
     <div class="mb-3">
      <label class="form-label" for="sup-email">Email</label>
      <input class="form-control" id="sup-email" type="email" placeholder="sales@supplier.com" />
     </div>
     <div class="mb-3">
      <label class="form-label" for="sup-alamat">Alamat</label>
      <textarea class="form-control" id="sup-alamat" rows="3" placeholder="Alamat lengkap supplier"></textarea>
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
 var supplierModal = new bootstrap.Modal(document.getElementById('supplierModal'));
 function editData(kode) {
  document.getElementById('supplierModalLabel').innerHTML = '<span class="fas fa-edit me-2"></span>Edit Supplier';
  document.getElementById('sup-kode').value = kode;
  // load data dummy
  document.getElementById('sup-nama').value = 'Nama Supplier...';
  supplierModal.show();
 }
</script>

<?php include "footer.php";?>
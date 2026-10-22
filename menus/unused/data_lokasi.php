<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0">Manajemen Data Lokasi (Gudang & Rak)</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel">
   <div id="tableLokasi" data-list='{"valueNames":["no","kode","nama","tipe","parent"],"page":10,"pagination":true}'>

    <div class="row align-items-center mb-3">
     <div class="col-auto">
      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#lokasiModal">
       <span class="fas fa-plus me-2"></span>Tambah Lokasi Baru
      </button>
     </div>
     <div class="col-auto col-sm-5 ms-auto">
      <form>
       <div class="input-group">
        <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Cari Kode atau Nama Lokasi..." aria-label="search" />
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
        <th class="text-900 sort" data-sort="kode">Kode Lokasi</th>
        <th class="text-900 sort" data-sort="nama">Nama Lokasi</th>
        <th class="text-900 sort" data-sort="tipe">Tipe</th>
        <th class="text-900 sort" data-sort="parent">Induk (Parent)</th>
        <th class="text-900">Aksi</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="kode">GUDANG-A</td>
        <td class="nama">Gudang A (Pupuk)</td>
        <td class="tipe">Gudang</td>
        <td class="parent">-</td>
        <td><a href="#" onclick="editData('GUDANG-A')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="kode">RAK-A-01</td>
        <td class="nama">Rak A-01</td>
        <td class="tipe">Rak</td>
        <td class="parent">GUDANG-A</td>
        <td><a href="#" onclick="editData('RAK-A-01')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
       <tr>
        <td class="no">3</td>
        <td class="kode">GUDANG-B</td>
        <td class="nama">Gudang B (Pestisida)</td>
        <td class="tipe">Gudang</td>
        <td class="parent">-</td>
        <td><a href="#" onclick="editData('GUDANG-B')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
       <tr>
        <td class="no">4</td>
        <td class="kode">TOKO-DEPAN</td>
        <td class="nama">Area Display Toko Depan</td>
        <td class="tipe">Toko</td>
        <td class="parent">-</td>
        <td><a href="#" onclick="editData('TOKO-DEPAN')">Edit</a> | <a href="#" class="text-danger">Hapus</a></td>
       </tr>
      </tbody>
     </table>
    </div>

   </div>
  </div>
 </div>
</div>

<div class="modal fade" id="lokasiModal" tabindex="-1" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="lokasiModalLabel"><span class="fas fa-plus me-2"></span>Tambah Lokasi Baru</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <form>
     <div class="mb-3">
      <label class="form-label" for="lok-kode">Kode Lokasi</label>
      <input class="form-control" id="lok-kode" type="text" placeholder="e.g., RAK-B-01" />
     </div>
     <div class="mb-3">
      <label class="form-label" for="lok-nama">Nama Lokasi</label>
      <input class="form-control" id="lok-nama" type="text" placeholder="e.g., Rak B-01" />
     </div>
     <div class="mb-3">
      <label class="form-label" for="lok-tipe">Tipe Lokasi</label>
      <select class="form-select" id="lok-tipe">
       <option>Gudang</option>
       <option>Rak</option>
       <option>Toko</option>
      </select>
     </div>
     <div class.mb-3">
      <label class="form-label" for="lok-parent">Induk Lokasi (Parent)</label>
      <select class="form-select" id="lok-parent">
       <option value="">- Tidak ada -</option>
       <option value="GUDANG-A">GUDANG-A</option>
       <option value="GUDANG-B">GUDANG-B</option>
       <option value="TOKO-DEPAN">TOKO-DEPAN</option>
      </select>
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
 var lokasiModal = new bootstrap.Modal(document.getElementById('lokasiModal'));
 function editData(kode) {
  document.getElementById('lokasiModalLabel').innerHTML = '<span class="fas fa-edit me-2"></span>Edit Lokasi';
  document.getElementById('lok-kode').value = kode;
  document.getElementById('lok-nama').value = 'Nama Lokasi...';
  lokasiModal.show();
 }
</script>

<?php include "footer.php";?>
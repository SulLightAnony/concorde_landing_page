<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0">Manajemen User & Hak Akses</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel">
   <div id="tableUser" data-list='{"valueNames":["no","nama","username","role","status"],"page":10,"pagination":true}'>

    <div class="row align-items-center mb-3">
     <div class="col-auto">
      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#userModal">
       <span class="fas fa-plus me-2"></span>Tambah User Baru
      </button>
     </div>
     <div class="col-auto col-sm-5 ms-auto">
      <form>
       <div class="input-group">
        <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Cari Nama atau Username..." aria-label="search" />
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
        <th class="text-900 sort" data-sort="nama">Nama Lengkap</th>
        <th class="text-900 sort" data-sort="username">Username</th>
        <th class="text-900 sort" data-sort="role">Role (Peran)</th>
        <th class="text-900 sort" data-sort="status">Status</th>
        <th class="text-900">Aksi</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="nama">Administrator</td>
        <td class="username">admin</td>
        <td class="role">Admin</td>
        <td class="status"><span class="badge badge-subtle-success">Aktif</span></td>
        <td><a href="#" onclick="editUser('admin')">Edit</a></td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="nama">Budi (Gudang)</td>
        <td class="username">budi.gudang</td>
        <td class="role">Petugas Gudang</td>
        <td class="status"><span class="badge badge-subtle-success">Aktif</span></td>
        <td><a href="#" onclick="editUser('budi.gudang')">Edit</a> | <a href="#" class="text-danger">Nonaktifkan</a></td>
       </tr>
       <tr>
        <td class="no">3</td>
        <td class="nama">Anton (Kasir)</td>
        <td class="username">anton.kasir</td>
        <td class="role">Kasir</td>
        <td class="status"><span class="badge badge-subtle-success">Aktif</span></td>
        <td><a href="#" onclick="editUser('anton.kasir')">Edit</a> | <a href="#" class="text-danger">Nonaktifkan</a></td>
       </tr>
       <tr>
        <td class="no">4</td>
        <td class="nama">Chandra (Finance)</td>
        <td class="username">chandra.finance</td>
        <td class="role">Keuangan</td>
        <td class="status"><span class="badge badge-subtle-secondary">Nonaktif</span></td>
        <td><a href="#" onclick="editUser('chandra.finance')">Edit</a> | <a href="#" class="text-success">Aktifkan</a></td>
       </tr>
      </tbody>
     </table>
    </div>

   </div>
  </div>
 </div>
</div>

<div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="userModalLabel"><span class="fas fa-plus me-2"></span>Tambah User Baru</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <form>
     <div class="mb-3">
      <label class="form-label" for="user-nama">Nama Lengkap</label>
      <input class="form-control" id="user-nama" type="text" placeholder="e.g., Susi (Admin)" />
     </div>
     <div class="mb-3">
      <label class="form-label" for="user-username">Username</label>
      <input class="form-control" id="user-username" type="text" placeholder="e.g., susi.admin" />
     </div>
     <div class="mb-3">
      <label class="form-label" for="user-role">Role (Peran)</label>
      <select class="form-select" id="user-role">
       <option>Admin</option>
       <option>Petugas Gudang</option>
       <option>Kasir</option>
       <option>Keuangan</option>
       <option>Owner</option>
      </select>
     </div>
     <hr>
     <div class="mb-3">
      <label class="form-label" for="user-password">Password</label>
      <input class="form-control" id="user-password" type="password" />
     </div>
     <div class="mb-3">
      <label class="form-label" for="user-password-confirm">Konfirmasi Password</label>
      <input class="form-control" id="user-password-confirm" type="password" />
     </div>
    </form>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Simpan User</button>
   </div>
  </div>
 </div>
</div>

<script>
 var userModal = new bootstrap.Modal(document.getElementById('userModal'));
 function editUser(username) {
  document.getElementById('userModalLabel').innerHTML = '<span class="fas fa-edit me-2"></span>Edit User';
  document.getElementById('user-username').value = username;
  document.getElementById('user-nama').value = 'Nama Lengkap...';
  // Kosongkan password saat edit
  document.getElementById('user-password').placeholder = "Kosongkan jika tidak ganti password";
  document.getElementById('user-password-confirm').placeholder = "Kosongkan jika tidak ganti password";
  userModal.show();
 }
</script>

<?php include "footer.php";?>
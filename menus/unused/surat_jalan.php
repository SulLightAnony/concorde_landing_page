<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0" data-anchor="data-anchor">Management Surat Jalan (DO)</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-do" id="dom-do">
   <div id="tableDO" data-list='{"valueNames":["no","donumber","sonumber","customer","shipdate","status"],"page":5,"pagination":true}'>

    <div class="row align-items-center mb-3">
     <div class="col-auto">
      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#createDOModal">
       <span class="fas fa-truck-fast me-2"></span>Buat DO dari SO
      </button>
     </div>
    </div>

    <div class="row justify-content-end g-0">
     <div class="col-auto col-sm-5 mb-3">
      <form>
       <div class="input-group">
        <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Cari DO atau SO..." aria-label="search" />
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
        <th class="text-900 sort" data-sort="donumber">DO Number</th>
        <th class="text-900 sort" data-sort="sonumber">SO Number</th>
        <th class="text-900 sort" data-sort="customer">Customer</th>
        <th class="text-900 sort" data-sort="shipdate">Tanggal Kirim</th>
        <th class="text-900 sort" data-sort="status">Status</th>
       </tr>
   /thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="donumber">DO-2025-001</td>
        <td class="sonumber">SO-2025-001</td>
        <td class="customer">Toko Tani Jaya</td>
        <td class="shipdate">2025-10-11</td>
        <td class="status">Shipped</td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="donumber">DO-2025-002</td>
        <td class="sonumber">SO-2025-002</td>
        <td class="customer">Kelompok Tani Sido Makmur</td>
        <td class="shipdate">2025-10-12</td>
        <td class="status">Draft</td>
       </tr>
      </tbody>
     </table>
    </div>

   </div>
  </div>
 </div>
</div>

<div class="modal fade" id="createDOModal" tabindex="-1" aria-labelledby="createDOModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="createDOModalLabel"><span class="fas fa-truck-fast me-2"></span>Buat Surat Jalan</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <form>
     <div class="mb-3">
      <label class="form-label" for="do-so-number">Pilih Sales Order (SO)</label>
      <input class="form-control" id="do-so-number" type="text" placeholder="Cari SO-2025-001..." />
                 </div>
          <div class="mb-3">
      <label class="form-label" for="do-ship-date">Tanggal Pengiriman</label>
      <input class="form-control" id="do-ship-date" type="date" />
     </div>
    </form>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="button" onclick="handleCreateDO()">Simpan & Cetak DO</button>
   </div>
  </div>
 </div>
</div>
<script>
 function handleCreateDO() {
  alert('Surat Jalan berhasil dibuat (dummy)!');
  const modalElement = document.getElementById('createDOModal');
  const modal = bootstrap.Modal.getInstance(modalElement);
  modal.hide();
 }
</script>

<?php include "footer.php";?>
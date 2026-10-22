<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0">Manajemen Put Away</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel">
   <div id="tablePutAway" data-list='{"valueNames":["no","rcvnumber","ponumber","supplier","status","petugas"],"page":5,"pagination":true}'>

    <div class="row align-items-center mb-3">
     <div class="col-auto">
      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#scanPOModal">
       <span class="fas fa-barcode me-2"></span>Scan Penerimaan / PO
      </button>
     </div>
    </div>
        
    <div id="scanDetailContainer" class="mb-4 d-none">
     <h6 class="text-primary mb-2">Detail Penerimaan: <span id="scannedPONumber"></span></h6>
     <div class="p-3 border rounded bg-light">
      <p class="mb-0 text-600">Daftar item dari PO/Penerimaan yang di-scan akan muncul di sini untuk dialokasikan ke rak (Put Away).</p>
      </div>
     <hr class="my-3" />
    </div>

    <div class="row justify-content-end g-0">
     <div class="col-auto col-sm-5 mb-3">
      <form>
       <div class="input-group">
        <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Cari No. Penerimaan atau PO..." aria-label="search" />
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
        <th class="text-900 sort" data-sort="rcvnumber">No. Penerimaan</th>
        <th class="text-900 sort" data-sort="ponumber">No. PO</th>
        <th class="text-900 sort" data-sort="supplier">Supplier</th>
        <th class="text-900 sort" data-sort="status">Status</th>
        <th class="text-900 sort" data-sort="petugas">Petugas Gudang</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="rcvnumber">RCV-2025-001</td>
        <td class="ponumber">PO-2025-001</td>
        <td class="supplier">PT Pupuk Sejahtera</td>
        <td class="status"><span class="badge badge-subtle-success">Completed</span></td>
        <td class="petugas">Budi</td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="rcvnumber">RCV-2025-002</td>
        <td class="ponumber">PO-2025-002</td>
        <td class="supplier">CV Bibit Unggul</td>
        <td class="status"><span class="badge badge-subtle-warning">In Progress</span></td>
        <td class="petugas">Anton</td>
       </tr>
        <tr>
        <td class="no">3</td>
        <td class="rcvnumber">RCV-2025-003</td>
        <td class="ponumber">PO-2025-003</td>
        <td class="supplier">PT Pestisida Jaya</td>
        <td class="status"><span class="badge badge-subtle-secondary">Pending</span></td>
        <td class="petugas">-</td>
       </tr>
      </tbody>
     </table>
    </div>

   </div>
  </div>
 </div>
</div>
</div>

<div class="modal fade" id="scanPOModal" tabindex="-1" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title"><span class="fas fa-barcode me-2"></span>Scan Penerimaan Barang</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <p class="text-700">Scan barcode pada Surat Penerimaan Barang atau masukkan nomor PO/Penerimaan manual.</p>
    <form>
     <div class="mb-3">
      <label class="form-label" for="po-number-input">No. PO / Penerimaan</label>
      <input class="form-control" id="po-number-input" type="text" placeholder="e.g., RCV-2025-003" autofocus />
     </div>
    </form>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="button" onclick="handleScanSubmit()">Submit</button>
   </div>
  </div>
 </div>
</div>

<script>
function handleScanSubmit() {
 const poNumberInput = document.getElementById('po-number-input');
 const scannedPONumber = poNumberInput.value.trim();
 if (scannedPONumber) {
  document.getElementById('scannedPONumber').textContent = scannedPONumber;
  document.getElementById('scanDetailContainer').classList.remove('d-none');
  poNumberInput.value = '';
  var modal = bootstrap.Modal.getInstance(document.getElementById('scanPOModal'));
  modal.hide();
  // Di aplikasi nyata, AJAX call untuk fetch item-item di RCV-XXX
  alert('Data ' + scannedPONumber + ' berhasil di-load. Siap untuk Put Away.');
 } else {
  alert('Masukkan nomor PO atau Penerimaan.');
 }
}
</script>

<?php include "footer.php";?>
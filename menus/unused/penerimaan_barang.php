<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0" data-anchor="data-anchor">Management Penerimaan Barang</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-receiving" id="dom-receiving">
   <div id="tableReceiving" data-list='{"valueNames":["no","recnumber","pocode","supplier","receivedate","status","totalitem","totalqty","remarks"],"page":5,"pagination":true}'>

    <div class="row align-items-center mb-3">
     <div class="col-auto">
      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#scanModal">
       <span class="fas fa-barcode me-2"></span>Scan Surat Jalan Supplier / PO
      </button>
     </div>
    </div>

    <div id="scanDetailContainer" class="mb-4 d-none">
     <h6 class="text-primary mb-2">Scan Details: <span id="scannedRecNumber"></span></h6>
     <div class="p-3 border rounded bg-light">
      <p class="mb-0 text-600">Daftar item dari PO yang di-scan akan muncul di sini untuk divalidasi jumlahnya.</p>
      </div>
     <hr class="my-3" />
    </div>
    <div class="row justify-content-end g-0">
     <div class="col-auto col-sm-5 mb-3">
      <form>
       <div class="input-group">
        <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Cari No. Receiving atau PO..." aria-label="search" />
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
        <th class="text-900 sort" data-sort="recnumber">Receiving Number</th>
        <th class="text-900 sort" data-sort="pocode">PO Number</th>
        <th class="text-900 sort" data-sort="supplier">Supplier</th>
        <th class="text-900 sort" data-sort="receivedate">Receiving Date</th>
        <th class="text-900 sort" data-sort="status">Status</th>
        <th class="text-900 sort" data-sort="totalitem">Total Item</th>
        <th class="text-900 sort" data-sort="totalqty">Total Qty</th>
        <th class="text-900 sort" data-sort="remarks">Remarks</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="recnumber">RCV-2025-001</td>
        <td class="pocode">PO-2025-002</td>
        <td class="supplier">CV. Sejahtera Mandiri</td>
        <td class="receivedate">2025-10-05</td>
        <td class="status">Completed</td>
        <td class="totalitem">10</td>
        <td class="totalqty">850</td>
        <td class="remarks">All items received</td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="recnumber">RCV-2025-002</td>
        <td class="pocode">PO-2025-003</td>
        <td class="supplier">PT. Mega Sukses</td>
        <td class="receivedate">2025-10-07</td>
        <td class="status">Pending Inspection</td>
        <td class="totalitem">20</td>
        <td class="totalqty">1,560</td>
        <td class="remarks">Waiting for QC</td>
       </tr>
       <tr>
        <td class="no">3</td>
        <td class="recnumber">RCV-2025-003</td>
        <td class="pocode">PO-2025-001</td>
        <td class="supplier">PT. Cahaya Nusantara</td>
        <td class="receivedate">2025-10-08</td>
        <td class="status">Open</td>
        <td class="totalitem">15</td>
        <td class="totalqty">1,250</td>
        <td class="remarks">Partial receiving</td>
       </tr>
      </tbody>
     </table>
    </div>

   </div>
  </div>
 </div>
</div>

<div class="modal fade" id="scanModal" tabindex="-1" aria-labelledby="scanModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="scanModalLabel"><span class="fas fa-barcode me-2"></span>Scan Dokumen Penerimaan</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <p class="text-700">Scan barcode pada Surat Jalan Supplier atau masukkan PO Number manual.</p>
    <form>
     <div class="mb-3">
      <label class="form-label" for="receiving-number-input">PO Number / Scan Input</label>
      <input class="form-control" id="receiving-number-input" type="text" placeholder="e.g., PO-2025-001" autofocus />
     </div>
    </form>
    <div class="border rounded text-center p-5 bg-light">
      <span class="fas fa-camera-retro fa-3x text-400"></span>
      <p class="mt-2 text-600">Live Camera Feed / Scanner Area</p>
    </div>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="button" onclick="handleScanSubmit()">Submit Manually</button>
   </div>
  </div>
 </div>
</div>
<script>
 function handleScanSubmit() {
  const recNumberInput = document.getElementById('receiving-number-input');
  const scannedRecNumber = recNumberInput.value.trim();
  const scanDetailContainer = document.getElementById('scanDetailContainer');
  const scannedRecNumberDisplay = document.getElementById('scannedRecNumber');

  if (scannedRecNumber) {
   scannedRecNumberDisplay.textContent = scannedRecNumber;
   scanDetailContainer.classList.remove('d-none');
   recNumberInput.value = '';
   const modalElement = document.getElementById('scanModal');
   const modal = bootstrap.Modal.getInstance(modalElement);
   modal.hide();
      // Di sini akan ada AJAX call untuk fetch item dari PO
  } else {
   alert('Masukkan PO Number atau lakukan scan.');
  }
 }
</script>

<?php include "footer.php";?>
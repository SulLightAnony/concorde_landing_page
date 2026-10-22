<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0" data-anchor="data-anchor">Management Picking & Packing</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-picking" id="dom-picking">
   <div id="tablePicking" data-list='{"valueNames":["no","picknumber","donumber","customer","status","picker"],"page":5,"pagination":true}'>

    <div class="row align-items-center mb-3">
     <div class="col-auto">
      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#scanDOModal">
       <span class="fas fa-barcode me-2"></span>Scan DO untuk Picking
      </button>
     </div>
    </div>
        
            <div id="scanDetailContainer" class="mb-4 d-none">
     <h6 class="text-primary mb-2">Scan Details: <span id="scannedDONumber"></span></h6>
     <div class="p-3 border rounded bg-light">
      <p class="mb-0 text-600">Daftar item dari DO yang di-scan akan muncul di sini untuk divalidasi (picking).</p>
                   </div>
     <hr class="my-3" />
    </div>

    <div class="row justify-content-end g-0">
     <div class="col-auto col-sm-5 mb-3">
      <form>
       <div class="input-group">
        <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Cari Picklist atau DO..." aria-label="search" />
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
        <th class="text-900 sort" data-sort="picknumber">Picklist Number</th>
        <th class="text-900 sort" data-sort="donumber">DO Number</th>
        <th class="text-900 sort" data-sort="customer">Customer</th>
        <th class="text-900 sort" data-sort="status">Status</th>
        <th class="text-900 sort" data-sort="picker">Picker</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="picknumber">PICK-2025-001</td>
        <td class="donumber">DO-2025-001</td>
        <td class="customer">Toko Tani Jaya</td>
        <td class="status">Packed</td>
        <td class="picker">Budi</td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="picknumber">PICK-2025-002</td>
        <td class="donumber">DO-2025-002</td>
        <td class="customer">Kelompok Tani Sido Makmur</td>
        <td class="status">Picking in Progress</td>
        <td class="picker">Anton</td>
       </tr>
      </tbody>
     </table>
    </div>

   </div>
  </div>
 </div>
</div>

<div class="modal fade" id="scanDOModal" tabindex="-1" aria-labelledby="scanDOModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="scanDOModalLabel"><span class="fas fa-barcode me-2"></span>Scan Delivery Order</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <p class="text-700">Scan barcode pada Surat Jalan (DO) atau masukkan nomor DO secara manual.</p>
    <form>
     <div class="mb-3">
      <label class="form-label" for="do-number-input">DO Number / Scan Input</label>
      <input class="form-control" id="do-number-input" type="text" placeholder="e.g., DO-2025-001" autofocus />
     </div>
    </form>
    <div class="border rounded text-center p-5 bg-light">
      <span class="fas fa-camera-retro fa-3x text-400"></span>
      <p class="mt-2 text-600">Live Camera Feed / Scanner Area</p>
    </div>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="button" onclick="handleScanDOSubmit()">Submit Manually</button>
   </div>
  </div>
 </div>
</div>
<script>
 function handleScanDOSubmit() {
  const doNumberInput = document.getElementById('do-number-input');
  const scannedDONumber = doNumberInput.value.trim();
  const scanDetailContainer = document.getElementById('scanDetailContainer');
  const scannedDONumberDisplay = document.getElementById('scannedDONumber');

  if (scannedDONumber) {
   scannedDONumberDisplay.textContent = scannedDONumber;
   scanDetailContainer.classList.remove('d-none');
   doNumberInput.value = '';
   const modalElement = document.getElementById('scanDOModal');
   const modal = bootstrap.Modal.getInstance(modalElement);
   modal.hide();
   // Di aplikasi nyata, AJAX call untuk fetch item-item di DO-XXX
  } else {
   alert('Masukkan nomor DO atau lakukan scan.');
  }
 }
</script>

<?php include "footer.php";?>
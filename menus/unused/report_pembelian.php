<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0">Laporan Pembelian</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 
 <div class="row align-items-end mb-3">
  <div class="col-auto">
   <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">
    <span class="fas fa-filter me-2"></span>Filter Laporan
   </button>
  </div>
  <div class="col-auto ms-auto">
   <h6 class="text-600 mb-0">Periode: 01 Okt 2025 - 30 Okt 2025</h6>
  </div>
 </div>

 <div class="row mb-3">
  <div class="col-md-4">
   <div class="card border-primary h-100">
    <div class="card-body">
     <h6 class="text-primary">Total Pembelian</h6>
     <h4 class="mb-0">Rp 25.700.000</h4>
    </div>
   </div>
  </div>
  <div class="col-md-4">
   <div class="card border-info h-100">
    <div class="card-body">
     <h6 class="text-info">Total Transaksi</h6>
     <h4 class="mb-0">3 Transaksi</h4>
    </div>
   </div>
  </div>
 </div>
 <hr>

 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel">
   <div id="tablePembelian" data-list='{"valueNames":["no","tanggal","faktur","supplier","tipe","total"],"page":10,"pagination":true}'>

    <div class="row justify-content-end g-0 mb-3">
     <div class="col-auto col-sm-5">
      <form>
       <div class="input-group">
        <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Cari Faktur atau Supplier..." aria-label="search" />
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
        <th class="text-900 sort" data-sort="tanggal">Tanggal</th>
        <th class="text-900 sort" data-sort="faktur">No. Faktur</th>
        <th class="text-900 sort" data-sort="supplier">Supplier</th>
        <th class="text-900 sort" data-sort="tipe">Tipe Bayar</th>
        <th class="text-900 sort" data-sort="total">Total</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="tanggal">2025-10-01</td>
        <td class="faktur">PO-001/INV</td>
        <td class="supplier">PT Pupuk Sejahtera</td>
        <td class="tipe">Kredit</td>
        <td class="total">Rp 15.000.000</td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="tanggal">2025-10-15</td>
        <td class="faktur">PO-002/INV</td>
        <td class="supplier">CV Bibit Unggul</td>
        <td class="tipe">Kredit</td>
        <td class="total">Rp 7.500.000</td>
       </tr>
       <tr>
        <td class="no">3</td>
        <td class="tanggal">2025-09-20</td>
        <td class="faktur">PO-003/INV</td>
        <td class="supplier">PT Pestisida Jaya</td>
        <td class="tipe">Kredit</td>
        <td class="total">Rp 3.200.000</td>
       </tr>
      </tbody>
     </table>
    </div>

   </div>
  </div>
 </div>
</div>

<div class="modal fade" id="filterModal" tabindex="-1" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title"><span class="fas fa-filter me-2"></span>Filter Laporan</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <form>
     <div class="mb-3">
      <label class="form-label">Tanggal Mulai</label>
      <input class="form-control" type="date" />
     </div>
     <div class="mb-3">
      <label class="form-label">Tanggal Selesai</label>
      <input class="form-control" type="date" />
     </div>
     <div class="mb-3">
      <label class="form-label">Supplier</label>
      <select class="form-select">
       <option value="">Semua Supplier</option>
       <option value="SUP-001">PT Pupuk Sejahtera</option>
       <option value="SUP-002">CV Bibit Unggul</option>
      </select>
     </div>
    </form>
   </div>
   <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Terapkan Filter</button>
   </div>
  </div>
 </div>
</div>

<?php include "footer.php";?>
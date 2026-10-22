<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0">Laporan Nilai Stok (Inventory Valuation)</h5>
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
   <h6 class="text-600 mb-0">Per Tanggal: 30 Okt 2025</h6>
  </div>
 </div>

 <div class="row mb-3">
  <div class="col-md-6">
   <div class="card border-success h-100">
    <div class="card-body">
     <h6 class="text-success">Total Nilai Inventaris (HPP)</h6>
     <h4 class="mb-0">Rp 123.456.789</h4>
    </div>
   </div>
  </div>
 </div>
 <hr>

 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel">
   <div id="tableStok" data-list='{"valueNames":["no","sku","nama","kategori","stok","hpp","nilai"],"page":10,"pagination":true}'>

    <div class="row justify-content-end g-0 mb-3">
     <div class="col-auto col-sm-5">
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
        <th class="text-900 sort" data-sort="stok">Stok</th>
        <th class="text-900 sort" data-sort="hpp">Harga Modal (HPP)</th>
        <th class="text-900 sort" data-sort="nilai">Total Nilai</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="sku">PUPUK-UREA-001</td>
        <td class="nama">Pupuk Urea Non-Subsidi (50kg)</td>
        <td class="kategori">Pupuk</td>
        <td class="stok">150</td>
        <td class="hpp">Rp 300.000</td>
        <td class="nilai">Rp 45.000.000</td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="sku">PST-DGW-001</td>
        <td class="nama">Pestisida Dangke 40WP</td>
        <td class="kategori">Pestisida</td>
        <td class="stok">500</td>
        <td class="hpp">Rp 45.000</td>
        <td class="nilai">Rp 22.500.000</td>
       </tr>
       <tr>
        <td class="no">3</td>
        <td class="sku">BIBIT-JAGUNG-001</td>
        <td class="nama">Bibit Jagung NK-212 (1kg)</td>
        <td class="kategori">Bibit</td>
        <td class="stok">320</td>
        <td class="hpp">Rp 80.000</td>
        <td class="nilai">Rp 25.600.000</td>
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
      <label class="form-label">Per Tanggal</label>
      <input class="form-control" type="date" />
     </div>
     <div class="mb-3">
      <label class="form-label">Kategori Barang</label>
      <select class="form-select">
       <option value="">Semua Kategori</option>
       <option value="pupuk">Pupuk</option>
       <option value="pestisida">Pestisida</option>
      </select>
     </div>
     <div class="mb-3">
      <label class="form-label">Lokasi Gudang</label>
      <select class="form-select">
       <option value="">Semua Lokasi</option>
       <option value="GUDANG-A">GUDANG-A</option>
       <option value="GUDANG-B">GUDANG-B</option>
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
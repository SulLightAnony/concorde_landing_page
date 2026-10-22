<?php include "header.php";?>

<div class="card mb-12">
 <div class="card-header">
  <div class="row flex-between-end">
   <div class="col-auto align-self-center">
    <h5 class="mb-0">Ringkasan Stok (Stock Overview)</h5>
   </div>
  </div>
 </div>

<div class="card-body pt-0">
 <div class="tab-content">
  <div class="tab-pane preview-tab-pane active" role="tabpanel">
   <div id="tableOverview" data-list='{"valueNames":["no","sku","nama","lokasi","stok"],"page":10,"pagination":true}'>

    <div class="row justify-content-between g-0 mb-3">
     <div class="col-auto">
      <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#filterModal">
       <span class="fas fa-filter me-2"></span>Filter Lanjutan
      </button>
     </div>
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
        <th class="text-900 sort" data-sort="lokasi">Lokasi</th>
        <th class="text-900 sort" data-sort="stok">Stok Sistem</th>
       </tr>
      </thead>
      <tbody class="list">
       <tr>
        <td class="no">1</td>
        <td class="sku">PUPUK-UREA-001</td>
        <td class="nama">Pupuk Urea Non-Subsidi (50kg)</td>
        <td class="lokasi">GUDANG-A, Rak A-01</td>
        <td class="stok">150 Karung</td>
       </tr>
       <tr>
        <td class="no">2</td>
        <td class="sku">PST-DGW-001</td>
        <td class="nama">Pestisida Dangke 40WP</td>
        <td class="lokasi">GUDANG-B, Rak B-03</td>
        <td class="stok">500 Pcs</td>
       </tr>
       <tr>
        <td class="no">3</td>
        <td class="sku">PUPUK-NPK-001</td>
        <td class="nama">NPK Mutiara (50kg)</td>
        <td class="lokasi">GUDANG-A, Rak A-02</td>
        <td class="stok">75 Karung</td>
       </tr>
       <tr>
        <td class="no">4</td>
        <td class="sku">BIBIT-JAGUNG-001</td>
        <td class="nama">Bibit Jagung NK-212</td>
        <td class="lokasi">GUDANG-C (TOKO)</td>
        <td class="stok">320 Pcs</td>
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
    <h5 class="modal-title"><span class="fas fa-filter me-2"></span>Filter Lanjutan</h5>
    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
   <div class="modal-body">
    <form>
     <div class="mb-3">
      <label class="form-label">Kategori Barang</label>
      <select class="form-select">
       <option value="">Semua Kategori</option>
       <option value="pupuk">Pupuk</option>
       <option value="pestisida">Pestisida</option>
       <option value="bibit">Bibit</option>
      </select>
     </div>
     <div class="mb-3">
      <label class="form-label">Lokasi Gudang</label>
      <select class="form-select">
       <option value="">Semua Gudang</option>
       <option value="A">Gudang A</option>
       <option value="B">Gudang B</option>
       <option value="C">Toko Depan</option>
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
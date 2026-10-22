<?php include "header.php";?>


<div class="card mb-12">
  <div class="card-header">
    <div class="row flex-between-end">
      <div class="col-auto align-self-center">
        <h5 class="mb-0" data-anchor="data-anchor">Report Outbound</h5>
      </div>
    </div>
  </div>

<div class="card-body pt-0">
  <div class="tab-content">
    <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-reportoutbound" id="dom-reportoutbound">
      <div id="tableReportOutbound" data-list='{"valueNames":["no","outboundcode","docref","customer","deliverydate","shippingdate","itemcount","qtycount","status","remarks","created","updated"],"page":10,"pagination":true}'>

        <div class="row g-3 mb-3">
          <div class="col-auto">
            <h6 class="mb-0 text-700">Filter by Date:</h6>
          </div>
          <div class="col-auto">
            <div class="input-group input-group-sm">
              <span class="input-group-text">From:</span>
              <input class="form-control" id="fromDate" type="date" value="2025-10-01" />
            </div>
          </div>
          <div class="col-auto">
            <div class="input-group input-group-sm">
              <span class="input-group-text">To:</span>
              <input class="form-control" id="toDate" type="date" value="2025-10-31" />
            </div>
          </div>
          <div class="col-auto">
             <button class="btn btn-primary btn-sm" type="button"><span class="fas fa-filter me-1"></span> Apply Filter</button>
          </div>
        </div>
        <div class="row justify-content-end g-0">
          <div class="col-auto col-sm-5 mb-3">
            <form>
              <div class="input-group">
                <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search Outbound Report..." aria-label="search" />
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
                <th class="text-900 sort" data-sort="outboundcode">Outbound Code</th>
                <th class="text-900 sort" data-sort="docref">Reference Doc</th>
                <th class="text-900 sort" data-sort="customer">Customer</th>
                <th class="text-900 sort" data-sort="deliverydate">Delivery Date</th>
                <th class="text-900 sort" data-sort="shippingdate">Shipping Date</th>
                <th class="text-900 sort" data-sort="itemcount">Total Item</th>
                <th class="text-900 sort" data-sort="qtycount">Total Qty</th>
                <th class="text-900 sort" data-sort="status">Status</th>
                <th class="text-900 sort" data-sort="remarks">Remarks</th>
                <th class="text-900 sort" data-sort="created">Created Date</th>
                <th class="text-900 sort" data-sort="updated">Updated Date</th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <td class="no">1</td>
                <td class="outboundcode">OUT-2025-001</td>
                <td class="docref">DO-2025-001</td>
                <td class="customer">PT. Maju Jaya Sentosa</td>
                <td class="deliverydate">2025-10-04</td>
                <td class="shippingdate">2025-10-05</td>
                <td class="itemcount">12</td>
                <td class="qtycount">960</td>
                <td class="status text-success">Delivered</td>
                <td class="remarks">On-time delivery</td>
                <td class="created">2025-10-04</td>
                <td class="updated">2025-10-05</td>
              </tr>
              <tr>
                <td class="no">2</td>
                <td class="outboundcode">OUT-2025-002</td>
                <td class="docref">PKG-2025-003</td>
                <td class="customer">CV. Prima Global</td>
                <td class="deliverydate">2025-10-06</td>
                <td class="shippingdate">2025-10-07</td>
                <td class="itemcount">8</td>
                <td class="qtycount">720</td>
                <td class="status text-success">Delivered</td>
                <td class="remarks">All items shipped successfully</td>
                <td class="created">2025-10-06</td>
                <td class="updated">2025-10-07</td>
              </tr>
              <tr>
                <td class="no">3</td>
                <td class="outboundcode">OUT-2025-003</td>
                <td class="docref">DO-2025-004</td>
                <td class="customer">PT. Sinar Abadi</td>
                <td class="deliverydate">2025-10-07</td>
                <td class="shippingdate">2025-10-08</td>
                <td class="itemcount">10</td>
                <td class="qtycount">830</td>
                <td class="status text-warning">Pending Dispatch</td>
                <td class="remarks">Waiting for transport confirmation</td>
                <td class="created">2025-10-07</td>
                <td class="updated">2025-10-08</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>


<?php include "footer.php";?>

</body>
</html>
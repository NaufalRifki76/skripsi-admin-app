<!-- Modal -->
<div class="modal fade" id="bukti-transfer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bukti Transfer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="data:image/png;base64,{{$refund->transfer_confirm_base64}}" class="img-fluid" style="max-height: 800px" alt="">
      </div>
    </div>
  </div>
</div>
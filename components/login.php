<!-- Modal Form Login -->
<div class="modal fade" id="login-form" tabindex="-1" role="dialog" aria-labelledby="login-form" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Login</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
      <div class="modal-body">
        <div class="container-fluid">
          Add rows here
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<script>
  var modelId = document.getElementById('modelId');

  modelId.addEventListener('show.bs.modal', function (event) {
      // Button that triggered the modal
      let button = event.relatedTarget;
      // Extract info from data-bs-* attributes
      let recipient = button.getAttribute('data-bs-whatever');

    // Use above variables to manipulate the DOM
  });
</script>

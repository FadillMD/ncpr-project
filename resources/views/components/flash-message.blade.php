
@if (flash()->message)
<div class="alert alert-{{ flash()->class }} alert-dismissible fade show" role="alert">
  <i class="bi bi-check-circle me-1"></i>
  {{ flash()->message }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
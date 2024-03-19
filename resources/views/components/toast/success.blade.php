@props(['message' => null])

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="toastSuccess" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        {{-- <img src="..." class="rounded me-2" alt="..."> --}}
        <span class="badge badge-sm bg-success me-2">
            <i class="ni ni-check-bold text-white mb-0"></i>
        </span>
        <strong class="me-auto">Success</strong>
        <small>{{ \Carbon\Carbon::now()->isoFormat('h:mm a') }}</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        {{ $message }}
    </div>
    </div>
</div>
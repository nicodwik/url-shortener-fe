@props(['meta' => null, 'action' => 1, 'label' => ''])

<button type="button" class="btn mb-0 px-3 btn-white"
    {{ $meta->current_page <= 1 ? 'disabled' : ''}}
    {{ $meta->current_page >= $meta->total_pages ? 'disabled' : ''}}
    wire:click='goToPage({{ $action == 'next' ? ( $meta->current_page < $meta->total_pages ? $meta->current_page + 1 : $meta->current_page) : ($meta->current_page > 1 ? $meta->current_page - 1 : $meta->current_page) }})'
    >
    <i class="fa fa-{{ $label }}"></i>
</button>
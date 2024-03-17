@props(['meta' => null])

<div class="card-footer">
    {{-- @dump($meta) --}}
    <div class="d-flex justify-content-between">
        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
            <x-buttons.pagination-action :meta="$meta" :action="'prev'" :label="'chevron-left'"/>
            @for ($i = 1; $i <= $meta->total_pages; $i++)
                @if ($i <= 10)
                    <x-buttons.pagination-number :meta="$meta" :number="($meta->current_page >= 7 ? $meta->current_page + $i - 7 : $i)" />
                @endif
            @endfor 
            <x-buttons.pagination-action :meta="$meta" :action="'next'"  :label="'chevron-right'"/>
        </div>
        <span>Showing <b>{{ $meta->current_page * $meta?->items_per_page }}</b> of <b>{{ $meta?->total_items }}</b> items</span>
    </div>
</div>
@props(['meta' => null, 'total_pagination_showed' => 10, 'max_current_page_threshold' => 8])

<div class="card-footer">
    <div class="d-flex justify-content-between">
        
        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
            <x-buttons.pagination-action :meta="$meta" :action="'prev'" :label="'chevron-left'"/>
            @php
                $count = ($meta->current_page + ($total_pagination_showed - $max_current_page_threshold)) <= $meta->total_pages ? $total_pagination_showed : $meta->total_pages - ($meta->current_page - $max_current_page_threshold);
            @endphp
            @for ($i = 1; $i <= $meta->total_pages; $i++)
                @if ($i <= $count)
                    <x-buttons.pagination-number :meta="$meta" :number="($meta->current_page >= $max_current_page_threshold ? $meta->current_page + $i - $max_current_page_threshold : $i)" />
                @endif
            @endfor 
            <x-buttons.pagination-action :meta="$meta" :action="'next'" :label="'chevron-right'"/>
        </div>
        <span>
            Showing 
                <b>{{ $meta->current_page != $meta->total_pages ? $meta->current_page * $meta?->items_per_page : $meta?->total_items }}</b>
                    of 
                <b>{{ $meta?->total_items }}</b> 
            items
        </span>
    </div>
</div>
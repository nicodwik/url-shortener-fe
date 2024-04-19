@props(['meta' => null, 'total_pagination_showed' => 10, 'max_current_page_threshold' => 8])

<div class="card-footer">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="btn-group btn-group-sm flex-wrap" role="group" aria-label="Basic example">
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
        </div>
        <div class="col-md-4 col-sm-12">
            <p class="text-md-end text-center mt-3 mt-md-0">
                Showing 
                    <b>{{ $meta->current_page != $meta->total_pages ? $meta->current_page * $meta?->items_per_page : $meta?->total_items }}</b>
                        of 
                    <b>{{ $meta?->total_items }}</b> 
                items
            </p>
        </div>
    </div>
</div>
@props(['meta' => null, 'number' => 1])

<button type="button" class="btn mb-0 px-3 
    {{ $number == $meta->current_page ? 'btn-primary text-white' : 'btn-white' }}"
    {{ $number == $meta->current_page ? 'disabled' : '' }}
    wire:click='goToPage({{ $number }})'>{{ $number }}
</button>
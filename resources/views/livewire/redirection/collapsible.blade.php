<div>
    <div class="card-body px-0 pt-3 pb-2">
        <ul class="list-group px-2">
            @forelse ($data->items as $index => $item)
                <li class="list-group-item py-3">
                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#collapseExample-{{ $index }}">
                        <p class="text-sm font-weight-bold mb-0">
                            {{ ($index + 1) + (($data?->meta?->current_page - 1) * 10) }}.
                            <a href="javascript:;">
                                <b>{{ $item->short_url }}</b>
                            </a>
                        </p>
                        <div>
                            <span class="badge badge-sm bg-gradient-success me-2">{{ $item->status }}</span>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample-{{ $index }}">
                        <ul class="list-group mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p class="mb-0 text-sm w-25">long URL :</p>
                                <b class="text-xs">{{ $item->long_url }}</b>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p class="mb-0 text-sm">Status :</p>
                                <span class="badge badge-sm bg-gradient-success">{{ $item->status }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p class="mb-0 text-sm">Hit Count :</p>
                                <b class="text-sm">{{ $item->hit_count }}</b>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p class="mb-0 text-sm">Creation Date :</p>
                                <b class="text-sm">{{ $item->created_at }}</b>
                            </li>
                        </ul>
                        <div class="d-flex mt-3">
                            <a target="_blank" href={{ route('redirect', ['short_url' => $item->short_url]) }} class="btn bg-gradient-primary">
                                <i class="fa fa-lg fa-external-link"></i>
                            </a>
                            <button onclick="copyToClipboard('{{ $item->short_url }}', this)" class="btn bg-gradient-light ms-3">
                                <i class="fa fa-lg fa-copy"></i>
                            </button>
                        </div>
                    </div>
                </li>
                
            @empty
                
            @endforelse
        </ul>
    </div>
    <x-tables.pagination :meta="$data?->meta" />
</div>

@push('footer-scripts')
    <script>
        const collapsible = new bootstrap.Collapse('[data-bs-toggle="collapse"]')

        function copyToClipboard(shortUrl, el) {
            navigator.clipboard.writeText(shortUrl);
            el.innerHTML = '<small>Copied to clipboard!</small>'
            setTimeout(() => {
                el.innerHTML = '<i class="fa fa-copy"></i>'
            }, 3000);
        }
    </script>
@endpush
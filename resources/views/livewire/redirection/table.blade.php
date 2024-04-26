<div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            ID
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Short URL
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Long URL
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Status
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Hit Count
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Creation Date
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data->items as $index => $item)
                        <tr>
                            <td class="ps-4">
                                <p class="text-xs font-weight-bold mb-0">{{ ($index + 1) + (($data?->meta?->current_page - 1) * 10) }}</p>
                            </td>
                            <td class="text-center">
                                {{-- <div class="d-flex align-items-center"> --}}
                                    <a href="javascript:;">
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->short_url }}</p>
                                    </a>
                                    
                                    {{-- <button class="btn btn-light btn-sm px-2 py-1 mb-0 ms-2">
                                        <i class="ni ni-ungroup"></i>
                                    </button>
                                </div> --}}
                            </td>
                            <td class="text-center">
                                <p class="text-xs font-weight-bold mb-0">{{ $item->long_url }}</p>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-sm bg-gradient-success">{{ $item->status }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{ $item->hit_count }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{ $item->created_at }}</span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex mt-3 justify-content-center">
                                    <button class="btn bg-gradient-light" disabled>
                                        <i class="fa fa-lg fa-pencil"></i>
                                    </button>
        
                                    <a target="_blank" href={{ route('redirect', ['short_url' => $item->short_url]) }} class="btn bg-gradient-primary ms-3">
                                        <i class="fa fa-lg fa-external-link"></i>
                                    </a>
                                    <button onclick="copyToClipboard('{{ $item->short_url }}', this)" class="btn bg-gradient-primary ms-3">
                                        <i class="fa fa-lg fa-copy"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                 
                </tbody>
            </table>
        </div>
        
    </div>
    <x-tables.pagination :meta="$data?->meta" />
</div>
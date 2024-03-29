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
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data->items as $index => $item)
                        <tr>
                            <td class="ps-4">
                                <p class="text-xs font-weight-bold mb-0">{{ ($index + 1) + (($data?->meta?->current_page - 1) * 10) }}</p>
                            </td>
                            <td class="text-center">
                                <p class="text-xs font-weight-bold mb-0">{{ $item->short_url }}</p>
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
                            {{-- <td class="text-center">
                                <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                    data-bs-original-title="Edit user">
                                    <i class="fas fa-user-edit text-secondary"></i>
                                </a>
                                <span>
                                    <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                </span>
                            </td> --}}
                        </tr>
                    @empty
                        
                    @endforelse
                 
                </tbody>
            </table>
        </div>
        
    </div>
    <x-tables.pagination :meta="$data?->meta" />
</div>
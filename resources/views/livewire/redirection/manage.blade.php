<div class="main-content">

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All {{ $modules?->name }}</h5>
                        </div>
                        <a wire:navigate href="{{ route('admin.redirection.create') }}" class="btn bg-gradient-primary btn-sm mb-0">
                            <i class="fa fa-plus fa-lg"></i>
                        </a>
                    </div>
                </div>

                @desktop
                    <livewire:redirection.table lazy>
                @elsedesktop
                    <livewire:redirection.collapsible>
                @enddesktop
            </div>
        </div>
    </div>

   
</div>

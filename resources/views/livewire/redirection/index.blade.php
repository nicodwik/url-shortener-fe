<div class="main-content">

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All {{ $modules?->name }}</h5>
                        </div>
                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New {{ $modules?->name }}</a>
                    </div>
                </div>
                <livewire:redirection.table lazy>
            </div>
        </div>
    </div>
</div>

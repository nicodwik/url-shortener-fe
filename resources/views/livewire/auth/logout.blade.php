<div>
    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <div class="card p-2">
            <div class="d-flex align-items-center">
                <img src="https://ui-avatars.com/api/?name={{ $user?->name }}" class="avatar avatar-sm me-2">
                <div class="d-flex flex-column">
                    <h6 class="text-sm font-weight-normal mb-0">
                        <span class="font-weight-bold">{{ $user?->name }}</span>
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                        {{ $user->email }}
                    </p>
                </div>
               
            </div>
        </div>
       
    </a>
    <ul class="dropdown-menu mt-2 dropdown-menu-end p-2 me-sm-n4" aria-labelledby="dropdownMenuButton">
        <li>
            <div class="d-flex flex-column justify-content-center">
                <a class="btn btn-outline-danger btn-sm mb-0" wire:click="logout">log out</a>
            </div>
        </li>
    </ul>
</div>

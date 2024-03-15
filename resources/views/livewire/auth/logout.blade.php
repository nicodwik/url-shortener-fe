<div>
    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-user me-sm-1"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
        <li class="mb-2">
            <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                    <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">{{$user?->name}}</span>
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                            {{ $user->email }}
                        </p>
                    </div>
                   
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <a class="btn btn-danger btn-sm mb-0" wire:click="logout">log out</a>
                </div>
            </a>
        </li>
    </ul>
</div>

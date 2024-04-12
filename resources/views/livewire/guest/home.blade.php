<div>
    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a
                            class="navbar-brand font-weight-bolder ms-sm-3"
                            href="https://demos.creative-tim.com/soft-ui-design-system/index.html"
                            rel="tooltip"
                            title="Designed and Coded by Creative Tim"
                            data-placement="bottom"
                            target="_blank"
                        >
                            {{ config('app.name') }}
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2"> <span class="navbar-toggler-bar bar1"></span> <span class="navbar-toggler-bar bar2"></span> <span class="navbar-toggler-bar bar3"></span> </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            
                            <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">
                                {{-- <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="javascript:;" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pages <img src="{{ asset('guest/assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1" />
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                                        <div class="d-none d-lg-block">
                                            <div class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center px-0">
                                                <div class="d-inline-block">
                                                    <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>shop</title>
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(0.000000, 148.000000)">
                                                                            <path
                                                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                                opacity="0.598981585"
                                                                            ></path>
                                                                            <path
                                                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                                                                            ></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Landing Pages
                                            </div>
                                            <a href="./pages/about-us.html" class="dropdown-item border-radius-md"> <span class="ps-3">About Us</span> </a>
                                            <a href="./pages/contact-us.html" class="dropdown-item border-radius-md"> <span class="ps-3">Contact Us</span> </a>
                                            <a href="./pages/author.html" class="dropdown-item border-radius-md"> <span class="ps-3">Author</span> </a>
                                            <div class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center px-0 mt-3">
                                                <div class="d-inline-block">
                                                    <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>office</title>
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(153.000000, 2.000000)">
                                                                            <path
                                                                                d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                                                                                opacity="0.6"
                                                                            ></path>
                                                                            <path
                                                                                d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"
                                                                            ></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Account
                                            </div>
                                            <a href="./pages/sign-in.html" class="dropdown-item border-radius-md"> <span class="ps-3">Sign In</span> </a>
                                        </div>
                                        <div class="d-lg-none">
                                            <div class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center px-0">
                                                <div class="d-inline-block">
                                                    <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>shop</title>
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(0.000000, 148.000000)">
                                                                            <path
                                                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                                opacity="0.598981585"
                                                                            ></path>
                                                                            <path
                                                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                                                                            ></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Landing Pages
                                            </div>
                                            <a href="./pages/about-us.html" class="dropdown-item border-radius-md"> <span class="ps-3">About Us</span> </a>
                                            <a href="./pages/contact-us.html" class="dropdown-item border-radius-md"> <span class="ps-3">Contact Us</span> </a>
                                            <a href="./pages/author.html" class="dropdown-item border-radius-md"> <span class="ps-3">Author</span> </a>
                                            <div class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center px-0 mt-3">
                                                <div class="d-inline-block">
                                                    <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>office</title>
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(153.000000, 2.000000)">
                                                                            <path
                                                                                d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                                                                                opacity="0.6"
                                                                            ></path>
                                                                            <path
                                                                                d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"
                                                                            ></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                Account
                                            </div>
                                            <a href="./pages/sign-in.html" class="dropdown-item border-radius-md"> <span class="ps-3">Sign In</span> </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="javascript:;" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                                        Blocks <img src="{{ asset('guest/assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1" />
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                                        <div class="d-none d-lg-block">
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1"><i class="ni ni-single-copy-04 text-gradient text-primary"></i></div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
                                                                <span class="text-sm">See all sections</span>
                                                            </div>
                                                            <img src="{{ asset('guest/assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow" />
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/hero-sections.html"> Page Headers </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/features.html"> Features </a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1"><i class="ni ni-laptop text-gradient text-primary"></i></div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
                                                                <span class="text-sm">See all navigations</span>
                                                            </div>
                                                            <img src="{{ asset('guest/assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow" />
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/navbars.html"> Navbars </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/nav-tabs.html"> Nav Tabs </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/pagination.html"> Pagination </a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1"><i class="ni ni-badge text-gradient text-primary"></i></div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
                                                                <span class="text-sm">See all input areas</span>
                                                            </div>
                                                            <img src="{{ asset('guest/assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow" />
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/inputs.html"> Inputs </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/forms.html"> Forms </a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1"><i class="ni ni-notification-70 text-gradient text-primary"></i></div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
                                                                <span class="text-sm">See all examples</span>
                                                            </div>
                                                            <img src="{{ asset('guest/assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow" />
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/alerts.html"> Alerts </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/modals.html"> Modals </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/tooltips-popovers.html"> Tooltips & Popovers </a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1"><i class="ni ni-app text-gradient text-primary"></i></div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
                                                                <span class="text-sm">See all elements</span>
                                                            </div>
                                                            <img src="{{ asset('guest/assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow" />
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/avatars.html"> Avatars </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/badges.html"> Badges </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/breadcrumbs.html"> Breadcrumbs </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/buttons.html"> Buttons </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/dropdowns.html"> Dropdowns </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/progress-bars.html"> Progress Bars </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/toggles.html"> Toggles </a>
                                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/typography.html"> Typography </a>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="row d-lg-none">
                                            <div class="col-md-12">
                                                <div class="d-flex mb-2">
                                                    <div class="icon h-10 me-3 d-flex mt-1"><i class="ni ni-single-copy-04 text-gradient text-primary"></i></div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div><h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6></div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/hero-sections.html"> Page Headers </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/features.html"> Features </a>
                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1"><i class="ni ni-laptop text-gradient text-primary"></i></div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div><h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6></div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/navbars.html"> Navbars </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/nav-tabs.html"> Nav Tabs </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/pagination.html"> Pagination </a>
                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1"><i class="ni ni-badge text-gradient text-primary"></i></div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div><h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6></div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/inputs.html"> Inputs </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/forms.html"> Forms </a>
                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1"><i class="ni ni-notification-70 text-gradient text-primary"></i></div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div><h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6></div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/alerts.html"> Alerts </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/modals.html"> Modals </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/tooltips-popovers.html"> Tooltips & Popovers </a>
                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1"><i class="ni ni-app text-gradient text-primary"></i></div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div><h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6></div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/avatars.html"> Avatars </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/badges.html"> Badges </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/breadcrumbs.html"> Breadcrumbs </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/buttons.html"> Buttons </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/dropdowns.html"> Dropdowns </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/progress-bars.html"> Progress Bars </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/toggles.html"> Toggles </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/typography.html"> Typography </a>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="javascript:;" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                        Docs <img src="{{ asset('guest/assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1" />
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                                        <div class="d-none d-lg-block">
                                            <ul class="list-group">
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-design-system ">
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>spaceship</title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(4.000000, 301.000000)">
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"
                                                                                    ></path>
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"
                                                                                    ></path>
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                                        opacity="0.598539807"
                                                                                    ></path>
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                                        opacity="0.598539807"
                                                                                    ></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                                                                <span class="text-sm">All about overview, quick start, license and contents</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" ">
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>document</title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(154.000000, 300.000000)">
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                                        opacity="0.603585379"
                                                                                    ></path>
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"
                                                                                    ></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                                                                <span class="text-sm">See our colors, icons and typography</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" ">
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>box-3d-50</title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(603.000000, 0.000000)">
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"
                                                                                    ></path>
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                                        opacity="0.7"
                                                                                    ></path>
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                                        opacity="0.7"
                                                                                    ></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                                                                <span class="text-sm">Explore our collection of fully designed components</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" ">
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>switches</title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(154.000000, 149.000000)">
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"
                                                                                        opacity="0.6"
                                                                                    ></path>
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"
                                                                                    ></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                                                                <span class="text-sm">Check how you can integrate our plugins</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href=" ">
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>settings</title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(304.000000, 151.000000)">
                                                                                    <polygon
                                                                                        class="color-background"
                                                                                        opacity="0.596981957"
                                                                                        points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"
                                                                                    ></polygon>
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                                        opacity="0.596981957"
                                                                                    ></path>
                                                                                    <path
                                                                                        class="color-background"
                                                                                        d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"
                                                                                    ></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                                                                <span class="text-sm">For those who want flexibility, use our utility classes</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="row d-lg-none">
                                            <div class="col-md-12 g-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>spaceship</title>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                            <g transform="translate(4.000000, 301.000000)">
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"
                                                                                ></path>
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"
                                                                                ></path>
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                                    opacity="0.598539807"
                                                                                ></path>
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                                    opacity="0.598539807"
                                                                                ></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                                                            <span class="text-sm">All about overview, quick start, license and contents</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>document</title>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                            <g transform="translate(154.000000, 300.000000)">
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                                    opacity="0.603585379"
                                                                                ></path>
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"
                                                                                ></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                                                            <span class="text-sm">See our colors, icons and typography</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>box-3d-50</title>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                            <g transform="translate(603.000000, 0.000000)">
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"
                                                                                ></path>
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                                    opacity="0.7"
                                                                                ></path>
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                                    opacity="0.7"
                                                                                ></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                                                            <span class="text-sm">Explore our collection of fully designed components</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>switches</title>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                            <g transform="translate(154.000000, 149.000000)">
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z"
                                                                                    opacity="0.6"
                                                                                ></path>
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"
                                                                                ></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                                                            <span class="text-sm">Check how you can integrate our plugins</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>settings</title>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                            <g transform="translate(304.000000, 151.000000)">
                                                                                <polygon
                                                                                    class="color-background"
                                                                                    opacity="0.596981957"
                                                                                    points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"
                                                                                ></polygon>
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                                    opacity="0.596981957"
                                                                                ></path>
                                                                                <path
                                                                                    class="color-background"
                                                                                    d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"
                                                                                ></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                                                            <span class="text-sm">All about overview, quick start, license and contents</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                {{-- <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="https://github.com/creativetimofficial/soft-ui-design-system" target="_blank">
                                        <i class="fa fa-github me-1"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
                                    </a>
                                </li> --}}
                                @if (App\Helpers\AuthAPIHelper::isLoggedIn())
                                    <li class="nav-item my-auto ms-3 ms-lg-auto">
                                        {{-- <livewire:auth.logout lazy /> --}}
                                        <a href="{{ route('admin.dashboard') }}" class="btn btn-sm bg-gradient-primary btn-round mb-0 me-1 mt-2 mt-md-0">Dashboard</a>
                                    </li>
                                @else
                                    <li class="nav-item my-auto ms-3 ms-lg-auto">
                                        <a href="https://www.creative-tim.com/builder?ref=navbar-soft-design-system" class="btn btn-sm btn-outline-primary btn-round mb-0 me-1 mt-2 mt-md-0">Register</a>
                                    </li>
                                    <li class="nav-item my-auto ms-3 ms-lg-0">
                                        <a wire:navigate href="{{ route('guest.login') }}" class="btn btn-sm bg-gradient-primary btn-round mb-0 me-1 mt-2 mt-md-0">Login</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <header class="header-2">
        <div class="page-header min-vh-75 relative" style="background-image: url('{{ asset('guest/assets/img/curved-images/curved.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">{{ config('app.name') }}</h1>
                        <p class="lead text-white mt-3">
                            Shorten Your Links, Share More.
                        </p>
                        <form wire:submit='createRedirection'>
                            <div class="row mt-4">
                                <div class="col-md-9 col-sm-12">
                                  <div class="input-group">
                                    <input wire:model='long_url' class="form-control" placeholder="Long URL" aria-label="Long URL" type="url" required>
                                  </div>
                                </div>
                                <div class="col-md-3 col-sm-12 text-center">
                                    <button type="submit" class="btn w-100 bg-gradient-primary mb-0">Make It Short</button>
                                  </div>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                    <defs><path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" /></defs>
                    <g class="moving-waves">
                        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
                    </g>
                </svg>
            </div>
        </div>
    </header>
    <section class="mt-4 pt-3 pb-4" id="count-stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
                    <div class="row">
                        <div class="col-md-6 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary"><span id="state1" countTo="34">0</span>%</h1>
                                <h5 class="mt-3">More clicks!</h5>
                                <p class="text-sm">Average social media post with a shortened URL</p>
                            </div>
                            <hr class="vertical dark" />
                        </div>
                        <div class="col-md-6 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary"><span id="state2" countTo="500">0</span>+</h1>
                                <h5 class="mt-3">Total URLs</h5>
                                <p class="text-sm">Join the hundreds who are already experiencing the benefits of short URLs</p>
                            </div>
                            <hr class="vertical dark" />
                        </div>
                        {{-- <div class="col-md-4">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary" id="state3" countTo="4">0</h1>
                                <h5 class="mt-3">Pages</h5>
                                <p class="text-sm">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ms-auto">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                                <div class="icon icon-sm">
                                    <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>document</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g transform="translate(154.000000, 300.000000)">
                                                        <path
                                                            class="color-background"
                                                            d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                            opacity="0.603585379"
                                                        ></path>
                                                        <path
                                                            class="color-background"
                                                            d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"
                                                        ></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <h5 class="font-weight-bolder mt-3">Simple & Fast</h5>
                                <p class="pe-5">Just paste your long URL, click shorten, and you're ready to go!</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <div class="icon icon-sm">
                                    <svg class="text-primary" width="25px" height="25px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>shop</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g id="shop-" transform="translate(0.000000, 148.000000)">
                                                        <path
                                                            class="color-background"
                                                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                            opacity="0.598981585"
                                                        ></path>
                                                        <path
                                                            class="color-background"
                                                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                                                        ></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <h5 class="font-weight-bolder mt-3">Free & Forever</h5>
                                <p class="pe-3">Shorten as many links as you need, whenever you need them, absolutely free.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mt-5">
                        <div class="col-md-6 mt-3">
                            <div class="info">
                                <div class="icon icon-sm">
                                    <svg class="text-primary" width="25px" height="25px" viewBox="0 0 42 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>time-alarm</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-2319.000000, -440.000000)" fill="#923DFA" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g id="time-alarm" transform="translate(603.000000, 149.000000)">
                                                        <path
                                                            class="color-background"
                                                            d="M18.8086957,4.70034783 C15.3814926,0.343541521 9.0713063,-0.410050841 4.7145,3.01715217 C0.357693695,6.44435519 -0.395898667,12.7545415 3.03130435,17.1113478 C5.53738466,10.3360568 11.6337901,5.54042955 18.8086957,4.70034783 L18.8086957,4.70034783 Z"
                                                            opacity="0.6"
                                                        ></path>
                                                        <path
                                                            class="color-background"
                                                            d="M38.9686957,17.1113478 C42.3958987,12.7545415 41.6423063,6.44435519 37.2855,3.01715217 C32.9286937,-0.410050841 26.6185074,0.343541521 23.1913043,4.70034783 C30.3662099,5.54042955 36.4626153,10.3360568 38.9686957,17.1113478 Z"
                                                            opacity="0.6"
                                                        ></path>
                                                        <path
                                                            class="color-background"
                                                            d="M34.3815652,34.7668696 C40.2057958,27.7073059 39.5440671,17.3375603 32.869743,11.0755718 C26.1954189,4.81358341 15.8045811,4.81358341 9.13025701,11.0755718 C2.45593289,17.3375603 1.79420418,27.7073059 7.61843478,34.7668696 L3.9753913,40.0506522 C3.58549114,40.5871271 3.51710058,41.2928217 3.79673036,41.8941824 C4.07636014,42.4955431 4.66004722,42.8980248 5.32153275,42.9456105 C5.98301828,42.9931963 6.61830436,42.6784048 6.98113043,42.1232609 L10.2744783,37.3434783 C16.5555112,42.3298213 25.4444888,42.3298213 31.7255217,37.3434783 L35.0188696,42.1196087 C35.6014207,42.9211577 36.7169135,43.1118605 37.53266,42.5493622 C38.3484064,41.9868639 38.5667083,40.8764423 38.0246087,40.047 L34.3815652,34.7668696 Z M30.1304348,25.5652174 L21,25.5652174 C20.49574,25.5652174 20.0869565,25.1564339 20.0869565,24.6521739 L20.0869565,15.5217391 C20.0869565,15.0174791 20.49574,14.6086957 21,14.6086957 C21.50426,14.6086957 21.9130435,15.0174791 21.9130435,15.5217391 L21.9130435,23.7391304 L30.1304348,23.7391304 C30.6346948,23.7391304 31.0434783,24.1479139 31.0434783,24.6521739 C31.0434783,25.1564339 30.6346948,25.5652174 30.1304348,25.5652174 Z"
                                                        ></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <h5 class="font-weight-bolder mt-3">Track Your Clicks</h5>
                                <p class="pe-5">Gain valuable insights into how many times your shortened URLs are clicked.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="info">
                                <div class="icon icon-sm">
                                    <svg class="text-primary" width="25px" height="25px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>office</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g id="office" transform="translate(153.000000, 2.000000)">
                                                        <path
                                                            class="color-background"
                                                            d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                                                            opacity="0.6"
                                                        ></path>
                                                        <path
                                                            class="color-background"
                                                            d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"
                                                        ></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <h5 class="font-weight-bolder mt-3">Safe & Secure</h5>
                                <p class="pe-3">All shortened links are protected with robust security measures.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
                    <div class="card shadow-lg">
                      <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <div class="d-block blur-shadow-image">
                          <img src="{{ asset('guest/assets/img/meeting.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow rounded-3">
                        </div>
                        {{-- <div class="colored-shadow" style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg&quot;);"></div> --}}
                      </div>
                      <div class="card-body">
                        <a href="javascript:;">
                          <h5 class="mt-3">
                            Shorten Your Links Today!
                          </h5>
                        </a>
                        <p>
                            Experience the convenience and power of short URLs.
                        </p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- ------- END PRE-FOOTER 2 - simple social line w/ title & 3 buttons -------- -->
    <footer class="footer pt-5 mt-5">
        <hr class="horizontal dark mb-5" />
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-3 mb-4 ms-auto">
                    <div><h6 class="text-gradient text-primary font-weight-bolder">{{ config('app.name') }}</h6></div>
                    <div>
                        <h6 class="mt-3 mb-2 opacity-8">Social</h6>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank"> <i class="fab fa-facebook text-lg opacity-8"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank"> <i class="fab fa-twitter text-lg opacity-8"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank"> <i class="fab fa-dribbble text-lg opacity-8"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank"> <i class="fab fa-github text-lg opacity-8"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank"> <i class="fab fa-youtube text-lg opacity-8"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Company</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank"> About Us </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank"> Freebies </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank"> Premium Tools </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank"> Blog </a></li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Resources</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item"><a class="nav-link" href="https://iradesign.io/" target="_blank"> Illustrations </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank"> Bits & Snippets </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank"> Affiliate Program </a></li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Help & Support</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank"> Contact Us </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank"> Knowledge Center </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://services.creative-tim.com/?ref=ct-soft-ui-footer" target="_blank"> Custom Development </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank"> Sponsorships </a></li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Legal</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/terms" target="_blank"> Terms &amp; Conditions </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/privacy" target="_blank"> Privacy Policy </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.creative-tim.com/license" target="_blank"> Licenses (EULA) </a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-12">
                    <div class="text-center">
                        <p class="my-4 text-sm">
                            All rights reserved. Copyright © 2024
                            {{ config('app.name') }} by <a href="https://instagram.com/nicodwi_k">Nico Dwi K.</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>    
</div> 

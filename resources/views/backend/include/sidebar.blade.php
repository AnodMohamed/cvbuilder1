<nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
            </svg>
        </a>
    </div>
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="{{ route('index') }}" >
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Home</span><span class="sr-only">(current)</span>
            </a>

        </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
        <span>cv</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/><line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/>
                </svg>
                <span class="ml-3 item-text">Insert Cv</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('usercv') }}"><span class="ml-1 item-text">Basic Info</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('user.profile') }}"><span class="ml-1 item-text">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('user.skill') }}"><span class="ml-1 item-text">Skills</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('user.edu') }}"><span class="ml-1 item-text">Education</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('user.language') }}"><span class="ml-1 item-text">Language</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('user.image') }}"><span class="ml-1 item-text">Image</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('user.proSkill') }}"><span class="ml-1 item-text">Technical Skills</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('user.portfolio') }}"><span class="ml-1 item-text">Portfolio</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Edit Cv</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('edit.info') }}"><span class="ml-1 item-text">Basic Info</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('edit.profile') }}"><span class="ml-1 item-text">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('edit.skill') }}"><span class="ml-1 item-text">Skills</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('edit.edu') }}"><span class="ml-1 item-text">Education</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('edit.language') }}"><span class="ml-1 item-text">Language</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('edit.image') }}"><span class="ml-1 item-text">Image</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('edit.proSkill') }}"><span class="ml-1 item-text">Technical Skills</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-3" href="{{ route('edit.portfolio') }}"><span class="ml-1 item-text">Portfolio</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="{{ route('cv') }}"  class=" nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                </svg>
                <span class="ml-3 item-text">View Cv</span>
            </a>

        </li>

    </ul>


</nav>

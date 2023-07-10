<div class="p-2" style="background-color: #78A2CC">
    <a class="d-flex align-items-center mt-1 text-decoration-none text-white" href="/">
        <img src="/img/logo.png" alt="" width="200" class="navbar-brand mr-2">
    </a>
    <ul class="nav nav-pills flex-column mt-2">
        <li class="nav-item py-2 py-sm-0">
            <a href="/adminDashboard" class="nav-link {{ ($on == 'dashboard') ? 'on' : ''}} text-white d-flex flex-row">
                <div style="width: 35px;">
                    <i class="fa-solid fa-house-chimney fa-xl"></i>
                </div>
                <span class="fs-5 ms-3 d-none d-sm-inline">Dashboard</span>
            </a>
        </li>
        <li class="nav-item py-2 py-sm-0">
            <a href="/adminHospital" class="nav-link {{ ($on == 'hospital') ? 'on' : ''}} text-white d-flex flex-row">
                <div style="width: 35px;">
                    <i class="fa-solid fa-hospital fa-xl"></i>
                </div>

                <span class="fs-5 ms-3 d-none d-sm-inline">Hospital</span>
            </a>
        </li>
        <li class="nav-item py-2 py-sm-0">
            <a href="/adminDoctor" class="nav-link {{ ($on == 'doctor') ? 'on' : ''}} text-white d-flex flex-row">
                <div style="width: 35px;">
                    <i class="fa-solid fa-user-doctor fa-xl"></i>
                </div>

                <span class="fs-5 ms-3 d-none d-sm-inline">Doctor</span>
            </a>
        </li>
        <li class="nav-item py-2 py-sm-0">
            <a href="/adminArticle" class="nav-link {{ ($on == 'article') ? 'on' : ''}} text-white d-flex flex-row">
                <div style="width: 35px;">
                    <i class="fa-solid fa-newspaper fa-xl"></i>
                </div>
                <span class="fs-5 ms-3 d-none d-sm-inline">Article</span>
            </a>
        </li>
        {{-- <li class="nav-item py-2 py-sm-0">
            <a href="" class="nav-link {{ ($on == 'profile') ? 'on' : ''}} text-white">
                <i class="fa-solid fa-user fa-xl"></i>
                <span class="fs-5 ms-3 d-none d-sm-inline">Profile</span>
            </a>
        </li> --}}
        <li class="nav-item py-2 py-sm-0">
            <a href="" class="nav-link {{ ($on == 'sign-out') ? 'on' : ''}} text-white d-flex flex-row">
                <div style="width: 35px;">
                    <i class="fa-solid fa-right-from-bracket fa-xl"></i>
                </div>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="" style="background: none; border: none;color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;">
                      <span class="fs-5 ms-3 d-none d-sm-inline">Logout</span>
                    </button>
                </form>
            </a>
        </li>
    </ul>
</div>

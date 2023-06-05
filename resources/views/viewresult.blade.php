<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Decafe Aplikasi Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="bg-dark">


<nav class="navbar navbar-expand navbar-dark bg-success sticky-top">
    <div class="container-lg">
        <a class="navbar-brand" href=".">THE VOTING</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalView"><i class="bi bi-person-circle"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"  data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="bi bi-pencil-square"></i>Edit Profile</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalUbahPassword"><i class="bi bi-key"></i> Ubah Password</a></li>
                        <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-lg">
        <div class="row">
<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        
                        <li class="nav-item">
                            <a class="nav-link ps-2"
                                aria-current="page" href="home"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-house-door me-2 mb-1"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                                </svg>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 "
                                href="menu"><i class="bi bi-table me-2 mb-1"></i>Create Voting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 "
                                href="order"><i class="bi bi-people-fill"></i></svg>Manage Member</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2  active link-light"
                                href="customer"><i class="bi bi-list-ul"></i></i>
                                Hasil Voting</a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link ps-2 "
                                href="user"><i class="bi bi-people-fill"></i>
                                Manage Voting</a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="col-lg-9 mt-2">




<div class="row mb-5">
                <div class="col-md-6 mb-4">
                   <div class="row shado-md p-2 m-0 rounded shadow-md bg-white">
                       <div class="col-md-3">
                             <img class="rounded-pill max-130 p-2" src="assets/images/testimonial/member-01.jpg" alt="">
                       </div>
                       <div class="col-md-9 align-self-center">
                           <h4 class="mt-3 fs-5 mb-1 fw-bold">James Anderson</h4>
                           <p class="fs-8 mb-2 fw-bold">Votes : 34,567</p>
                           <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                          </div>
                       </div>
                   </div>
                </div>
                
                <div class="col-md-6 mb-4">
                   <div class="row shado-md p-2 m-0 rounded shadow-md bg-white">
                       <div class="col-md-3">
                             <img class="rounded-pill max-130 p-2" src="assets/images/testimonial/member-02.jpg" alt="">
                       </div>
                       <div class="col-md-9 align-self-center">
                           <h4 class="mt-3 fs-5 mb-1 fw-bold">Arun Kumar</h4>
                           <p class="fs-8 mb-2 fw-bold">Votes : 34,567</p>
                           <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" aria-label="Example with label" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                          </div>
                       </div>
                   </div>
                </div>
                
                <div class="col-md-6 mb-4">
                   <div class="row shado-md p-2 m-0 rounded shadow-md bg-white">
                       <div class="col-md-3">
                             <img class="rounded-pill max-130 p-2" src="assets/images/testimonial/member-03.jpg" alt="">
                       </div>
                       <div class="col-md-9 align-self-center">
                           <h4 class="mt-3 fs-5 mb-1 fw-bold">Pream Nath</h4>
                           <p class="fs-8 mb-2 fw-bold">Votes : 34,567</p>
                           <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" aria-label="Example with label" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                          </div>
                       </div>
                   </div>
                </div>
                <div class="col-md-6 mb-4">
                   <div class="row shado-md p-2 m-0 rounded shadow-md bg-white">
                       <div class="col-md-3">
                             <img class="rounded-pill max-130 p-2" src="assets/images/testimonial/member-04.jpg" alt="">
                       </div>
                       <div class="col-md-9 align-self-center">
                           <h4 class="mt-3 fs-5 mb-1 fw-bold">Reena Anath</h4>
                           <p class="fs-8 mb-2 fw-bold">Votes : 34,567</p>
                           <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                          </div>
                       </div>
                   </div>
                </div>
                
                 <div class="col-md-6 mb-4">
                   <div class="row shado-md p-2 m-0 rounded shadow-md bg-white">
                       <div class="col-md-3">
                             <img class="rounded-pill max-130 p-2" src="assets/images/testimonial/member-05.png" alt="">
                       </div>
                       <div class="col-md-9 align-self-center">
                           <h4 class="mt-3 fs-5 mb-1 fw-bold">Allen Shory</h4>
                           <p class="fs-8 mb-2 fw-bold">Votes : 34,567</p>
                           <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                          </div>
                       </div>
                   </div>
                </div>
                
                 <div class="col-md-6 mb-4">
                   <div class="row shado-md p-2 m-0 rounded shadow-md bg-white">
                       <div class="col-md-3">
                             <img class="rounded-pill max-130 p-2" src="assets/images/testimonial/member-06.png" alt="">
                       </div>
                       <div class="col-md-9 align-self-center">
                           <h4 class="mt-3 fs-5 mb-1 fw-bold">Aney Kumm</h4>
                           <p class="fs-8 mb-2 fw-bold">Votes : 34,567</p>
                           <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label" style="width: 85%;" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100">59%</div>
                          </div>
                       </div>
                   </div>
                </div>
                 
            </div>


</div>
@extends('shards-dashboard_custom.dashBoardLayout')
@section('title', 'Table')
@section('content')
<div class="listacc-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Dashboard</span>
            <h3 class="page-title">Blog Overview</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Posts</span>
                            <h6 class="stats-small__value count my-3">2,390</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Pages</span>
                            <h6 class="stats-small__value count my-3">182</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Comments</span>
                            <h6 class="stats-small__value count my-3">8,147</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage stats-small__percentage--decrease">3.8%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Users</span>
                            <h6 class="stats-small__value count my-3">2,413</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-12 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Subscribers</span>
                            <h6 class="stats-small__value count my-3">17,281</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage stats-small__percentage--decrease">2.4%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-5"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- New Draft Component -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card card-small h-100">
                <div class="card-header border-bottom">
                    <h6 class="m-0">New Draft</h6>
                </div>
                <div class="card-body d-flex flex-column">
                    <form class="quick-post-form">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brave New World">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Words can be like X-rays if you use them properly..."></textarea>
                        </div>
                        <div class=" form-group mb-0">
                            <button type="submit" class="backVal btn btn-accent">Create Draft</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End New Draft Component -->
        <!-- Discussions Component -->
        
        <!-- End Discussions Component -->
        <!-- Top Referrals Component -->
        <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
            <div class="card card-small">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Top Referrals</h6>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-small list-group-flush">
                        <li class="list-group-item d-flex px-3">
                            <span class="text-semibold text-fiord-blue">GitHub</span>
                            <span class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
                        </li>
                        <li class="list-group-item d-flex px-3">
                            <span class="text-semibold text-fiord-blue">Stack Overflow</span>
                            <span class="ml-auto text-right text-semibold text-reagent-gray">11,201</span>
                        </li>
                        <li class="list-group-item d-flex px-3">
                            <span class="text-semibold text-fiord-blue">Hacker News</span>
                            <span class="ml-auto text-right text-semibold text-reagent-gray">9,291</span>
                        </li>
                        <li class="list-group-item d-flex px-3">
                            <span class="text-semibold text-fiord-blue">Reddit</span>
                            <span class="ml-auto text-right text-semibold text-reagent-gray">8,281</span>
                        </li>
                        <li class="list-group-item d-flex px-3">
                            <span class="text-semibold text-fiord-blue">The Next Web</span>
                            <span class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
                        </li>
                        <li class="list-group-item d-flex px-3">
                            <span class="text-semibold text-fiord-blue">Tech Crunch</span>
                            <span class="ml-auto text-right text-semibold text-reagent-gray">6,218</span>
                        </li>
                        <li class="list-group-item d-flex px-3">
                            <span class="text-semibold text-fiord-blue">YouTube</span>
                            <span class="ml-auto text-right text-semibold text-reagent-gray">1,218</span>
                        </li>
                        <li class="list-group-item d-flex px-3">
                            <span class="text-semibold text-fiord-blue">Adobe</span>
                            <span class="ml-auto text-right text-semibold text-reagent-gray">827</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer border-top">
                    <div class="row">
                        <div class="col">
                            <select class="custom-select custom-select-sm">
                                <option selected>Last Week</option>
                                <option value="1">Today</option>
                                <option value="2">Last Month</option>
                                <option value="3">Last Year</option>
                            </select>
                        </div>
                        <div class="col text-right view-report">
                            <a href="#">Full report &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Referrals Component -->
    </div>
</div>
@endsection

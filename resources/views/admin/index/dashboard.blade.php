@extends('admin.index')
@section('content')

<div class="app-hero-header">
    <h5 class="fw-light">Welcome Bradford,</h5>
    <h3 class="fw-light mb-5">
        <span>Home</span> / <span class="menu-text">Analytics</span>
    </h3>
</div>
<!-- App Hero header ends -->

<!-- App body starts -->
<div class="app-body">

    <!-- Row start -->
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card shadow mb-4 p-3 rounded-2 justify-content-between flex-row">
                <div class="mt-3">
                    <h5 class="text-secondary fw-light">Sales</h5>
                    <h1 class="text-primary">3700</h1>
                    <span class="badge border border-primary text-primary me-3">Today</span>
                </div>
                <div id="sparkline1"></div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card shadow mb-4 p-3 rounded-2 justify-content-between flex-row">
                <div class="mt-3">
                    <h5 class="text-secondary fw-light">Expenses</h5>
                    <h1 class="text-primary">2500</h1>
                    <span class="badge border border-primary text-primary me-3">Last week</span>
                </div>
                <div id="sparkline2"></div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 col-12">
            <div class="card shadow mb-4 p-3 rounded-2 justify-content-between flex-row">
                <div class="mt-3">
                    <h5 class="text-secondary fw-light">Income</h5>
                    <h1 class="text-primary">250K</h1>
                    <span class="badge border border-primary text-primary me-3">Year 2022</span>
                </div>
                <div id="sparkline3"></div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row starts -->
    <div class="row">
        <div class="col-xxl-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="card-title">Sales by Location</h5>
                </div>
                <div class="card-body">
                    <!-- Row start -->
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-sm-3 col-12">
                            <div class="d-grid gap-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box lg border border-primary rounded-4">
                                        <img src="assets/images/flags/1x1/us.svg" class="img-2x rounded-2"
                                            alt="Bootstrap Gallery" />
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="text-muted">USA</h6>
                                        <h3 class="m-0">$9500</h3>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="icon-box lg border border-primary rounded-4">
                                        <img src="assets/images/flags/1x1/in.svg" class="img-2x rounded-2"
                                            alt="Bootstrap Gallery" />
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="text-muted">India</h6>
                                        <h3 class="m-0">$8700</h3>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="icon-box lg border border-primary rounded-4">
                                        <img src="assets/images/flags/1x1/br.svg" class="img-2x rounded-2"
                                            alt="Bootstrap Gallery" />
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="text-muted">Brazil</h6>
                                        <h3 class="m-0">$7500</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-sm-6 col-12">
                            <div id="world-map-markers3" class="chart-height-xxl position-relative">
                            </div>
                        </div>
                        <div class="col-xxl-2 col-sm-3 col-12">
                            <div class="d-grid gap-4">
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="me-3 text-end">
                                        <h6 class="text-muted">Turkey</h6>
                                        <h3 class="m-0">$6900</h3>
                                    </div>
                                    <div class="icon-box lg border border-success rounded-4">
                                        <img src="assets/images/flags/1x1/tr.svg" class="img-2x rounded-2"
                                            alt="Bootstrap Gallery" />
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="me-3 text-end">
                                        <h6 class="text-muted">France</h6>
                                        <h3 class="m-0">$6200</h3>
                                    </div>
                                    <div class="icon-box lg border border-success rounded-4">
                                        <img src="assets/images/flags/1x1/fr.svg" class="img-2x rounded-2"
                                            alt="Bootstrap Gallery" />
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="me-3 text-end">
                                        <h6 class="text-muted">Germany</h6>
                                        <h3 class="m-0">$5800</h3>
                                    </div>
                                    <div class="icon-box lg border border-success rounded-4">
                                        <img src="assets/images/flags/1x1/de.svg" class="img-2x rounded-2"
                                            alt="Bootstrap Gallery" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Row ends -->

    <!-- Row starts -->
    <div class="row">
        <div class="col-xxl-4 col-sm-6 col-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="card-title">Weekly Sales</h5>
                </div>
                <div class="card-body">
                    <div id="weekly-sales"></div>
                    <div class="text-center my-4">
                        <h2>
                            6400
                            <i class="bi bi-arrow-up-right-circle-fill text-primary"></i>
                        </h2>
                        <p class="text-truncate m-0">
                            15% higher than last month
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-sm-6 col-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="card-title">Deals</h5>
                </div>
                <div class="card-body">
                    <div id="deals"></div>
                    <div class="text-center my-4">
                        <h2>
                            2500
                            <i class="bi bi-arrow-up-right-circle-fill text-primary"></i>
                        </h2>
                        <p class="text-truncate m-0">
                            29% higher than last month
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-sm-6 col-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="card-title">By Channel</h5>
                </div>
                <div class="card-body">
                    <div id="channel"></div>
                    <div class="text-center my-4">
                        <h2>
                            8950
                            <i class="bi bi-arrow-up-right-circle-fill text-primary"></i>
                        </h2>
                        <p class="text-truncate m-0">
                            18% higher than last month
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-sm-6 col-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="card-title">New Customers</h5>
                </div>
                <div class="card-body">
                    <div id="customers"></div>
                    <div class="text-center my-4">
                        <h2>
                            7560
                            <i class="bi bi-arrow-up-right-circle-fill text-primary"></i>
                        </h2>
                        <p class="text-truncate m-0">
                            16% higher than last month
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-sm-6 col-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="card-title">By Device</h5>
                </div>
                <div class="card-body">
                    <div id="device"></div>
                    <div class="text-center my-4">
                        <h2>
                            3860
                            <i class="bi bi-arrow-up-right-circle-fill text-primary"></i>
                        </h2>
                        <p class="text-truncate m-0">
                            16% higher than last month
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-sm-6 col-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="card-title">Demography</h5>
                </div>
                <div class="card-body">
                    <div id="demography" class="d-flex justify-content-center"></div>
                    <div class="text-center my-4">
                        <h2>
                            4250
                            <i class="bi bi-arrow-up-right-circle-fill text-primary"></i>
                        </h2>
                        <p class="text-truncate m-0">
                            24% higher than last month
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row ends -->

</div>

@endsection
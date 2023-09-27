<x-app-layout title="Dashboard">

    <div class="container-fluid container-p-y">

        {{--Breadcrumbs & Page Filters Starts--}}
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 breadcrum-control-left">
                <x-breadcrumb title=""/>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-8 breadcrum-control-right">
                <div class="btn-toolbar demo-inline-spacing" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="First group">
                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false" tabindex="-1">Realtime Dispatches</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false" tabindex="-1">Stats</button>
                            </li>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="nav-align-top mb-4">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                        <div class="col-lg-12 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                    <div class="card-body">
                                        <div class="container">
                                            <h5 class="card-title text-primary">👋 Hi, Nouman!</h5>
                                            <p>Select the date to get results of specific month.</p>
                                        </div>
                                        <div class="container">
                                            <form>
                                                <div class="mb-3 row">
                                                    <div class="col-8">
                                                        <input type="date" class="form-control" name="Date" id="Date">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="col-sm-8">
                                                        <button type="submit" class="btn btn-primary">Get Results</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 text-center text-sm-left">
                                  <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="../assets/img/illustrations/man-with-laptop-light.png" height="200" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/patient.png" alt="chart success" class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Total Loads Count</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Number of Loads</span>">
                                            <h3 class="card-title mb-2">58</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/active-patients.png" alt="chart success"
                                                    class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Loads Completed</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Number of Loads completed</span>">
                                            <h3 class="card-title mb-2">28</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/doctors.png" alt="chart success" class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Loads Pending</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Number of Loads are pending</span>">
                                            <h3 class="card-title mb-2">30</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/insurance.png" alt="chart success" class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Loads Cancelled</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Number of Loads are cancelled</span>">
                                            <h3 class="card-title mb-2">628</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/patient.png" alt="chart success" class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">August Projected <br>Revenue</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Projected Revenue</span>">
                                            <h3 class="card-title mb-2">$580.00</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/active-patients.png" alt="chart success"
                                                    class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">August Recovery <br>Amount</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Recovery Amount</span>">
                                            <h3 class="card-title mb-2">$280.00</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/doctors.png" alt="chart success" class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">August Actual <br>Revenue</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Actual Revenue</span>">
                                            <h3 class="card-title mb-2">30</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/insurance.png" alt="chart success" class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Top Dispatchers</span>
                                        <table class="top-dispatcher-table">
                                            <tr>
                                                <th>
                                                    Dispatcher
                                                </th>
                                                <th>
                                                    Revenue
                                                </th>
                                            </tr>
                                            <hr>
                                            <tr>
                                                <td>
                                                    Nouman
                                                </td>
                                                <td>
                                                    $3200.00
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/patient.png" alt="chart success" class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Total Unpaid <br>Amount</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Projected Revenue</span>">
                                            <h3 class="card-title mb-2">$580.00</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/active-patients.png" alt="chart success"
                                                    class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Previous Months Payments</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Recovery Amount</span>">
                                            <h3 class="card-title mb-2">$280.00</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/doctors.png" alt="chart success" class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Overall Actual <br>Revenue</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Actual Revenue</span>">
                                            <h3 class="card-title mb-2">30</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/icons/unicons/doctors.png" alt="chart success" class="rounded" />
                                            </div>
                                        </div>
                                        <span class="fw-semibold d-block mb-1">Overall Actual <br>Revenue</span>
                                        <span class="badge bg-label-success me-1" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<span>Actual Revenue</span>">
                                            <h3 class="card-title mb-2">30</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-12 col-md-12 col-lg-12 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <div class="container">
                                                    <h5 class="card-title text-primary">Realtime Activity Logs</h5>
                                                    <hr>
                                                    <p>Recent 20 activities</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>
                                            Realtime Dispatches
                                        </h2>
                                        <p class="mb-0">
                                        List of realtime dispatches for today.
                                        <br>
                                        Dispacthers
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                        <div class="row">
                            <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                                <div class="card">
                                  <div class="row row-bordered g-0">
                                    <div class="col-md-8">
                                      <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                                      <div id="totalRevenueChart" class="px-2" style="min-height: 315px;"><div id="apexchartsmq52s5xo" class="apexcharts-canvas apexchartsmq52s5xo apexcharts-theme-light" style="width: 434px; height: 300px;"><svg id="SvgjsSvg1594" width="434" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="434" height="300"><div class="apexcharts-legend apexcharts-align-left apx-legend-position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;"><div class="apexcharts-legend-series" rel="1" seriesname="2021" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="2021" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span></div><div class="apexcharts-legend-series" rel="2" seriesname="2020" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="2020" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span></div></div><style type="text/css">

                                  .apexcharts-legend {
                                    display: flex;
                                    overflow: auto;
                                    padding: 0 10px;
                                  }
                                  .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
                                    flex-wrap: wrap
                                  }
                                  .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                    flex-direction: column;
                                    bottom: 0;
                                  }
                                  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                    justify-content: flex-start;
                                  }
                                  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                    justify-content: center;
                                  }
                                  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                    justify-content: flex-end;
                                  }
                                  .apexcharts-legend-series {
                                    cursor: pointer;
                                    line-height: normal;
                                  }
                                  .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
                                    display: flex;
                                    align-items: center;
                                  }
                                  .apexcharts-legend-text {
                                    position: relative;
                                    font-size: 14px;
                                  }
                                  .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                    pointer-events: none;
                                  }
                                  .apexcharts-legend-marker {
                                    position: relative;
                                    display: inline-block;
                                    cursor: pointer;
                                    margin-right: 3px;
                                    border-style: solid;
                                  }

                                  .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
                                    display: inline-block;
                                  }
                                  .apexcharts-legend-series.apexcharts-no-click {
                                    cursor: auto;
                                  }
                                  .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                    display: none !important;
                                  }
                                  .apexcharts-inactive-legend {
                                    opacity: 0.45;
                                  }</style></foreignObject><g id="SvgjsG1596" class="apexcharts-inner apexcharts-graphical" transform="translate(53.796875, 51)"><defs id="SvgjsDefs1595"><linearGradient id="SvgjsLinearGradient1600" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1601" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1602" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1603" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskmq52s5xo"><rect id="SvgjsRect1605" width="370.203125" height="223.73" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskmq52s5xo"></clipPath><clipPath id="nonForecastMaskmq52s5xo"></clipPath><clipPath id="gridRectMarkerMaskmq52s5xo"><rect id="SvgjsRect1606" width="364.203125" height="221.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1604" width="20.583035714285714" height="217.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1600)" class="apexcharts-xcrosshairs" y2="217.73" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1626" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1627" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1629" font-family="Helvetica, Arial, sans-serif" x="25.728794642857142" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1630">Jan</tspan><title>Jan</title></text><text id="SvgjsText1632" font-family="Helvetica, Arial, sans-serif" x="77.18638392857143" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1633">Feb</tspan><title>Feb</title></text><text id="SvgjsText1635" font-family="Helvetica, Arial, sans-serif" x="128.64397321428572" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1636">Mar</tspan><title>Mar</title></text><text id="SvgjsText1638" font-family="Helvetica, Arial, sans-serif" x="180.1015625" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1639">Apr</tspan><title>Apr</title></text><text id="SvgjsText1641" font-family="Helvetica, Arial, sans-serif" x="231.5591517857143" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1642">May</tspan><title>May</title></text><text id="SvgjsText1644" font-family="Helvetica, Arial, sans-serif" x="283.01674107142856" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1645">Jun</tspan><title>Jun</title></text><text id="SvgjsText1647" font-family="Helvetica, Arial, sans-serif" x="334.47433035714283" y="246.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1648">Jul</tspan><title>Jul</title></text></g></g><g id="SvgjsG1663" class="apexcharts-grid"><g id="SvgjsG1664" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1666" x1="0" y1="0" x2="360.203125" y2="0" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1667" x1="0" y1="43.546" x2="360.203125" y2="43.546" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1668" x1="0" y1="87.092" x2="360.203125" y2="87.092" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1669" x1="0" y1="130.638" x2="360.203125" y2="130.638" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1670" x1="0" y1="174.184" x2="360.203125" y2="174.184" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1671" x1="0" y1="217.73" x2="360.203125" y2="217.73" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1665" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1673" x1="0" y1="217.73" x2="360.203125" y2="217.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1672" x1="0" y1="1" x2="0" y2="217.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1607" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1608" class="apexcharts-series" seriesName="2021" rel="1" data:realIndex="0"><path id="SvgjsPath1610" d="M 15.437276785714285 120.638L 15.437276785714285 62.255200000000016Q 15.437276785714285 52.255200000000016 25.437276785714285 52.255200000000016L 20.020312500000003 52.255200000000016Q 30.020312500000003 52.255200000000016 30.020312500000003 62.255200000000016L 30.020312500000003 62.255200000000016L 30.020312500000003 120.638Q 30.020312500000003 130.638 20.020312500000003 130.638L 25.437276785714285 130.638Q 15.437276785714285 130.638 15.437276785714285 120.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 15.437276785714285 120.638L 15.437276785714285 62.255200000000016Q 15.437276785714285 52.255200000000016 25.437276785714285 52.255200000000016L 20.020312500000003 52.255200000000016Q 30.020312500000003 52.255200000000016 30.020312500000003 62.255200000000016L 30.020312500000003 62.255200000000016L 30.020312500000003 120.638Q 30.020312500000003 130.638 20.020312500000003 130.638L 25.437276785714285 130.638Q 15.437276785714285 130.638 15.437276785714285 120.638z" pathFrom="M 15.437276785714285 120.638L 15.437276785714285 120.638L 30.020312500000003 120.638L 30.020312500000003 120.638L 30.020312500000003 120.638L 30.020312500000003 120.638L 30.020312500000003 120.638L 15.437276785714285 120.638" cy="52.255200000000016" cx="63.89486607142857" j="0" val="18" barHeight="78.38279999999999" barWidth="20.583035714285714"></path><path id="SvgjsPath1611" d="M 66.89486607142857 120.638L 66.89486607142857 110.15580000000001Q 66.89486607142857 100.15580000000001 76.89486607142857 100.15580000000001L 71.47790178571428 100.15580000000001Q 81.47790178571428 100.15580000000001 81.47790178571428 110.15580000000001L 81.47790178571428 110.15580000000001L 81.47790178571428 120.638Q 81.47790178571428 130.638 71.47790178571428 130.638L 76.89486607142857 130.638Q 66.89486607142857 130.638 66.89486607142857 120.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 66.89486607142857 120.638L 66.89486607142857 110.15580000000001Q 66.89486607142857 100.15580000000001 76.89486607142857 100.15580000000001L 71.47790178571428 100.15580000000001Q 81.47790178571428 100.15580000000001 81.47790178571428 110.15580000000001L 81.47790178571428 110.15580000000001L 81.47790178571428 120.638Q 81.47790178571428 130.638 71.47790178571428 130.638L 76.89486607142857 130.638Q 66.89486607142857 130.638 66.89486607142857 120.638z" pathFrom="M 66.89486607142857 120.638L 66.89486607142857 120.638L 81.47790178571428 120.638L 81.47790178571428 120.638L 81.47790178571428 120.638L 81.47790178571428 120.638L 81.47790178571428 120.638L 66.89486607142857 120.638" cy="100.15580000000001" cx="115.35245535714284" j="1" val="7" barHeight="30.482199999999995" barWidth="20.583035714285714"></path><path id="SvgjsPath1612" d="M 118.35245535714284 120.638L 118.35245535714284 75.31900000000002Q 118.35245535714284 65.31900000000002 128.35245535714284 65.31900000000002L 122.93549107142854 65.31900000000002Q 132.93549107142854 65.31900000000002 132.93549107142854 75.31900000000002L 132.93549107142854 75.31900000000002L 132.93549107142854 120.638Q 132.93549107142854 130.638 122.93549107142854 130.638L 128.35245535714284 130.638Q 118.35245535714284 130.638 118.35245535714284 120.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 118.35245535714284 120.638L 118.35245535714284 75.31900000000002Q 118.35245535714284 65.31900000000002 128.35245535714284 65.31900000000002L 122.93549107142854 65.31900000000002Q 132.93549107142854 65.31900000000002 132.93549107142854 75.31900000000002L 132.93549107142854 75.31900000000002L 132.93549107142854 120.638Q 132.93549107142854 130.638 122.93549107142854 130.638L 128.35245535714284 130.638Q 118.35245535714284 130.638 118.35245535714284 120.638z" pathFrom="M 118.35245535714284 120.638L 118.35245535714284 120.638L 132.93549107142854 120.638L 132.93549107142854 120.638L 132.93549107142854 120.638L 132.93549107142854 120.638L 132.93549107142854 120.638L 118.35245535714284 120.638" cy="65.31900000000002" cx="166.81004464285712" j="2" val="15" barHeight="65.31899999999999" barWidth="20.583035714285714"></path><path id="SvgjsPath1613" d="M 169.81004464285712 120.638L 169.81004464285712 14.35460000000002Q 169.81004464285712 4.354600000000019 179.81004464285712 4.354600000000019L 174.39308035714282 4.354600000000019Q 184.39308035714282 4.354600000000019 184.39308035714282 14.35460000000002L 184.39308035714282 14.35460000000002L 184.39308035714282 120.638Q 184.39308035714282 130.638 174.39308035714282 130.638L 179.81004464285712 130.638Q 169.81004464285712 130.638 169.81004464285712 120.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 169.81004464285712 120.638L 169.81004464285712 14.35460000000002Q 169.81004464285712 4.354600000000019 179.81004464285712 4.354600000000019L 174.39308035714282 4.354600000000019Q 184.39308035714282 4.354600000000019 184.39308035714282 14.35460000000002L 184.39308035714282 14.35460000000002L 184.39308035714282 120.638Q 184.39308035714282 130.638 174.39308035714282 130.638L 179.81004464285712 130.638Q 169.81004464285712 130.638 169.81004464285712 120.638z" pathFrom="M 169.81004464285712 120.638L 169.81004464285712 120.638L 184.39308035714282 120.638L 184.39308035714282 120.638L 184.39308035714282 120.638L 184.39308035714282 120.638L 184.39308035714282 120.638L 169.81004464285712 120.638" cy="4.354600000000019" cx="218.2676339285714" j="3" val="29" barHeight="126.28339999999999" barWidth="20.583035714285714"></path><path id="SvgjsPath1614" d="M 221.2676339285714 120.638L 221.2676339285714 62.255200000000016Q 221.2676339285714 52.255200000000016 231.2676339285714 52.255200000000016L 225.8506696428571 52.255200000000016Q 235.8506696428571 52.255200000000016 235.8506696428571 62.255200000000016L 235.8506696428571 62.255200000000016L 235.8506696428571 120.638Q 235.8506696428571 130.638 225.8506696428571 130.638L 231.2676339285714 130.638Q 221.2676339285714 130.638 221.2676339285714 120.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 221.2676339285714 120.638L 221.2676339285714 62.255200000000016Q 221.2676339285714 52.255200000000016 231.2676339285714 52.255200000000016L 225.8506696428571 52.255200000000016Q 235.8506696428571 52.255200000000016 235.8506696428571 62.255200000000016L 235.8506696428571 62.255200000000016L 235.8506696428571 120.638Q 235.8506696428571 130.638 225.8506696428571 130.638L 231.2676339285714 130.638Q 221.2676339285714 130.638 221.2676339285714 120.638z" pathFrom="M 221.2676339285714 120.638L 221.2676339285714 120.638L 235.8506696428571 120.638L 235.8506696428571 120.638L 235.8506696428571 120.638L 235.8506696428571 120.638L 235.8506696428571 120.638L 221.2676339285714 120.638" cy="52.255200000000016" cx="269.7252232142857" j="4" val="18" barHeight="78.38279999999999" barWidth="20.583035714285714"></path><path id="SvgjsPath1615" d="M 272.7252232142857 120.638L 272.7252232142857 88.3828Q 272.7252232142857 78.3828 282.7252232142857 78.3828L 277.3082589285714 78.3828Q 287.3082589285714 78.3828 287.3082589285714 88.3828L 287.3082589285714 88.3828L 287.3082589285714 120.638Q 287.3082589285714 130.638 277.3082589285714 130.638L 282.7252232142857 130.638Q 272.7252232142857 130.638 272.7252232142857 120.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 272.7252232142857 120.638L 272.7252232142857 88.3828Q 272.7252232142857 78.3828 282.7252232142857 78.3828L 277.3082589285714 78.3828Q 287.3082589285714 78.3828 287.3082589285714 88.3828L 287.3082589285714 88.3828L 287.3082589285714 120.638Q 287.3082589285714 130.638 277.3082589285714 130.638L 282.7252232142857 130.638Q 272.7252232142857 130.638 272.7252232142857 120.638z" pathFrom="M 272.7252232142857 120.638L 272.7252232142857 120.638L 287.3082589285714 120.638L 287.3082589285714 120.638L 287.3082589285714 120.638L 287.3082589285714 120.638L 287.3082589285714 120.638L 272.7252232142857 120.638" cy="78.3828" cx="321.18281249999995" j="5" val="12" barHeight="52.255199999999995" barWidth="20.583035714285714"></path><path id="SvgjsPath1616" d="M 324.18281249999995 120.638L 324.18281249999995 101.44660000000002Q 324.18281249999995 91.44660000000002 334.18281249999995 91.44660000000002L 328.76584821428565 91.44660000000002Q 338.76584821428565 91.44660000000002 338.76584821428565 101.44660000000002L 338.76584821428565 101.44660000000002L 338.76584821428565 120.638Q 338.76584821428565 130.638 328.76584821428565 130.638L 334.18281249999995 130.638Q 324.18281249999995 130.638 324.18281249999995 120.638z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 324.18281249999995 120.638L 324.18281249999995 101.44660000000002Q 324.18281249999995 91.44660000000002 334.18281249999995 91.44660000000002L 328.76584821428565 91.44660000000002Q 338.76584821428565 91.44660000000002 338.76584821428565 101.44660000000002L 338.76584821428565 101.44660000000002L 338.76584821428565 120.638Q 338.76584821428565 130.638 328.76584821428565 130.638L 334.18281249999995 130.638Q 324.18281249999995 130.638 324.18281249999995 120.638z" pathFrom="M 324.18281249999995 120.638L 324.18281249999995 120.638L 338.76584821428565 120.638L 338.76584821428565 120.638L 338.76584821428565 120.638L 338.76584821428565 120.638L 338.76584821428565 120.638L 324.18281249999995 120.638" cy="91.44660000000002" cx="372.64040178571423" j="6" val="9" barHeight="39.191399999999994" barWidth="20.583035714285714"></path></g><g id="SvgjsG1617" class="apexcharts-series" seriesName="2020" rel="2" data:realIndex="1"><path id="SvgjsPath1619" d="M 15.437276785714285 150.638L 15.437276785714285 187.24779999999998Q 15.437276785714285 197.24779999999998 25.437276785714285 197.24779999999998L 20.020312500000003 197.24779999999998Q 30.020312500000003 197.24779999999998 30.020312500000003 187.24779999999998L 30.020312500000003 187.24779999999998L 30.020312500000003 150.638Q 30.020312500000003 140.638 20.020312500000003 140.638L 25.437276785714285 140.638Q 15.437276785714285 140.638 15.437276785714285 150.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 15.437276785714285 150.638L 15.437276785714285 187.24779999999998Q 15.437276785714285 197.24779999999998 25.437276785714285 197.24779999999998L 20.020312500000003 197.24779999999998Q 30.020312500000003 197.24779999999998 30.020312500000003 187.24779999999998L 30.020312500000003 187.24779999999998L 30.020312500000003 150.638Q 30.020312500000003 140.638 20.020312500000003 140.638L 25.437276785714285 140.638Q 15.437276785714285 140.638 15.437276785714285 150.638z" pathFrom="M 15.437276785714285 150.638L 15.437276785714285 150.638L 30.020312500000003 150.638L 30.020312500000003 150.638L 30.020312500000003 150.638L 30.020312500000003 150.638L 30.020312500000003 150.638L 15.437276785714285 150.638" cy="177.24779999999998" cx="63.89486607142857" j="0" val="-13" barHeight="-56.60979999999999" barWidth="20.583035714285714"></path><path id="SvgjsPath1620" d="M 66.89486607142857 150.638L 66.89486607142857 209.0208Q 66.89486607142857 219.0208 76.89486607142857 219.0208L 71.47790178571428 219.0208Q 81.47790178571428 219.0208 81.47790178571428 209.0208L 81.47790178571428 209.0208L 81.47790178571428 150.638Q 81.47790178571428 140.638 71.47790178571428 140.638L 76.89486607142857 140.638Q 66.89486607142857 140.638 66.89486607142857 150.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 66.89486607142857 150.638L 66.89486607142857 209.0208Q 66.89486607142857 219.0208 76.89486607142857 219.0208L 71.47790178571428 219.0208Q 81.47790178571428 219.0208 81.47790178571428 209.0208L 81.47790178571428 209.0208L 81.47790178571428 150.638Q 81.47790178571428 140.638 71.47790178571428 140.638L 76.89486607142857 140.638Q 66.89486607142857 140.638 66.89486607142857 150.638z" pathFrom="M 66.89486607142857 150.638L 66.89486607142857 150.638L 81.47790178571428 150.638L 81.47790178571428 150.638L 81.47790178571428 150.638L 81.47790178571428 150.638L 81.47790178571428 150.638L 66.89486607142857 150.638" cy="199.0208" cx="115.35245535714284" j="1" val="-18" barHeight="-78.38279999999999" barWidth="20.583035714285714"></path><path id="SvgjsPath1621" d="M 118.35245535714284 150.638L 118.35245535714284 169.8294Q 118.35245535714284 179.8294 128.35245535714284 179.8294L 122.93549107142854 179.8294Q 132.93549107142854 179.8294 132.93549107142854 169.8294L 132.93549107142854 169.8294L 132.93549107142854 150.638Q 132.93549107142854 140.638 122.93549107142854 140.638L 128.35245535714284 140.638Q 118.35245535714284 140.638 118.35245535714284 150.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 118.35245535714284 150.638L 118.35245535714284 169.8294Q 118.35245535714284 179.8294 128.35245535714284 179.8294L 122.93549107142854 179.8294Q 132.93549107142854 179.8294 132.93549107142854 169.8294L 132.93549107142854 169.8294L 132.93549107142854 150.638Q 132.93549107142854 140.638 122.93549107142854 140.638L 128.35245535714284 140.638Q 118.35245535714284 140.638 118.35245535714284 150.638z" pathFrom="M 118.35245535714284 150.638L 118.35245535714284 150.638L 132.93549107142854 150.638L 132.93549107142854 150.638L 132.93549107142854 150.638L 132.93549107142854 150.638L 132.93549107142854 150.638L 118.35245535714284 150.638" cy="159.8294" cx="166.81004464285712" j="2" val="-9" barHeight="-39.191399999999994" barWidth="20.583035714285714"></path><path id="SvgjsPath1622" d="M 169.81004464285712 150.638L 169.81004464285712 191.6024Q 169.81004464285712 201.6024 179.81004464285712 201.6024L 174.39308035714282 201.6024Q 184.39308035714282 201.6024 184.39308035714282 191.6024L 184.39308035714282 191.6024L 184.39308035714282 150.638Q 184.39308035714282 140.638 174.39308035714282 140.638L 179.81004464285712 140.638Q 169.81004464285712 140.638 169.81004464285712 150.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 169.81004464285712 150.638L 169.81004464285712 191.6024Q 169.81004464285712 201.6024 179.81004464285712 201.6024L 174.39308035714282 201.6024Q 184.39308035714282 201.6024 184.39308035714282 191.6024L 184.39308035714282 191.6024L 184.39308035714282 150.638Q 184.39308035714282 140.638 174.39308035714282 140.638L 179.81004464285712 140.638Q 169.81004464285712 140.638 169.81004464285712 150.638z" pathFrom="M 169.81004464285712 150.638L 169.81004464285712 150.638L 184.39308035714282 150.638L 184.39308035714282 150.638L 184.39308035714282 150.638L 184.39308035714282 150.638L 184.39308035714282 150.638L 169.81004464285712 150.638" cy="181.6024" cx="218.2676339285714" j="3" val="-14" barHeight="-60.96439999999999" barWidth="20.583035714285714"></path><path id="SvgjsPath1623" d="M 221.2676339285714 150.638L 221.2676339285714 152.411Q 221.2676339285714 162.411 231.2676339285714 162.411L 225.8506696428571 162.411Q 235.8506696428571 162.411 235.8506696428571 152.411L 235.8506696428571 152.411L 235.8506696428571 150.638Q 235.8506696428571 140.638 225.8506696428571 140.638L 231.2676339285714 140.638Q 221.2676339285714 140.638 221.2676339285714 150.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 221.2676339285714 150.638L 221.2676339285714 152.411Q 221.2676339285714 162.411 231.2676339285714 162.411L 225.8506696428571 162.411Q 235.8506696428571 162.411 235.8506696428571 152.411L 235.8506696428571 152.411L 235.8506696428571 150.638Q 235.8506696428571 140.638 225.8506696428571 140.638L 231.2676339285714 140.638Q 221.2676339285714 140.638 221.2676339285714 150.638z" pathFrom="M 221.2676339285714 150.638L 221.2676339285714 150.638L 235.8506696428571 150.638L 235.8506696428571 150.638L 235.8506696428571 150.638L 235.8506696428571 150.638L 235.8506696428571 150.638L 221.2676339285714 150.638" cy="142.411" cx="269.7252232142857" j="4" val="-5" barHeight="-21.772999999999996" barWidth="20.583035714285714"></path><path id="SvgjsPath1624" d="M 272.7252232142857 150.638L 272.7252232142857 204.6662Q 272.7252232142857 214.6662 282.7252232142857 214.6662L 277.3082589285714 214.6662Q 287.3082589285714 214.6662 287.3082589285714 204.6662L 287.3082589285714 204.6662L 287.3082589285714 150.638Q 287.3082589285714 140.638 277.3082589285714 140.638L 282.7252232142857 140.638Q 272.7252232142857 140.638 272.7252232142857 150.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 272.7252232142857 150.638L 272.7252232142857 204.6662Q 272.7252232142857 214.6662 282.7252232142857 214.6662L 277.3082589285714 214.6662Q 287.3082589285714 214.6662 287.3082589285714 204.6662L 287.3082589285714 204.6662L 287.3082589285714 150.638Q 287.3082589285714 140.638 277.3082589285714 140.638L 282.7252232142857 140.638Q 272.7252232142857 140.638 272.7252232142857 150.638z" pathFrom="M 272.7252232142857 150.638L 272.7252232142857 150.638L 287.3082589285714 150.638L 287.3082589285714 150.638L 287.3082589285714 150.638L 287.3082589285714 150.638L 287.3082589285714 150.638L 272.7252232142857 150.638" cy="194.6662" cx="321.18281249999995" j="5" val="-17" barHeight="-74.0282" barWidth="20.583035714285714"></path><path id="SvgjsPath1625" d="M 324.18281249999995 150.638L 324.18281249999995 195.957Q 324.18281249999995 205.957 334.18281249999995 205.957L 328.76584821428565 205.957Q 338.76584821428565 205.957 338.76584821428565 195.957L 338.76584821428565 195.957L 338.76584821428565 150.638Q 338.76584821428565 140.638 328.76584821428565 140.638L 334.18281249999995 140.638Q 324.18281249999995 140.638 324.18281249999995 150.638z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskmq52s5xo)" pathTo="M 324.18281249999995 150.638L 324.18281249999995 195.957Q 324.18281249999995 205.957 334.18281249999995 205.957L 328.76584821428565 205.957Q 338.76584821428565 205.957 338.76584821428565 195.957L 338.76584821428565 195.957L 338.76584821428565 150.638Q 338.76584821428565 140.638 328.76584821428565 140.638L 334.18281249999995 140.638Q 324.18281249999995 140.638 324.18281249999995 150.638z" pathFrom="M 324.18281249999995 150.638L 324.18281249999995 150.638L 338.76584821428565 150.638L 338.76584821428565 150.638L 338.76584821428565 150.638L 338.76584821428565 150.638L 338.76584821428565 150.638L 324.18281249999995 150.638" cy="185.957" cx="372.64040178571423" j="6" val="-15" barHeight="-65.31899999999999" barWidth="20.583035714285714"></path></g><g id="SvgjsG1609" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1618" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1674" x1="0" y1="0" x2="360.203125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1675" x1="0" y1="0" x2="360.203125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1676" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1677" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1678" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1649" class="apexcharts-yaxis" rel="0" transform="translate(15.796875, 0)"><g id="SvgjsG1650" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1651" font-family="Helvetica, Arial, sans-serif" x="20" y="52.5" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1652">30</tspan><title>30</title></text><text id="SvgjsText1653" font-family="Helvetica, Arial, sans-serif" x="20" y="96.04599999999999" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1654">20</tspan><title>20</title></text><text id="SvgjsText1655" font-family="Helvetica, Arial, sans-serif" x="20" y="139.59199999999998" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1656">10</tspan><title>10</title></text><text id="SvgjsText1657" font-family="Helvetica, Arial, sans-serif" x="20" y="183.13799999999998" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1658">0</tspan><title>0</title></text><text id="SvgjsText1659" font-family="Helvetica, Arial, sans-serif" x="20" y="226.68399999999997" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1660">-10</tspan><title>-10</title></text><text id="SvgjsText1661" font-family="Helvetica, Arial, sans-serif" x="20" y="270.22999999999996" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1662">-20</tspan><title>-20</title></text></g></g><g id="SvgjsG1597" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 451px; height: 377px;"></div></div><div class="contract-trigger"></div></div></div>
                                    <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="text-center">
                                          <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              2022
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                              <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                              <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                              <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="growthChart" style="min-height: 154.875px;"><div id="apexchartsg1trplk3" class="apexcharts-canvas apexchartsg1trplk3 apexcharts-theme-light" style="width: 225px; height: 154.875px;"><svg id="SvgjsSvg1679" width="225" height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1681" class="apexcharts-inner apexcharts-graphical" transform="translate(5.5, -25)"><defs id="SvgjsDefs1680"><clipPath id="gridRectMaskg1trplk3"><rect id="SvgjsRect1683" width="222" height="285" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskg1trplk3"></clipPath><clipPath id="nonForecastMaskg1trplk3"></clipPath><clipPath id="gridRectMarkerMaskg1trplk3"><rect id="SvgjsRect1684" width="220" height="287" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1689" x1="1" y1="0" x2="0" y2="1"><stop id="SvgjsStop1690" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop><stop id="SvgjsStop1691" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop><stop id="SvgjsStop1692" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1700" x1="1" y1="0" x2="0" y2="1"><stop id="SvgjsStop1701" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop><stop id="SvgjsStop1702" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop><stop id="SvgjsStop1703" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1685" class="apexcharts-radialbar"><g id="SvgjsG1686"><g id="SvgjsG1687" class="apexcharts-tracks"><g id="SvgjsG1688" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"></path></g></g><g id="SvgjsG1694"><g id="SvgjsG1699" class="apexcharts-series apexcharts-radial-series" seriesName="Growth" rel="1" data:realIndex="0"><path id="SvgjsPath1704" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1700)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="5" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="78" index="0" j="0" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"></path></g><circle id="SvgjsCircle1695" r="54.65121951219512" cx="108" cy="108" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1696" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1697" font-family="Public Sans" x="108" y="123" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">Growth</text><text id="SvgjsText1698" font-family="Public Sans" x="108" y="99" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">78%</text></g></g></g></g><line id="SvgjsLine1705" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1706" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1682" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                      <div class="text-center fw-medium pt-3 mb-2">62% Company Growth</div>

                                      <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                        <div class="d-flex">
                                          <div class="me-2">
                                            <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                                          </div>
                                          <div class="d-flex flex-column">
                                            <small>2022</small>
                                            <h6 class="mb-0">$32.5k</h6>
                                          </div>
                                        </div>
                                        <div class="d-flex">
                                          <div class="me-2">
                                            <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                          </div>
                                          <div class="d-flex flex-column">
                                            <small>2021</small>
                                            <h6 class="mb-0">$41.2k</h6>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 226px; height: 377px;"></div></div><div class="contract-trigger"></div></div></div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Breadcrumbs & Page Filters Ends--}}

        {{--Welcome Widget--}}

        {{--Dashboard Statistics Starts--}}

        {{--Dashboard Statistics Ends--}}
    </div>

    <div class="container-fluid flex-grow-1">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">

            </div>
        </div>
    </div>

</x-app-layout>

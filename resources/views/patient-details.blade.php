<x-app-layout title="Patient Details">
{{--  --}}
    <div class="container-fluid pt-4">

        {{--Breadcrumbs & Page Filters Starts--}}
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 breadcrum-control-left">
                <x-breadcrumb title="Patients / Alice Shane"/>
            </div>
        </div>
        {{--Breadcrumbs & Page Filters Ends--}}
    </div>

    {{-- Recent Patients Records Table Starts --}}
    <div class="container-fluid flex-grow-1">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="">Patient Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-tabs nav-fill" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#demographics" aria-controls="demographics" aria-selected="true">Demographics</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#medical-records" aria-controls="medical-records" aria-selected="false" tabindex="-1">Medical Records</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#inrurance" aria-controls="inrurance" aria-selected="false" tabindex="-1">Insurance</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#documents" aria-controls="documents" aria-selected="false" tabindex="-1">Documents</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#forms" aria-controls="forms" aria-selected="false" tabindex="-1">Forms</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#prescription" aria-controls="prescription" aria-selected="false" tabindex="-1">Prescription</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#items" aria-controls="items" aria-selected="false" tabindex="-1">Items</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#orders" aria-controls="orders" aria-selected="false" tabindex="-1">Orders</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#notes" aria-controls="notes" aria-selected="false" tabindex="-1">Notes</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#financial" aria-controls="financial" aria-selected="false" tabindex="-1">Financial</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#resupply" aria-controls="resupply" aria-selected="false" tabindex="-1">Resupply</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#tasks" aria-controls="tasks" aria-selected="false" tabindex="-1">Tasks</button>
                              </li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane fade show active" id="demographics" role="tabpanel">
                                <p>
                                  Demographics
                                </p>
                              </div>
                              <div class="tab-pane fade" id="medical-records" role="tabpanel">
                                <p>
                                    medical-records
                                </p>
                              </div>
                              <div class="tab-pane fade" id="inrurance" role="tabpanel">
                                <p>
                                    inrurance
                                </p>
                              </div>
                              <div class="tab-pane fade" id="documents" role="tabpanel">
                                <p>
                                    documents
                                </p>
                              </div>
                              <div class="tab-pane fade" id="forms" role="tabpanel">
                                <p>
                                    forms
                                </p>
                              </div>
                              <div class="tab-pane fade" id="prescription" role="tabpanel">
                                <p>
                                    prescription
                                </p>
                              </div>
                              <div class="tab-pane fade" id="items" role="tabpanel">
                                <p>
                                    items
                                </p>
                              </div>
                              <div class="tab-pane fade" id="orders" role="tabpanel">
                                <p>
                                    orders
                                </p>
                              </div>
                              <div class="tab-pane fade" id="notes" role="tabpanel">
                                <p>
                                    notes
                                </p>
                              </div>
                              <div class="tab-pane fade" id="financial" role="tabpanel">
                                <p>
                                    financial
                                </p>
                              </div>
                              <div class="tab-pane fade" id="resupply" role="tabpanel">
                                <p>
                                    resupply
                                </p>
                              </div>
                              <div class="tab-pane fade" id="tasks" role="tabpanel">
                                <p>
                                    tasks
                                </p>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Recent Patients Records Table Ends --}}

</x-app-layout>

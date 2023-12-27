@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Dinero de hoy</p>
                                    <h4 class="mb-0">$5k</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+10% </span>que la
                                    semana pasada</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Usuarios de hoy</p>
                                    <h4 class="mb-0">200</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>que el
                                    mes pasado</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Nuevos Clientes</p>
                                    <h4 class="mb-0">500</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> que ayer
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Ventas</p>
                                    <h4 class="mb-0">$10,000</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>que ayer
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h6 class="mb-0">Reportes</h6>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="btn btn-outline-primary btn-sm mb-0">Ver Todo</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3 pb-0">
                                <ul class="list-group">
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark font-weight-bold text-sm">Mayo, 01, 2023</h6>
                                            <span class="text-xs">#MS-415646</span>
                                        </div>
                                        <div class="d-flex align-items-center text-sm">
                                            <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                    class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                PDF</button>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="text-dark mb-1 font-weight-bold text-sm">Abril, 01, 2023</h6>
                                            <span class="text-xs">#RV-126749</span>
                                        </div>
                                        <div class="d-flex align-items-center text-sm">
                                            <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                    class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                PDF</button>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="text-dark mb-1 font-weight-bold text-sm">Marzo, 01, 2023</h6>
                                            <span class="text-xs">#FB-212562</span>
                                        </div>
                                        <div class="d-flex align-items-center text-sm">
                                            <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                    class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                PDF</button>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="text-dark mb-1 font-weight-bold text-sm">Febrero, 01, 2023</h6>
                                            <span class="text-xs">#QW-103578</span>
                                        </div>
                                        <div class="d-flex align-items-center text-sm">
                                            <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                    class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                PDF</button>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            <h6 class="text-dark mb-1 font-weight-bold text-sm">Enero, 01, 2023</h6>
                                            <span class="text-xs">#AR-803481</span>
                                        </div>
                                        <div class="d-flex align-items-center text-sm">
                                            <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                    class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                PDF</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

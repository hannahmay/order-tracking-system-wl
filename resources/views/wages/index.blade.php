@extends('layout.main')

@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon-customer"></i>
			    </span>
                <h3 class="kt-portlet__head-title">
                    {{ __('Wages') }}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-actions">
                    <div class="dropdown dropdown-inline">
                        <a href="#" class="btn btn-brand btn-pill btn-sm btn-icon btn-icon-md" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#modal_client" id="btn_create">
                            <i class="flaticon2-add-1"></i>
                        </a>
                    </div>&nbsp;
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">
            <!--begin: Search Form -->
            <form class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label class="">Search:</label>
                            <div class="kt-input-icon kt-input-icon--right">
                                <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                    <span><i class="la la-search"></i></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label class="">Status:</label>
                            <select class="form-control kt-select2" id="search_select_status">
                                <option></option>
                                <!-- TODO: Dynamically define the status options -->
                                <option value="E">Enabled</option>
                                <option value="D">Disabled</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label class="">Registered Date:</label>
                            <div class='input-group pull-right' id="search_daterangepicker">
                                <input type='text' class="form-control" readonly placeholder="Select date range" />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end: Search Form -->
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit">

            <!--begin: Datatable -->
            <div class="kt-datatable" id="ajax_data"></div>
            <!--end: Datatable -->
        </div>
    </div>
    <!--end::Portlet-->
@endsection('content')

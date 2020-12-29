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
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="row row-no-padding row-col-separator-xl">
                @foreach ($wages as $wage)
                    <div class="col-md-12 col-lg-12 col-xl-4">
                        @include('layout.widgets.stats', ['wage'=>$wage])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--end::Portlet-->
@endsection('content')

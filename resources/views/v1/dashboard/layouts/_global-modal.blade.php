<!-- Modal -->
<div class="modal fade creavocat-global" id="kpitor_modal_target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2><span class="modal-icon"></span> <span class="modal-title"></span></h2>
                <!--begin::Close-->
                <div id="kpitor_modal_target_cancel" class="btn btn-sm btn-icon btn-active-color-primary"
                    data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <div id="modal-kpitor-content">

            </div>
        </div>
    </div>
</div>


<div class="modal fade upload-global" id="kpitor_modal_upload" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2><span class="modal-icon"></span> <span class="modal-title"></span></h2>
                <!--begin::Close-->
                <div id="kpitor_modal_upload_cancel" class="btn btn-sm btn-icon btn-active-color-primary"
                    data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <div class="modal-body">
                <form class="form" action="#" method="post">
                    <!--begin::Input group-->
                    <div class="fv-row">
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="kt_dropzone_global"
                            style="min-height: 500px;display: flex;justify-content: center;align-items: center">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <!--begin::Icon-->
                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                <!--end::Icon-->

                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Please, drop files here or click to
                                        upload.</h3>
                                    </h3>
                                    <span class="fs-7 fw-bold text-gray-400">You can upload up to 10 files.</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Dropzone-->
                        <div class="dz-error-message"></div>
                    </div>
                    <!--end::Input group-->
                </form>
            </div>
        </div>
    </div>
</div>

<!--end::Form-->
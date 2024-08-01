<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
data-kt-drawer-toggle="#kt_aside_mobile_toggle">
<!--begin::Aside Toolbarl-->
<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
    <!--begin::Aside user-->
    <!--begin::User-->
    <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">

        @include('v1.dashboard.layouts.template.aside._user')
    </div>
    <!--end::User-->
    <!--end::Aside user-->
</div>
<!--end::Aside Toolbarl-->
<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
        data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
        <!--begin::Menu-->
    @include('v1.dashboard.layouts.template.aside._admin')
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside menu-->
<!--begin::Footer-->
<div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
    <a href="../../demo8/dist/documentation/getting-started.html" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
        <span class="btn-label">Log Out</span>

    </a>
</div>
<!--end::Footer-->
</div>

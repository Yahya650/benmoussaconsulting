@extends('v1.leads_form.layouts.default')

@section('title', 'Request Appointment')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="form-body without-side">
        <div class="website-logo">
            {{-- <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="/assets/leads_form/images/logo-light.svg" alt="">
                </div>
            </a> --}}
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="/assets/leads_form/images/graphic8.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="form-icon">
                            <div class="icon-holder">
                                <img src="/assets/leads_form/images/icon1.svg" alt="">
                            </div>
                        </div>
                        <h3 class="form-title-center">! املء المعلومات الاتية لاخد موعد</h3>
                        <p class="text-center">هل تعلم أن نجاح «85٪» يأتي فقط من السلوك⚡</p>
                        <form id="clientForm">
                            <input class="form-control m-1" type="text" name="full_name" placeholder="الاسم الكامل">
                            <span id="full_name-error" class="text text-danger mt-2"></span>

                            <input class="form-control m-1" type="text" name="phone_number" placeholder="06*********">
                            <span id="phone_number-error" class="text text-danger mt-2"></span>

                            <input class="form-control m-1" type="text" name="phone_number_confirmation"
                                placeholder="تاكيد رقم الهاتف">
                            <span id="phone_number_confirmation-error" class="text text-danger mt-2"></span>

                            <div class="form-button" class="text text-center">
                                <button id="submit" type="submit" class="ibtn ibtn-full">ارسال</button>
                                <a href="{{ route('web.home') }}" class="text text-center">الرجوع للصفحة الرئيسية</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#clientForm').on('submit', function(e) {
                e.preventDefault();

                const form = $(this);
                const submitButton = $('#submit');

                if (!$('input[name=full_name]').val()) {
                    $('input[name=full_name]').addClass('is-invalid');
                    $('#full_name-error').text("الرجاء ادخال الاسم الكامل");
                    return;
                } else {
                    $('input[name=full_name]').removeClass('is-invalid');
                    $('#full_name-error').text("");
                }

                if (!/^[A-Za-z\s]+$/.test($('input[name=full_name]').val())) {
                    $('input[name=full_name]').addClass('is-invalid');
                    $('#full_name-error').text(
                        "الاسم غير صحيح. يجب أن يحتوي فقط على أحرف أبجدية ومسافات.");
                    return;
                } else {
                    $('input[name=full_name]').removeClass('is-invalid');
                    $('#full_name-error').text("");
                }

                if (!$('input[name=phone_number]').val()) {
                    $('input[name=phone_number]').addClass('is-invalid');
                    $('#phone_number-error').text("الرجاء ادخال رقم الهاتف");
                    return;
                } else {
                    $('input[name=phone_number]').removeClass('is-invalid');
                    $('#phone_number-error').text("");
                }

                if ($('input[name=phone_number]').val().length != 10 || !/^\d+$/.test($(
                        'input[name=phone_number]').val())) {
                    $('input[name=phone_number]').addClass('is-invalid');
                    $('#phone_number-error').text("EX: 0600000000 الرجاء ادخال رقم هاتف صحيح");
                    return;
                } else {
                    $('input[name=phone_number]').removeClass('is-invalid');
                    $('#phone_number-error').text("");
                }

                if ($('input[name=phone_number_confirmation]').val() != $('input[name=phone_number]')
                    .val()) {
                    $('input[name=phone_number_confirmation]').addClass('is-invalid');
                    $('#phone_number_confirmation-error').text("الرجاء التأكد من رقم الهاتف");
                    return;
                } else {
                    $('input[name=phone_number_confirmation]').removeClass('is-invalid');
                    $('#phone_number_confirmation-error').text("");
                }

                submitButton.text("جاري الارسال...").css("cursor", "not-allowed").attr("disabled", true);

                $.ajax({
                    type: "POST",
                    url: "{{ route('leads.store') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        full_name: $('input[name=full_name]').val(),
                        phone_number: $('input[name=phone_number]').val(),
                    },
                    success: function(response) {
                        submitButton.html(`
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        `).attr("disabled", false).css("cursor",
                            "pointer");
                        window.location.href = response.redirect;
                    },
                    error: function(res, status, error) {
                        submitButton.text("ارسال").attr("disabled", false).css("cursor",
                            "pointer");
                        Swal.fire({
                            icon: "error",
                            title: "حدث خطأ...",
                            html: res.responseJSON.message,
                        });
                    }
                });
            });
        });
    </script>
@endsection

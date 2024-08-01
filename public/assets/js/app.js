const global_selector = "#kpitor_modal_target";
const global_search = "#global-modal-search";

function dd(message) {
    console.log(message);
}
toastr.options = {
    closeButton: true,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toastr-bottom-right",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
};

function playSuccessSound() {
    var audio = new Audio("/assets/sounds/success.mp3");
    audio.play();
}

function playErrorSound() {
    var audio = new Audio("/assets/sounds/error.mp3");
    audio.play();
}
/* FUNCTIONS HELPERS STARTS HERE */
function alert_success(message) {
    Swal.fire({
        text: message,
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Alright",
        customClass: {
            confirmButton: "btn btn-success",
        },
    });
}

const container = document.getElementById("global-toast");
const targetElement = document.querySelector('[data-kt-docs-toast="stack"]');
if (targetElement) {
    targetElement.parentNode.removeChild(targetElement);
}

function toast_success(message) {
    const newToast = targetElement.cloneNode(true);
    container.append(newToast);
    const toast = bootstrap.Toast.getOrCreateInstance(newToast);
    toast.show();
    $(container).find(".toast-body").html(message);
    $(container).find(".toast-header").addClass("light-success");
    $(container).find(".toast-icon").html(`
     <span class="svg-icon svg-icon-2 svg-icon-success me-3">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
        <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
    </svg>
    </span>
    `);
}

function alert_error(message) {
    Swal.fire({
        text: message,
        icon: "error",
        buttonsStyling: false,
        confirmButtonText: "Alright",
        customClass: {
            confirmButton: "btn btn-success",
        },
    });
}

function toast_error(message) {
    playSound();
    const newToast = targetElement.cloneNode(true);
    container.append(newToast);
    const toast = bootstrap.Toast.getOrCreateInstance(newToast);
    toast.show();
    $(container).find(".toast-body").html(message);
    $(container).find(".toast-header").addClass("light-danger");
    $(container).find(".toast-icon").html(`
     <span class="svg-icon svg-icon-2 svg-icon-danger me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"/>
            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black"/>
            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black"/>
            </svg>
    </span>
    `);
}

function alert_warning(message) {
    Swal.fire({
        text: message,
        icon: "warning",
        buttonsStyling: false,
        confirmButtonText: "Alright",
        customClass: {
            confirmButton: "btn btn-success",
        },
    });
}

function disconnected() {
    warning(
        "It looks like you are disconnected from the application, please refresh the page."
    );
}

function showLoader() {
    if ($('body').hasClass('software-landing-page')) {
        $("#preloader").show();
    } else {
        $("#kt_body").addClass("page-loading");
    }
}

function hideLoader() {
    if ($('body').hasClass('software-landing-page')) {
        $("#preloader").hide();
    } else {
        $("#kt_body").removeClass("page-loading");
    }
}

function check_controller(controller) {
    try {
        if (!controller) {

            alert_error(
                "The controller is not found! You need to specify the controller name in attribute data-controller in the element. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
            );
            return false;
        }
        let validator = window[controller].getValidator();
        if (validator === undefined) {
            alert_error(
                "The controller " +
                controller +
                " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
            );
            return false;
        }
        return true;
    } catch (error) {
        alert_error(
            "The controller " +
            controller +
            " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
        );
        return false;
    }
}

/* FUNCTIONS HELPERS ENDS HERE */

/* EVENTS HELPERS STARS HERE */

// Show a modal on click on a link
$("body").off("click", ".anchor-modal");
$("body").on("click", ".anchor-modal", function (e) {
    e.preventDefault();
    showLoader();
    var current = $(this);
    let modal_id = global_selector;
    let modal_size = "";
    if (current.data("modal-id")) {
        modal_id = current.data("modal-id");
    }
    if (current.data("modal-size")) {
        modal_size = current.data("modal-size");
    }
    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");
    let disableclick = current.data("disableclick");
    if (!current.data("href")) {
        alert_error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }
    let orders = [];
    if (current.data('orders') !== undefined) {
        orders = current.data('orders');
    };
    headers = {}
    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "GET",
        url: current.data("href"),
        headers: headers,
        data: {
            orders: orders,
        },
        success: function (data) {
            if (data.html === undefined) {
                playErrorSound();
                toastr.error(
                    "The data returned is not valid, please return a valid html in the data object"
                );
                hideLoader();
                return;
            }
            if (disableclick) {
                $(modal_id).modal({
                    backdrop: "static",
                    keyboard: false
                });
            }

            $(modal_id)
                .find(".modal-header")
                .find("h2")
                .find(".modal-icon")
                .empty()
                .html(current.data("modal-icon"));
            $(modal_id)
                .find(".modal-header")
                .find("h2")
                .find(".modal-title")
                .empty()
                .text(current.data("modal-title"));
            $(modal_id).find(".modal-content").find(".modal-body").empty();
            $(modal_id)
                .find(".modal-content")
                .find("#modal-kpitor-content")
                .html(data.html);

            if (modal_size) {
                $(modal_id)
                    .find(".modal-dialog")
                    .removeClass("modal-xl")
                    .addClass(modal_size);
            }

            if (has_controller) {
                if (!window[controllerClass]) {
                    alert_error(
                        "The controller " +
                        controllerClass +
                        " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                    );
                    hideLoader();
                    return false;
                } else {
                    window[controllerClass].init();
                    $(modal_id).modal("show");
                }
            } else {
                $(modal_id).modal("show");
            }
            hideLoader();
        },

        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            playErrorSound();
            toastr.error(response.message);
        },
    });
});

var files = [];
$("body").off("change", ".file-input");
$("body").on("change", ".file-input", function (e) {
    if (!this.files) {
        return false;
    }
    files.push(this.files[0]);

    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (event) {
            reader.readAsDataURL(this.files[0]);
        };
    }
});

// Ajax add a new user after a form-store
$("body").off("submit", ".form-store");
$("body").on("submit", ".form-store", function (e) {
    e.preventDefault();

    let current = $(this);
    // let data = current.serializeArray();
    let action = current.attr("action");
    let container_id = current.data("container");
    let modal_id = global_selector;
    let has_controller = !current.data("no-controller");
    let has_DataCondition = current.data("hasdatacondition");

    let controllerClass = current.data("controller");
    var fd = new FormData(this);

    let has_wait_button = current.data("waitbutton");

    // params_query = data.split('&');
    // for (var i = 0; i < params_query.length; i++) {

    //     fd.append(params_query[i].split('=')[0], decodeURIComponent(params_query[i].split('=')[1]));
    // }
    if (has_wait_button) {
        var button = document.querySelector(has_wait_button);
        // Activate indicator
        button.setAttribute("data-kt-indicator", "on");
        button.disabled = true;
    }
    $.each(files, function (i, value) {
        fd.append("file[" + i + "]", value); // change this to value
    });

    function sendAjax() {
        showLoader();
        headers = {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        }
        let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
        if (XUSERID) {
            headers["X-USER-PROXY-ID"] = XUSERID;
        }
        // console.log(headers);
        $.ajax({
            method: current.attr("method"),
            url: action,
            data: fd,
            contentType: false,
            processData: false,
            dataType: "json",
            headers: headers,
            success: function (response) {
                hideLoader();

                if (response.message) {
                    dd(response.message);
                    playSuccessSound();
                    toastr.info(response.message);
                }

                if (response.target == "_blank") {
                    if (response.URL) {
                        window.open(response.URL, '_blank');
                    }
                }
                if (response.redirect) {
                    setTimeout(function () {
                        window.location = response.redirect;
                    }, 2000);
                }
                if (container_id) {
                    if (has_DataCondition) {
                        $("#container_of_list_container").css(
                            "display",
                            "block"
                        );
                        $("#no_data_message").attr(
                            "style",
                            "display: none !important"
                        );
                    }
                    $(container_id).html(response.html);

                    // Reinitialize all KT Menues
                    KTMenu.createInstances();
                    $('.select_2').select2();

                }
                $(modal_id).modal("hide").hide();
                files = [];
                if (current.data("init-controller")) {
                    if (window[current.data("init-controller")]) {
                        window[current.data("init-controller")].init();
                    }
                }
            },
            error: function (response) {
                hideLoader();
                playErrorSound();
                toastr.error(response.responseJSON.message);
                // if (response.responseJSON.errors) {
                //     $.each(response.responseJSON.errors, function (key, value) {
                //         toastr.error(value);
                //     });
                // }
                if (has_wait_button) {
                    button.removeAttribute("data-kt-indicator");
                    button.disabled = false;
                }
            },
        });
    }
    if (has_controller) {
        if (check_controller(controllerClass)) {
            let validator = window[controllerClass].getValidator();
            validator.validate().then(function (status) {
                if (status == "Valid") {
                    sendAjax();
                } else {
                    playErrorSound();
                    toastr.error("Please fill all the required fields.");
                    if (has_wait_button) {
                        button.removeAttribute("data-kt-indicator");
                        button.disabled = false;
                    }
                }
            });
        } else {
            sendAjax();
        }
        return false;
    } else {
        sendAjax();
        return false;
    }
});

$("body").off("click", ".anchor-delete");
$("body").on("click", ".anchor-delete", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Are you sure ?",
        text: "You can't go back!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Continue",
    }).then((result) => {
        if (!result.isConfirmed) {
            e.preventDefault();
        } else {
            showLoader();
            var current = $(this);
            let action = current.data("href");
            let has_DataCondition = current.data("hasdatacondition");
            let container_id = current.data("container");
            if (!action) {
                playErrorSound();
                toastr.error(
                    "Please specify the data-href attribute in the anchor element"
                );

                hideLoader();
                return;
            }
            if (!container_id) {
                playErrorSound();
                toastr.error(
                    "Please specify the data-container attribute in the anchor element"
                );

                hideLoader();
                return;
            }

            let headers = {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
            let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
            if (XUSERID) {
                headers["X-USER-PROXY-ID"] = XUSERID;
            }

            $.ajax({
                type: "POST",
                url: action,
                data: {
                    _method: "DELETE"
                },
                headers: headers,
                success: function (response) {
                    hideLoader();
                    if ("html" in response == false) {
                        playErrorSound();
                        toastr.error(
                            "The data returned is not valid, please return a valid html in the data object"
                        );
                        return;
                    }
                    if (response.html == "" || response.html == null) {
                        if (has_DataCondition) {
                            $("#container_of_list_container").css(
                                "display",
                                "none"
                            );
                            $("#no_data_message").attr(
                                "style",
                                "display: flex !important"
                            );
                        }
                    }

                    $(container_id).html(response.html);
                    if (response.count != undefined) {
                        console.log(response.count);
                        $('#paginate-count').text(response.count);
                    }
                    KTMenu.createInstances();
                    if (response.message) {
                        // toast_success(response.message);
                        playSuccessSound();
                        toastr.info(response.message);
                    }
                    if (response.redirect) {
                        setTimeout(function () {
                            window.location = response.redirect;
                        }, 2000);
                    }
                },
                error: function (xhr) {
                    hideLoader();
                    let response = xhr.responseJSON;
                    playErrorSound();
                    toastr.error(response.message);
                },
            });
        }
    });
});

$("body").off("click", ".anchor-target");
$("body").on("click", ".anchor-target", function (e) {
    e.preventDefault();
    showLoader();

    var current = $(this);
    let container_id = current.data("container");
    let parent_container_id = current.data("parent-container");

    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");

    if (!current.data("href")) {
        playErrorSound();
        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );

        hideLoader();
        return;
    }

    function sendAjaxTarget() {
        let headers = {}
        let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
        if (XUSERID) {
            headers["X-USER-PROXY-ID"] = XUSERID;
        }
        $.ajax({
            type: "GET",
            headers: headers,
            url: current.data("href"),
            success: function (data) {
                if (data.html === undefined) {
                    playErrorSound();
                    toastr.error(
                        "The data returned is not valid, please return a valid html in the data object"
                    );
                    hideLoader();
                    return;
                }

                if (has_controller) {
                    if (!window[controllerClass]) {
                        playErrorSound();
                        toastr.error(
                            "The controller " +
                            controllerClass +
                            " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                        );

                        hideLoader();
                        return false;
                    } else {
                        $(container_id).html(data.html);
                        if (parent_container_id) {
                            $(parent_container_id).html(data.parentHml);
                        }
                        window[controllerClass].init();
                    }
                } else {
                    $(container_id).html(data.html);
                    if (parent_container_id) {
                        $(parent_container_id).html(data.parentHml);
                    }
                }
                if (data.message) {
                    playSuccessSound();
                    toastr.info(data.message);
                }
                hideLoader();
                KTMenu.createInstances();
                $('.select_2').select2();

            },

            error: function (xhr) {
                hideLoader();
                let response = xhr.responseJSON;
                playErrorSound();
                toastr.error(response.message);
            },
        });
    }

    if (current.data("has-confirm-message")) {
        hideLoader();
        Swal.fire({
            title: current.data("confirm-title") || "Are you sure ?",
            text: current.data("confirm-message") || "You can't go back!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Continue",
        }).then((result) => {
            if (!result.isConfirmed) {
                e.preventDefault();
            } else {
                showLoader();
                sendAjaxTarget();
            }
        });
    } else {
        sendAjaxTarget();
    }




});

$("body").off("click", ".anchor-message");
$("body").on("click", ".anchor-message", function (e) {
    showLoader();
    e.preventDefault();
    let action = $(this).data("href");
    let method = $(this).data("method");
    console.log(method);
    if (!action) {
        playErrorSound();
        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }
    let headers = {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: method,
        url: action,
        headers: headers,
        success: function (response) {
            if (response.message === undefined) {
                playErrorSound();
                toastr.error(
                    "The data returned is not valid, please return a valid html in the data object"
                );
                hideLoader();
                return;
            } else {
                playSuccessSound();
                hideLoader();

                toastr.info(response.message);
            }
        },
        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            playErrorSound();
            toastr.error(response.message);
        }
    });
});
$("body").off("change", ".select-target");
$("body").on("change", ".select-target", function (e) {
    e.preventDefault();

    let action = $(this).data("href");
    var current = $(this);
    action = action.replace("RPL", current.val());
    let headers = {}
    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    showLoader();
    $.ajax({
        type: "get",
        url: action,
        headers: headers,
        success: function (response) {
            hideLoader();
            if (current.data("container") && response.html) {
                $("#" + current.data("container")).html(response.html);
                if (plugins.includes("validator") && KTModalNewTarget) {
                    KTModalNewTarget.init();
                }
            }
            if (response.message) {
                playSuccessSound();

                toastr.info(response.message);
            }

            if (response.redirect) {
                setTimeout(function () {
                    window.location = response.redirect;
                }, 2000);
            }
        },
        error: function (response) {
            hideLoader();
            playErrorSound();
            toastr.error(response.responseJSON.message);
        },
    });
});

$("body").off("click", ".upload-anchor");
$("body").on("click", ".upload-anchor", function (e) {
    e.preventDefault();
    $("#kt_modal_upload_target").modal("show");
    var current = $(this);
    var myDropzone = new Dropzone("#kt_dropzone_global", {
        url: current.attr("href"), // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        sending: function (file, xhr, formData) {
            formData.append(
                "_token",
                $('meta[name="csrf-token"]').attr("content")
            );
            // TODO : add the user proxy id
        },
        init: function () {
            thisDropzone = this;
            this.on("error", function (file, responseText) {
                $(".dz-preview:last .dz-error-message").text(
                    responseText.errors.file[0]
                );
            });
            this.on("success", function (file, responseText) {
                $(current.data("container")).html(responseText.html);
            });
        },
    });
});

$("body").off("change", ".toggle-recover");
$("body").on("change", ".toggle-recover", function (e) {
    e.preventDefault();
    let action = $(this).data("href");
    var current = $(this);
    let only_trashed = 0;
    if (current.is(":checked")) {
        only_trashed = 1;
    }
    action = action + "&only_trashed=" + only_trashed;
    showLoader();
    let headers = {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "POST",
        url: action,
        headers: headers,
        success: function (response) {
            hideLoader();
            if (current.data("container")) {
                $(current.data("container")).html(response.html);
            }
            //success(response.message);
            if (response.redirect) {
                setTimeout(function () {
                    window.location = response.redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            playErrorSound();
            toastr.error(response.message);
        },
    });
});

$("body").off("change", ".toggle-target");
$("body").on("change", ".toggle-target", function (e) {
    e.preventDefault();
    let action = $(this).data("href");
    var current = $(this);
    let data = {};

    if (current.data("value")) {
        data["param_type"] = current.data("value");
    }

    if (!action) {
        playErrorSound();
        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }

    showLoader();
    let headers = {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "POST",
        url: action,
        data: data,
        headers: headers,
        success: function (response) {
            hideLoader();
            if (current.data("container")) {
                $(current.data("container")).html(response.html);
            }
            if (response.message) {
                toastr.info(response.message);
            }
            //success(response.message);
            if (response.redirect) {
                setTimeout(function () {
                    window.location = response.redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            alert_error(response.message);
            if (current.prop("checked")) {
                current.prop("checked", false);
            } else {
                current.prop("checked", true);
            }
        },
    });
});

$("body").off("click", ".anchor-modal-store");
$("body").on("click", ".anchor-modal-store", function (e) {
    e.preventDefault();
    showLoader();
    var current = $(this);
    var dataClosest = current.data("closest");
    let modal_id = global_selector;
    if (current.data("modal-id")) {
        modal_id = current.data("modal-id");
    }

    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");

    if (!current.data("href")) {
        playErrorSound();
        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }
    let headers = {}
    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }

    $.ajax({
        type: "GET",
        headers:headers,
        url: current.data("href"),
        success: function (data) {
            if (data.html === undefined) {
                playErrorSound();
                toastr.error(
                    "The data returned is not valid, please return a valid html in the data object"
                );
                hideLoader();
                return;
            }

            $(modal_id)
                .find(".modal-header")
                .find("h2")
                .find(".modal-icon")
                .empty()
                .html(current.data("modal-icon"));
            $(modal_id)
                .find(".modal-header")
                .find("h2")
                .find(".modal-title")
                .empty()
                .text(current.data("modal-title"));
            $(modal_id).find(".modal-content").find(".modal-body").empty();
            $(modal_id)
                .find(".modal-content")
                .find("#modal-kpitor-content")
                .html(data.html);

            if (has_controller) {
                if (!window[controllerClass]) {
                    playErrorSound();
                    toastr.error(
                        "The controller " +
                        controllerClass +
                        " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                    );
                    hideLoader();
                    return false;
                } else {
                    window[controllerClass].init();
                    $(modal_id).modal("show");
                }
            } else {
                $(modal_id).modal("show");
            }
            hideLoader();

            $(modal_id).on("submit", ".form-modal-store", function (e) {
                e.preventDefault();

                let current_form = $(this);
                let data = current_form.serializeArray();
                let action = current_form.attr("action");
                // let container_id = current_form.data("container");

                let has_controller = !current_form.data("no-controller");
                let controllerClass = current_form.data("controller");

                function sendAjax() {
                    let headers = {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}
                    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
                    if (XUSERID) {
                        headers["X-USER-PROXY-ID"] = XUSERID;
                    }
                    showLoader();
                    $.ajax({
                        type: current_form.attr("method"),
                        url: action,
                        data: data,
                        headers: headers,
                        success: function (response) {
                            hideLoader();
                            current
                                .closest(dataClosest)
                                .replaceWith(response.html);
                            KTMenu.createInstances();
                            $(modal_id).modal("hide").hide();
                        },
                        error: function (response) {
                            hideLoader();
                            playErrorSound();

                            toastr.error(response.responseJSON.message);
                        },
                    });
                }

                if (has_controller) {
                    if (check_controller(controllerClass)) {
                        let validator = window[controllerClass].getValidator();
                        validator.validate().then(function (status) {
                            if (status == "Valid") {
                                sendAjax();
                            } else {
                                playErrorSound();

                                toastr.error(
                                    "Please fill all the required fields."
                                );
                            }
                        });
                    }
                    return false;
                } else {
                    sendAjax();
                    return false;
                }
            });
        },

        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            playErrorSound();

            toastr.error(response.message);
        },
    });
});

$("body").off("click", ".anchor-search");
$("body").on("click", ".anchor-search", function (e) {
    e.preventDefault();
    showLoader();
    var current = $(this);

    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");
    if (!current.data("href")) {
        playErrorSound();

        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }
    let modal_content = $("#global-modal-search")
        .find("#modal-search-content")
        .html();
    if ($.trim(modal_content) != "") {
        hideLoader();
        $(".drawer-overlay").show();
        $("#global-modal-search").addClass("drawer-on");
    } else {
        let headers = {}
        let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
        if (XUSERID) {
            headers["X-USER-PROXY-ID"] = XUSERID;
        }
        $.ajax({
            type: "GET",
            url: current.data("href"),
            headers: headers,
            success: function (data) {
                if (data.html === undefined) {
                    playErrorSound();

                    toastr.error(
                        "The data returned is not valid, please return a valid html in the data object"
                    );
                    hideLoader();
                    return;
                }
                $(".drawer-overlay").show();
                $("#global-modal-search").addClass("drawer-on");
                $("#global-modal-search")
                    .find(".card-header")
                    .find(".card-title")
                    .find(".card-header-index")
                    .empty()
                    .text(current.data("modal-title"));
                $("#global-modal-search").find("#modal-search-content").empty();
                $("#global-modal-search")
                    .find("#modal-search-content")
                    .html(data.html);

                if (has_controller) {
                    if (!window[controllerClass]) {
                        playErrorSound();

                        toastr.error(
                            "The controller " +
                            controllerClass +
                            " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                        );
                        hideLoader();
                        return false;
                    } else {
                        window[controllerClass].init();
                    }
                }
                hideLoader();
            },

            error: function (xhr) {
                hideLoader();
                let response = xhr.responseJSON;
                playErrorSound();

                toastr.error(response.message);
            },
        });
    }
});

$("body").off("click", ".anchor-chat");
$("body").on("click", ".anchor-chat", function (e) {
    e.preventDefault();
    showLoader();
    var current = $(this);

    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");
    if (!current.data("href")) {
        playErrorSound();

        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }
    let modal_content = $("#global-modal-chat")
        .find("#modal-chat-content")
        .html();
    if ($.trim(modal_content) != "") {
        hideLoader();
        $(".drawer-overlay").show();
        $("#global-modal-chat").addClass("drawer-on");
    } else {
        let headers = {}
        let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
        if (XUSERID) {
            headers["X-USER-PROXY-ID"] = XUSERID;
        }
        $.ajax({
            type: "GET",
            url: current.data("href"),
            headers: headers,
            success: function (data) {
                if (data.html === undefined) {
                    playErrorSound();

                    toastr.error(
                        "The data returned is not valid, please return a valid html in the data object"
                    );
                    hideLoader();
                    return;
                }
                $(".drawer-overlay").show();
                $("#global-modal-chat").addClass("drawer-on");
                $("#global-modal-chat")
                    .find(".card-header")
                    .find(".card-title")
                    .find(".card-header-index")
                    .empty()
                    .text(current.data("modal-title"));
                $("#global-modal-chat").find("#modal-chat-content").empty();
                $("#global-modal-chat")
                    .find("#modal-chat-content")
                    .html(data.html);

                if (has_controller) {
                    if (!window[controllerClass]) {
                        playErrorSound();

                        toastr.error(
                            "The controller " +
                            controllerClass +
                            " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                        );
                        hideLoader();
                        return false;
                    } else {
                        window[controllerClass].init();
                    }
                }
                hideLoader();
            },

            error: function (xhr) {
                hideLoader();
                let response = xhr.responseJSON;
                playErrorSound();

                toastr.error(response.message);
            },
        });
    }
});

$("body").off("click", ".input-search");
$("body").on("keyup", ".input-search", function (e) {
    e.preventDefault();
    var current = $(this);
    let value = current.val();
    let container_id = current.data("container");
    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");
    let headers = {}
    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    function sendAjax(value) {
        $.ajax({
            method: "get",
            url: current.data("href"),
            data: {
                value: value,
            },
            headers: headers,
            success: function (data) {
                if (data.html === undefined) {
                    alert_error(
                        "The data returned is not valid, please return a valid html in the data object"
                    );
                    return;
                }
                if (has_controller) {
                    if (!window[controllerClass]) {
                        alert_error(
                            "The controller " +
                            controllerClass +
                            " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                        );
                        return false;
                    } else {
                        if (!container_id) {
                            alert_error(
                                "You didnt specify a container , you can add attribute (data-container) to the form"
                            );
                            return;
                        }
                        $(container_id).html(data.html);
                        window[controllerClass].init();
                    }
                } else {
                    if (!container_id) {
                        alert_error(
                            "You didnt specify a container , you can add attribute (data-container) to the form"
                        );
                        return;
                    }
                    $(container_id).html(data.html);
                }
            },
            error: function (response) {
                console.log(response);
            },
        });
    }
    if (!current.data("href")) {
        alert_error(
            "Please specify the data-href attribute in the anchor element"
        );
        return;
    }
    // get data if value.length > 2
    if (value.length > 2) {
        $("#spinner").removeClass('d-none');
        setTimeout(function () {
            $("#spinner").addClass('d-none');

        }, 1000);
        sendAjax(value);
    }
    // get all if value.length < 2
    else {
        value = "";
        sendAjax(value);
    }
});
// start toggle search modal
$("#close_search").on("click", function () {
    $(".drawer-overlay").hide();
});
$("body").on("click", ".drawer-overlay", function () {
    $("#global-modal-search").removeClass("drawer-on");
    $(".drawer-overlay").hide();
});
$("body").on("click", ".drawer-overlay", function () {
    $("#global-modal-chat").removeClass("drawer-on");
    $(".drawer-overlay").hide();
});
// end toggle search modal

$("#kt_user_menu_dark_mode_toggle").change(function () {
    if ($(this).is(":checked")) {
        localStorage.setItem("darkMode", "enabled");
        $("#link-css").attr("href", "/assets/css/style.dark.bundle.css");
    } else {
        localStorage.setItem("darkMode", null);
        $("#link-css").attr("href", "/assets/css/style.bundle.css");
    }
});
$("body").on("change", ".country_id", function () {
    let contry_id = $(this).val();
    if (!contry_id) {
        $("#cities_container").html('');
    }
    let url = $(this).data("url");
    let headers = {}
    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "GET",
        url: url,
        headers: headers,
        data: {
            contry_id: contry_id,
        },
        success: function (response) {
            if (!response.html) {
                $(".cities").empty();
            }
            if (response.message) {
                playErrorSound();
                toastr.error(response.message);
                $(".cities").empty();
            } else {
                $("#cities_container").html(response.html);
                $(".currency").text(response.currency);
                $(".cities").select2();
            }
        },
        error: function (response) {},
    });
});

$("body").off("submit", ".form-search");
$("body").on("submit", ".form-search", function (e) {
    e.preventDefault();
    let current = $(this);
    // let data = current.serializeArray();
    let action = current.attr("action");
    let container_id = current.data("container");
    let modal_id = global_selector;

    let has_controller = !current.data("no-controller");
    let has_DataCondition = current.data("hasdatacondition");

    let controllerClass = current.data("controller");
    var fd = current.serializeArray();

    function sendAjax() {
        showLoader();
        let headers = {}
        let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
        if (XUSERID) {
            headers["X-USER-PROXY-ID"] = XUSERID;
        }
        if(current.attr("method") == "post"){
            headers["X-CSRF-TOKEN"] = $('meta[name="csrf-token"]').attr('content');
        }
        $.ajax({
            method: current.attr("method"),
            url: action,
            headers:headers,
            data: fd,
            success: function (response) {
                hideLoader();

                if (response.message) {
                    playSuccessSound();
                    toastr.info(response.message);
                }
                if (response.redirect) {
                    setTimeout(function () {
                        window.location = response.redirect;
                    }, 2000);
                }
                if (container_id) {
                    if (has_DataCondition) {
                        $("#container_of_list_container").css(
                            "display",
                            "block"
                        );
                        $("#no_data_message").attr(
                            "style",
                            "display: none !important"
                        );
                    }
                    $(container_id).html(response.html);
                    if (response.count != undefined) {
                        console.log(response.count);
                        $('#paginate-count').text(response.count);
                    }
                    var rows = $("#table-list > tbody").children().length;
                    if (rows == 0) {
                        $("#container_of_list_container").css(
                            "display",
                            "none"
                        );
                        $("#no_data_message").attr(
                            "style",
                            "display: flex !important"
                        );
                    } else {
                        $("#container_of_list_container").css(
                            "display",
                            "block"
                        );
                        $("#no_data_message").attr(
                            "style",
                            "display: none !important"
                        );
                    }

                    if(has_controller){
                        window[controllerClass].init();
                    }

                }

                // Reinitialize all KT Menues
                $('.select_2').select2();
                KTMenu.createInstances();
                $(modal_id).modal("hide").hide();
                files = [];
                if (current.data("init-controller")) {
                    if (window[current.data("init-controller")]) {
                        window[current.data("init-controller")].init();
                    }
                }
            },
            error: function (response) {
                hideLoader();
                playErrorSound();
                toastr.error(response.responseJSON.message);
            },
        });
    }

    if (has_controller) {
        if (check_controller(controllerClass)) {
            let validator = window[controllerClass].getValidator();
            if(!validator){
                sendAjax();
            }
            else{
                validator.validate().then(function (status) {
                    if (status == "Valid") {
                        sendAjax();
                    } else {
                        playErrorSound();
                        toastr.error("Please fill all the required fields.");
                    }
                });
            }

        } else {
            sendAjax();
        }
        return false;
    } else {
        sendAjax();
        return false;
    }
});


$("body").off("change", ".paginate_target");
$("body").on("change", ".paginate_target", function (e) {
    e.preventDefault();
    let action = $(this).data("href");
    let container_id = $(this).data("container");
    let perPage = $(this).val();
    showLoader();
    let headers = {}
    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "GET",
        url: action,
        headers:headers,
        data: {
            perPage: perPage,
        },
        success: function (response) {
            hideLoader();
            if (container_id) {
                $(container_id).html(response.html);
                KTMenu.createInstances();
                $('.select_2').select2();
            }
            if (response.message) {
                toastr.info(response.message);
            }
            if (response.redirect) {
                setTimeout(function () {
                    window.location = response.redirect;
                }, 2000);
            }
        },
        error: function (response) {
            hideLoader();
            playErrorSound();
            toastr.error(response.responseJSON.message);
        },
    });
});
$("body").on("change" , "#chat_search" , function(e){
    e.preventDefault();
    let url = $(this).data("url");
    let search = $(this).val();

    let headers = {}
    let XUSERID =  $('meta[name="user-proxy-id"]').attr("content")
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "GET",
        url: url,
        headers:headers,
        data: {
            search: search,
        },
        success: function (response) {
            $("#modal-chat-content").html(response.html);
        },
        error: function (response) {
            playErrorSound();
            toastr.error(response.responseJSON.message);
        }
    });
});
// let userProxyId = document.querySelector('meta[name="user-proxy-id"]')?.content;
// axios.defaults.headers.common['X-USER-PROXY-ID'] = userProxyId;

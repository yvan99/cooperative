"use strict";
class KTRegisterOwner {
    constructor() {
        this.form = document.querySelector("#kt_sign_up_form");
        this.submitButton = document.querySelector("#kt_sign_up_submit");
        this.validator = null;

        this.init();
    }

    handleValidation() {
        this.validator = FormValidation.formValidation(this.form, {
            fields: {
                email: {
                    validators: {
                        regexp: {
                            regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                            message: "The value is not a valid email address",
                        },
                        notEmpty: {
                            message: "Email address is required",
                        },
                    },
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: "The password is required",
                        },
                    },
                },
                name: {
                    validators: {
                        notEmpty: {
                            message: "Name is required",
                        },
                    },
                },
                telephone: {
                    validators: {
                        notEmpty: {
                            message: "Telephone is required",
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                }),
            },
        });
    }

    handleSubmitAjax() {
        this.submitButton.addEventListener("click", (e) => {
            e.preventDefault();

            this.validator.validate().then((status) => {
                if (status === "Valid") {
                    this.submitButton.setAttribute("data-kt-indicator", "on");
                    this.submitButton.disabled = true;

                    axios
                        .post("/owner/register", {
                            name: this.form.querySelector('[name="name"]')
                                .value,
                            email: this.form.querySelector('[name="email"]')
                                .value,
                            password:
                                this.form.querySelector('[name="password"]')
                                    .value,
                            telephone:
                                this.form.querySelector('[name="telephone"]')
                                    .value,
                        })
                        .then((response) => {
                            if (response.data.status === "success") {
                                Swal.fire({
                                    text: "Registration successful! You are now logged in.",
                                    icon: "success",
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href =
                                            response.data.redirectTo;
                                    }
                                });
                            } else {
                                Swal.fire({
                                    text: "Registration failed. Please try again.",
                                    icon: "error",
                                });
                            }

                            this.submitButton.removeAttribute(
                                "data-kt-indicator"
                            );
                            this.submitButton.disabled = false;
                        })
                        .catch((error) => {
                            Swal.fire({
                                text: "An error occurred. Please try again.",
                                icon: "error",
                            });

                            this.submitButton.removeAttribute(
                                "data-kt-indicator"
                            );
                            this.submitButton.disabled = false;
                        });
                }
            });
        });
    }

    init() {
        this.handleValidation();
        this.handleSubmitAjax();
    }
}

KTUtil.onDOMContentLoaded(() => {
    new KTRegisterOwner();
});

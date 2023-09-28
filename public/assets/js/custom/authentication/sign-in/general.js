"use strict";

class KTSigninGeneral {
    constructor() {
        this.form = document.querySelector("#kt_sign_in_form");
        this.submitButton = document.querySelector("#kt_sign_in_submit");
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
                        .post("/leader/login", {
                            email: this.form.querySelector('[name="email"]')
                                .value,
                            password:
                                this.form.querySelector('[name="password"]')
                                    .value,
                        })
                        .then((response) => {
                            if (response.data.status === "success") {
                                Swal.fire({
                                    text: "You have successfully logged in!",
                                    icon: "success",
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href =
                                            response.data.redirectTo;
                                    }
                                });
                            } else {
                                Swal.fire({
                                    text: "Invalid credentials. Please try again.",
                                    icon: "error",
                                });
                            }

                            this.submitButton.removeAttribute(
                                "data-kt-indicator"
                            );
                            this.submitButton.disabled = false;
                        })
                        .catch((error) => {
                            let errorMessage = "An error occurred. Please try again.";
                        
                            if (error.response && error.response.data && error.response.data.errors) {
                                const errors = error.response.data.errors;
                                errorMessage = Object.values(errors)
                                    .map(errorArray => errorArray.join('<br>'))
                                    .join('<br>');
                            }
                            
                            Swal.fire({
                                html: errorMessage,
                                icon: "error",
                            });
                        
                            this.submitButton.removeAttribute("data-kt-indicator");
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
    new KTSigninGeneral();
});

@include('components.dashboard.css')

<div class="d-flex flex-column flex-root" style="overflow: hidden" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2 bg-success">

            <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">


                <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-300px mb-10 mb-lg-20"
                    src="../homepage/mockuping.png" alt="" />

                <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                    Login To your CTFAS account
                </h1>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-2">

            <div class="d-flex flex-center flex-column flex-lg-row-fluid">

                <div class="w-lg-500px p-10">


                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                        action="{{ route('owner.login') }}" method="POST">
                        @csrf
                        <div class="text-left mb-11">

                            <h1 class="text-dark fw-bolder mb-3">
                                Connect With Your Account
                            </h1>

                        

                            <div class="text-gray-500 fw-semibold fs-6">
                                Sign in to your cooperative account
                            </div>

                        </div>

                    

                        <div class="fv-row mb-8 mt-2">

                            <input type="text" placeholder="Email" name="email" autocomplete="off"
                                class="form-control bg-transparent" />

                        </div>


                        <div class="fv-row mb-3">

                            <input type="password" placeholder="Password" name="password" autocomplete="off"
                                class="form-control bg-transparent" />

                        </div>

                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                            <div></div>

                            <!--begin::Link-->
                            {{-- <a href="reset-password.html" class="link-primary">
                                Forgot Password ?
                            </a> --}}
                            <!--end::Link-->
                        </div>

                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-warning">


                                <span class="indicator-label">
                                    Sign In</span>

                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>

                        <div class="text-gray-500 text-left fw-semibold fs-6">
                            Not a Member yet?

                            <a href="/owner/register" class="link-primary">
                                Create an account
                            </a>

                            |

                            <a href="/" class="link-primary mb-3">
                                Back to homepage
                            </a>
                        </div>

                    </form>

                </div>

            </div>

        </div>



    </div>
</div>
@include('components.dashboard.js')
@include('components.dashboard.authowner')

@include('components.dashboard.css')

<div class="d-flex flex-column flex-root" style="overflow: hidden" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">

        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">

            <div class="d-flex flex-center flex-column flex-lg-row-fluid">

                <div class="w-lg-500px p-10">


                    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form"
                        action="{{ route('owner.register') }}" method="POST">
                        @csrf
                        <div class="text-left mb-11">
                            <h1 class="text-dark fw-bolder mb-3">
                                Register an account
                            </h1>
                            <div class="text-gray-500 fw-semibold fs-6">
                                Create an account to manage your cooperative
                            </div>
                        </div>

                        <div class="fv-row mb-8">
                            <input type="text" placeholder="Email" name="email" autocomplete="off"
                                class="form-control bg-transparent" />
                        </div>

                        <div class="fv-row mb-3">
                            <input type="password" placeholder="Password" name="password" autocomplete="off"
                                class="form-control bg-transparent" />
                        </div>

                        <div class="fv-row mb-3">
                            <input type="text" placeholder="Name" name="names" autocomplete="off"
                                class="form-control bg-transparent" />
                        </div>

                        <div class="fv-row mb-3">
                            <input type="text" placeholder="Telephone" name="telephone" autocomplete="off"
                                class="form-control bg-transparent" />
                        </div>

                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                <span class="indicator-label">Create Account</span>
                                <span class="indicator-progress">Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>

                        <div class="text-gray-500 text-left fw-semibold fs-6">
                            Already a member?
                            <a href="/owner/login" class="link-primary">Log In</a>
                        </div>
                    </form>


                </div>

            </div>

        </div>



        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
            style="background-image: url(../../../assets/media/misc/auth-bg.png)">

            <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">


                <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                    src="../../../assets/media/misc/auth-screens.png" alt="" />

                <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                    Fast, Efficient and Productive
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Aside-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
@include('components.dashboard.js')

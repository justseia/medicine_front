<template>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content wow fadeInUp delay-0-2s">
                <h2>Login</h2>

                <ul>
                    <li>
                        <a href="#"> Home </a>
                    </li>

                    <li class="active">Login</li>
                </ul>
            </div>
        </div>

        <img src="@/assets/images/page-shape-1.png" class="shape page-shape-1" alt="Image" />
        <img src="@/assets/images/page-shape-2.png" class="shape page-shape-2" alt="Image" />
    </div>
    <div class="login-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="login-img mr-15 wow fadeInUp delay-0-2s">
                        <img src="@/assets/images/login-img.png" alt="Image" />
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="login-register-content ml-15 wow fadeInUp delay-0-2s">
                        <h2>Login</h2>

                        <form>
                            <div class="form-group">
                                <label>User name or email</label>
                                <input type="text" class="form-control" placeholder="Evan Edwards" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="************" />
                            </div>
                            <div class="form-group">
                                <a href="#">Forgot your password?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="default-btn">Login</button>
                            </div>
                            <p>New user? <a href="#">Create an account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

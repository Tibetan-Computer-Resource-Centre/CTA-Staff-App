import Image from "next/image";
export default function Home() {
  return (
    <div className="page-wrapper" id="main-wrapper">
      <div className="overflow-hidden radial-gradient min-vh-100">
        <div className="position-relative z-index-5">
          <div className="row">
            <div className="col-xl-6 col-xxl-8">
              <a
                href="./index.html"
                className="text-nowrap logo-img d-block px-4 py-9 w-100"
              >
                <img
                  src="/assets/images/logos/dark-logo.svg"
                  width="180"
                  alt=""
                />
              </a>
              <div
                className="d-none d-xl-flex align-items-center justify-content-center"
                style={{ height: "calc(100vh - 80px)" }}
              >
                <img
                  src="/assets/images/backgrounds/login-security.svg"
                  alt=""
                  className="img-fluid"
                  width="500"
                />
              </div>
            </div>
            <div className="col-xl-6 col-xxl-4">
              <div className="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                <div className="col-sm-8 col-md-6 col-xl-9">
                  <h2 className="mb-3 fs-7 fw-bolder">Welcome to CTA Staff Portal</h2>
                  <p className=" mb-9">Staff Centralized DB</p>
                  <div className="row">
                    <div className="col-6 mb-2 mb-sm-0">
                      <a
                        className="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
                        href="javascript:void(0)"
                        role="button"
                      >
                      
                        <Image
                          src="/assets/images/google-icon.svg"
                          alt=""
                          className="img-fluid me-2"
                          width={18}
                          height={18}
                        />
                        <span className="d-none d-sm-block me-1 flex-shrink-0">
                          Sign in with
                        </span>
                        Google
                      </a>
                    </div>
                    <div className="col-6">
                      <a
                        className="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
                        href="javascript:void(0)"
                        role="button"
                      >
                        <Image
                          src="/assets/images/facebook-icon.svg"
                          alt=""
                          className="img-fluid me-2"
                          width="18"
                          height="18"
                        />
                        <span className="d-none d-sm-block me-1 flex-shrink-0">
                          Sign in with
                        </span>
                        FB
                      </a>
                    </div>
                  </div>
                  <div className="position-relative text-center my-4">
                    <p className="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">
                      or sign in with
                    </p>
                    <span className="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                  </div>
                  <form >
                    <div className="mb-3">
                      <label className="form-label">Username</label>
                      <input
                        type="email"
                        className="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                      />
                    </div>
                    <div className="mb-4">
                      <label className="form-label">Password</label>
                      <input
                        type="password"
                        className="form-control"
                        id="exampleInputPassword1"
                      />
                    </div>
                    <div className="d-flex align-items-center justify-content-between mb-4">
                      <div className="form-check">
                        <input
                          className="form-check-input primary"
                          type="checkbox"
                          value=""
                          id="flexCheckChecked"
                        />
                        <label className="form-check-label text-dark">
                          Remember this Device
                        </label>
                      </div>
                      <a
                        className="text-primary fw-medium"
                        href="./authentication-forgot-password.html"
                      >
                        Forgot Password ?
                      </a>
                    </div>
                    <a
                      href="./index.html"
                      className="btn btn-primary w-100 py-8 mb-4 rounded-2"
                    >
                      Sign In
                    </a>
                    <div className="d-flex align-items-center justify-content-center">
                      <p className="fs-4 mb-0 fw-medium">New to Portal?</p>
                      <a
                        className="text-primary fw-medium ms-2"
                        href="./authentication-register.html"
                      >
                        Create an account
                      </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

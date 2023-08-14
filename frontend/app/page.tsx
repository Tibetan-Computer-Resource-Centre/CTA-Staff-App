"use client";
import Image from "next/image";
import { useState } from "react";
import axios from "axios";
import { useForm } from "react-hook-form";
import Verify2fa from "./_components/verify2fa";
axios.defaults.baseURL = process.env.NEXT_PUBLIC_API_URL;
// Home page/Login function
export default function Home() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [loginError, setLoginError] = useState(""); // Login error status
  const [loading, setLoading] = useState(false); //Login authentication loading state
  const [twoFA, setTwoFA] = useState(false); // QRCODE for 2FA
  const [token, setToken] = useState("");
  /* Form Input Validation Setting */
  const {
    register,
    handleSubmit,
    formState: { errors, touchedFields },
  } = useForm();
  // Async Login Function
  async function login(e: any) {
    try {
      setLoginError("");
      setLoading(true);
      const { data: user } = await axios.post("/auth/login", {
        email: e.email,
        password: e.password,
      });
      setTwoFA(true);
      setToken(user.data);
      // if login success
      // router.push("/dashboard/staff");
      setLoginError("");
      setLoading(false);
    } catch (error: any) {
      if (error.response.status) {
        setLoginError(error.response.data.message);
        setLoading(false);
      }
    }
  }

  return (
    <div className="page-wrapper" id="main-wrapper">
      {!twoFA ? (
        <div className="overflow-hidden radial-gradient min-vh-100">
          <div className="position-relative z-index-5">
            <div className="row">
              <div className="col-xl-6 col-xxl-4 mx-auto">
                <div className="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                  <div className="col-sm-8 col-md-6 col-xl-9">
                    <h2 className="mb-3 fs-7 fw-bolder text-center">
                      User Login{" "}
                    </h2>
                    {/* <p className=" mb-9">Staff Centralized DB</p> */}
                    <div className="row">
                      <div className="col-6 mb-2 mb-sm-0">
                        <a
                          className="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
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
                      <p className="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative fw-bold">
                        or sign in with
                      </p>
                      {/* <span className="border-top w-100 position-absolute top-50 start-50 translate-middle"></span> */}
                    </div>
                    <form onSubmit={handleSubmit(login)}>
                      <div className="mb-3">
                        <label className="form-label">Username</label>
                        <input
                          type="email"
                          className={`${
                            errors.email &&
                            "form-control mb-0 border border-danger"
                          } 
                                  || ${
                                    loginError &&
                                    "form-control mb-0 border border-danger"
                                  }
                                  ${!errors.email && "form-control mb-0"} || ${
                            touchedFields.email &&
                            "form-control mb-0 border border-success"
                          }`}
                          {...register("email", {
                            required: true,
                          })}
                          onChange={(e) => setEmail(e.target.value)}
                        />
                        {errors.email && (
                          <span className="text-red-500 py-5">
                            Email Required
                          </span>
                        )}
                      </div>
                      <div className="mb-4">
                        <label className="form-label">Password</label>
                        <input
                          type="password"
                          className={`${
                            errors.password &&
                            "form-control mb-0 border border-danger"
                          } || ${
                            loginError &&
                            "form-control mb-0 border border-danger"
                          }
                                  ${
                                    !errors.password && "form-control mb-0"
                                  } || ${
                            touchedFields.password &&
                            "form-control mb-0 border border-success"
                          }`}
                          {...register("password", {
                            required: true,
                          })}
                          onChange={(e) => setPassword(e.target.value)}
                        />
                        {errors.password && (
                          <span className="text-red-500 py-5">
                            Password Required
                          </span>
                        )}
                        <p className="text-red-500 text-center mt-3 font-weight-bold">
                          {loginError}
                        </p>
                      </div>
                      {loading && (
                        <div className="text-center">
                          <Image
                            src="/assets/images/login-loader.gif"
                            width={72}
                            height={72}
                            alt="loader"
                          />
                        </div>
                      )}
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
                      <button
                        className="btn btn-primary w-100 py-8 mb-4 rounded-2"
                        type="submit"
                      >
                        Sign In
                      </button>
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
      ) : (
        <Verify2fa user={token} />
      )}
    </div>
  );
}

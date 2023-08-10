"use client";
import axios from "axios";
import Image from "next/image";
import { useState } from "react";
import { useForm } from "react-hook-form";
import Cookies from "js-cookie";
import { useRouter } from "next/navigation";

export default function Verify2fa(user: any) {
  // Axios authorization bearer Token set
  axios.defaults.headers.common["Authorization"] = `Bearer ${user.user.token}`;
  const router = useRouter();
  //OTP
  const [otp, setOtp] = useState(new Array(6).fill(""));
  const [errorMsg, setErrorMsg] = useState("");
  const [exit, setExit] = useState(false);
  //   Input Box CSS
  const input = {
    width: "50px",
    height: "40px",
    fontSize: "18px",
    fontWeight: "700",
  };
  const handleChange = (element: any, index: number) => {
    setOtp([...otp.map((d, idx) => (idx === index ? element.value : d))]);
    if (element.nextSibling) {
      element.nextSibling.focus();
    }
  };
  //   Verification API Access
  async function verify(e: any) {
    try {
      const authentication = await axios.post("auth/verification_2fa", {
        otp: Number(otp.join("")),
      });
      // Set an application cookie for middleware check
      Cookies.set("loginStatus", user.user);
      // Exit Animation
      setExit(true);
      // Redirect the route to staff
      // if login success
      router.push("/dashboard");
    } catch (error: any) {
      setErrorMsg("OTP Incorrect");
    }
  }

  /* Form Input Validation Setting */
  const {
    register,
    handleSubmit,
    formState: { errors, touchedFields },
  } = useForm();
  return (
    <div className="col-xl-6 col-xxl-4 mx-auto">
      <div className="row authentication-login min-vh-100 justify-content-around align-items-center">
        <div
          className={`${"col-sm-8 col-md-8 col-xl-8 text-center bg-body rounded-4 animate__animated animate__fadeIn"} ${
            exit ? "animate__fadeOut" : ""
          }`}
          style={{ paddingBottom: "2rem", paddingTop: "5rem" }}
        >
          <div className="fw-semibold h4">OTP VERIFICATION</div>
          {user.user.name}
          <p>Enter the 4 digit code here</p>
          <form onSubmit={handleSubmit(verify)}>
            <p className="text-rose-600 fw-bold">{errorMsg && errorMsg}</p>
            <div className="d-flex flex-row  justify-content-around mt-3 fw-semibold">
              {otp.map((data, index) => {
                return (
                  <input
                    type="text"
                    value={data}
                    maxLength={1}
                    key={index}
                    name={`otp-${index}`}
                    style={input}
                    className={`${"fw-semibold text-center border-2 border border-primary rounded-2"} ${
                      errorMsg ? " border-danger" : "border-success"
                    }`}
                    onChange={(e) => handleChange(e.target, index)}
                    onFocus={(e) => e.target.select()}
                    // {...register(`otp-${index}`, { required: true})}
                  />
                );
              })}
            </div>
            <div className="mt-5">
              <div className="d-flex gap-7">
                <button className="w-100 border rounded py-2 bg-gray-300 text-gray-900 fw-semibold">
                  CLEAR
                </button>
                <button className="w-100 border rounded py-2 bg-yellow-400 text-gray-900 fw-semibold">
                  VERIFY OTP
                </button>
              </div>
              <p className="mt-3 small">
                Please enter the OTP from the App to login !!
              </p>
            </div>
          </form>
          <Image
            src={`data:image/png;base64,${user.user.qrcode}`}
            height={150}
            width={150}
            alt="otplogin"
          />
        </div>
      </div>
    </div>
  );
}

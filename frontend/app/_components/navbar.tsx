"use client";
import Image from "next/image";
import Cookies from "js-cookie";
import { useRouter } from "next/navigation";
import Link from "next/link";
export default function Navbar() {
  const router = useRouter();
  async function logout(e: any) {
    Cookies.remove("loginStatus");
    router.push("/");
  }
  return (
    <header className="app-header fixed-header">
      <nav className="navbar navbar-expand-lg navbar-light">
      <ul className="navbar-nav">
              <li className="nav-item">
                <Link href="/" className="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse">
                  <i className="ti ti-menu-2"></i>
                </Link>
              </li>
              <li className="nav-item d-none d-lg-block">
                <Link href="/" className="nav-link nav-icon-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i className="ti ti-search"></i>
                </Link>
              </li>
            </ul>
        <ul className="navbar-nav">
          <li className="nav-item d-block d-xl-none">
            <Link href="/"
              className="nav-link sidebartoggler nav-icon-hover"
              id="headerCollapse"
            >
              <i className="ti ti-menu-2"></i>
            </Link>
          </li>
          <li className="nav-item">
            <Link href="/" className="nav-link nav-icon-hover">
              <i className="ti ti-bell-ringing"></i>
              <div className="notification bg-primary rounded-circle"></div>
            </Link>
          </li>
        </ul>
        <ul className="navbar-nav quick-links d-none d-lg-flex">
              <li className="nav-item dropdown hover-dd d-none d-lg-block">
                <Link href="/" className="nav-link" data-bs-toggle="dropdown">Staffs<span className="mt-1"><i className="ti ti-chevron-down"></i></span></Link>
              </li>
              <li className="nav-item dropdown-hover d-none d-lg-block">
                <Link href="/" className="nav-link" >Leaves</Link>
              </li>
              <li className="nav-item dropdown-hover d-none d-lg-block">
                <Link href="/" className="nav-link">Designations</Link>
              </li>
              <li className="nav-item dropdown-hover d-none d-lg-block">
                <Link href="/" className="nav-link">Statistic</Link>
              </li>
            </ul>
        <div
          className="navbar-collapse justify-content-end px-0"
          id="navbarNav"
        >
          <ul className="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <li className="nav-item dropdown">
              <Link href="/"
                className="nav-link nav-icon-hover"
                id="drop2"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <Image
                  src="/assets/images/profile/user-1.jpg"
                  alt=""
                  width="35"
                  height="35"
                  className="rounded-circle"
                  onClick={logout}
                />
              </Link>
            </li>
          </ul>
          <div className="d-flex align-items-center justify-content-between">
            <Link href="/"
              className="nav-link d-flex d-lg-none align-items-center justify-content-center"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#mobilenavbar"
              aria-controls="offcanvasWithBothOptions"
            >
              <i className="ti ti-align-justified fs-7"></i>
            </Link>
            <ul className="navbar-nav flex-row ms-auto align-items-center justify-content-center">
              <li className="nav-item dropdown">
                <Link href="/"
                  className="nav-link pe-0 show"
                  id="drop1"
                  data-bs-toggle="dropdown"
                  aria-expanded="true"
                >
                  <div className="d-flex align-items-center">
                    <div className="user-profile-Image">
                      <Image
                        src="/assets/images/profile/user-1.jpg"
                        className="rounded-circle"
                        width="35"
                        height="35"
                        alt=""
                      />
                    </div>
                  </div>
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  );
}

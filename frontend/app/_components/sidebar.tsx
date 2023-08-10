import Link from 'next/link'
export default function Sidebar() {
  return (
    <aside className="left-sidebar">
        <div className="brand-logo d-flex align-items-center justify-content-between">
          <Link href="./index.html" className="text-nowrap logo-img">
            {/* <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" /> */}
          </Link>
          <div className="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i className="ti ti-x fs-8"></i>
          </div>
        </div>

        <nav className="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li className="nav-small-cap">
              <i className="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span className="hide-menu">Home</span>
            </li>
            <li className="sidebar-item">
              <Link className="sidebar-link active" href="./index.html" aria-expanded="false">
                <span>
                  <i className="ti ti-layout-dashboard"></i>
                </span>
                <span className="hide-menu">Dashboard</span>
              </Link>
            </li>
            <li className="nav-small-cap">
              <i className="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span className="hide-menu">Staffs</span>
            </li>
            <li className="sidebar-item">
              <Link className="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                  <i className="ti ti-article"></i>
                </span>
                <span className="hide-menu">Education</span>
              </Link>
            </li>
            <li className="sidebar-item">
              <Link className="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <i className="ti ti-alert-circle"></i>
                </span>
                <span className="hide-menu">Documents</span>
              </Link>
            </li>
            <li className="sidebar-item">
              <Link className="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i className="ti ti-cards"></i>
                </span>
                <span className="hide-menu">Qualifications</span>
              </Link>
            </li>
            <li className="sidebar-item">
              <Link className="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <i className="ti ti-file-description"></i>
                </span>
                <span className="hide-menu">Bio</span>
              </Link>
            </li>
            <li className="sidebar-item">
              <Link className="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <i className="ti ti-typography"></i>
                </span>
                <span className="hide-menu">Transfers</span>
              </Link>
            </li>
            <li className="nav-small-cap">
              <i className="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span className="hide-menu">Centralized </span>
            </li>
            <li className="sidebar-item">
              <Link className="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i className="ti ti-login"></i>
                </span>
                <span className="hide-menu">Departments</span>
              </Link>
            </li>
            <li className="sidebar-item">
              <Link className="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i className="ti ti-user-plus"></i>
                </span>
                <span className="hide-menu">Sections</span>
              </Link>
            </li>
            <li className="nav-small-cap">
              <i className="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span className="hide-menu">Resources</span>
            </li>
            <li className="sidebar-item">
              <Link className="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i className="ti ti-mood-happy"></i>
                </span>
                <span className="hide-menu">Attendence</span>
              </Link>
            </li>
            <li className="sidebar-item">
              <Link className="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i className="ti ti-aperture"></i>
                </span>
                <span className="hide-menu">Categories</span>
              </Link>
            </li>
          </ul>
        </nav>
    </aside>
  )
}

import axios from "axios";
import Image from "next/image";
export default async function Page() {
  return (
    <div className="row">
      <div className="col-12">
        <div className="card-body p-4">
          <div className="table-responsive rounded-2 mb-4">
            <table className="table border text-nowrap customize-table mb-0 align-middle">
              <thead className="text-dark fs-4">
                <tr>
                  <th>
                    <h6 className="fs-4 fw-semibold mb-0">Name</h6>
                  </th>
                  <th>
                    <h6 className="fs-4 fw-semibold mb-0">Departments</h6>
                  </th>
                  <th>
                    <h6 className="fs-4 fw-semibold mb-0">Projects</h6>
                  </th>
                  <th>
                    <h6 className="fs-4 fw-semibold mb-0">Service</h6>
                  </th>
                  <th>
                    <h6 className="fs-4 fw-semibold mb-0">Budget</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div className="d-flex align-items-center">
                      <Image
                        src="../../dist/images/profile/user-1.jpg"
                        className="rounded-circle"
                        width="40"
                        height="40"
                      />
                      <div className="ms-3">
                        <h6 className="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                        <span className="fw-normal">Web Designer</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p className="mb-0 fw-normal fs-4">Elite Admin</p>
                  </td>
                  <td>
                    <div className="d-flex align-items-center">
                      <a
                        href="#"
                        className="bg-secondary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                        style={{"width": "39px", height: "39px"}}

                      >
                        S
                      </a>
                      <a
                        href="#"
                        className="bg-danger text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                        style={{"width": "39px", height: "39px"}}
                      >
                        D
                      </a>
                    </div>
                  </td>
                  <td>
                    <span className="badge bg-light-success text-success fw-semibold fs-2">
                      Active
                    </span>
                  </td>
                  <td>
                    <h6 className="fs-4 fw-semibold mb-0">$3.9k</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div className="d-flex align-items-center">
                      <Image
                        src="../../dist/images/profile/user-2.jpg"
                        className="rounded-circle"
                        width="40"
                        height="40"
                      />
                      <div className="ms-3">
                        <h6 className="fs-4 fw-semibold mb-0">
                          Andrew McDownland
                        </h6>
                        <span className="fw-normal">Project Manager</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p className="mb-0 fw-normal fs-4">Real Homes WP Theme</p>
                  </td>
                  <td>
                    <div className="d-flex align-items-center">
                      <a
                        href="#"
                        className="bg-primary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                        style={{"width": "39px", height: "39px"}}

                      >
                        A
                      </a>
                      <a
                        href="#"
                        className="bg-warning text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                        style={{"width": "39px", height: "39px"}}

                      >
                        X
                      </a>
                      <a
                        href="#"
                        className="bg-secondary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                        style={{"width": "39px", height: "39px"}}

                      >
                        N
                      </a>
                    </div>
                  </td>
                  <td>
                    <span className="badge bg-light-warning text-warning fw-semibold fs-2">
                      Pending
                    </span>
                  </td>
                  <td>
                    <h6 className="fs-4 fw-semibold mb-0">$24.5k</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div className="d-flex align-items-center">
                      <Image
                        src="../../dist/images/profile/user-3.jpg"
                        className="rounded-circle"
                        width="40"
                        height="40"
                      />
                      <div className="ms-3">
                        <h6 className="fs-4 fw-semibold mb-0">
                          Christopher Jamil
                        </h6>
                        <span className="fw-normal">Project Manager</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p className="mb-0 fw-normal fs-4">MedicalPro WP Theme</p>
                  </td>
                  <td>
                    <div className="d-flex align-items-center">
                      <a
                        href="#"
                        className="bg-danger text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                        style={{"width": "39px", height: "39px"}}

                      >
                        X
                      </a>
                    </div>
                  </td>
                  <td>
                    <span className="badge bg-light-primary text-primary fw-semibold fs-2">
                      Completed
                    </span>
                  </td>
                  <td>
                    <h6 className="fs-4 fw-semibold mb-0">$12.8k</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div className="d-flex align-items-center">
                      <Image
                        src="../../dist/images/profile/user-4.jpg"
                        className="rounded-circle"
                        width="40"
                        height="40"
                      />
                      <div className="ms-3">
                        <h6 className="fs-4 fw-semibold mb-0">Nirav Joshi</h6>
                        <span className="fw-normal">Frontend Engineer</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p className="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                  </td>
                  <td>
                    <div className="d-flex align-items-center">
                      <a
                        href="#"
                        className="bg-primary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                        style={{"width": "39px", height: "39px"}}

                      >
                        Y
                      </a>
                      <a
                        href="#"
                        className="bg-danger text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                        style={{"width": "39px", height: "39px"}}

                      >
                        X
                      </a>
                    </div>
                  </td>
                  <td>
                    <span className="badge bg-light-success text-success fw-semibold fs-2">
                      Active
                    </span>
                  </td>
                  <td>
                    <h6 className="fs-4 fw-semibold mb-0">$2.4k</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div className="d-flex align-items-center">
                      <Image
                        src="../../dist/images/profile/user-5.jpg"
                        className="rounded-circle"
                        width="40"
                        height="40"
                      />
                      <div className="ms-3">
                        <h6 className="fs-4 fw-semibold mb-0">Micheal Doe</h6>
                        <span className="fw-normal">Content Writer</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p className="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                  </td>
                  <td>
                    <div className="d-flex align-items-center">
                      <a
                        href="#"
                        className="bg-secondary text-white fs-6 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                        style={{"width": "39px", height: "39px"}}

                      >
                        S
                      </a>
                    </div>
                  </td>
                  <td>
                    <span className="badge bg-light-danger text-danger fw-semibold fs-2">
                      Cancel
                    </span>
                  </td>
                  <td>
                    <h6 className="fs-4 fw-semibold mb-0">$9.3k</h6>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  );
}

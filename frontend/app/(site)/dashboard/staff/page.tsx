import axios from "axios";
import Image from "next/image";
export default async function Page() {
  const myArray = [
    "Jack",
    "Mary",
    "John",
    "Krish",
    "Navin",
    "Jack",
    "Mary",
    "John",
    "Krish",
    "Navin",
  ];
  return (
    <div className="row">
      <div className="col-12 card">
        <div className="card-body">
          <div className="d-flex justify-content-end">
            <nav aria-label="...">
              <ul className="pagination">
                <li className="page-item disabled">
                  <a
                    className="page-link"
                    href="#"
                    tabindex="-1"
                    aria-disabled="true"
                  >
                    Previous
                  </a>
                </li>
                <li className="page-item">
                  <a className="page-link" href="#">
                    1
                  </a>
                </li>
                <li className="page-item active" aria-current="page">
                  <a className="page-link" href="#">
                    2
                  </a>
                </li>
                <li className="page-item">
                  <a className="page-link" href="#">
                    3
                  </a>
                </li>
                <li className="page-item">
                  <a className="page-link" href="#">
                    4
                  </a>
                </li>
                <li className="page-item">
                  <a className="page-link" href="#">
                    5
                  </a>
                </li>
                <li className="page-item">
                  <a className="page-link" href="#">
                    Next
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div className="table-responsive mb-4 rounded-2">
            <table className="table table-striped border text-nowrap customize-table mb-0 align-middle">
              <thead className="text-gray-300 fs-4 bg-gray-200">
                <tr>
                  <th>
                    <h6 className="fw-semibold mb-0">S.No</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">DP</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">Name</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">DOB</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">Gender</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">PSC ID</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">GB</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">Category</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">Department</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">Office</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">Designation</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">View</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">Edit</h6>
                  </th>
                  <th>
                    <h6 className="fw-semibold mb-0">Delete</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                {myArray.map((name) => (
                  <tr key={name}>
                    <td>
                      <div className="d-flex align-items-center">
                        <Image
                          alt=""
                          src="/assets/images/profile/user-1.jpg"
                          className="rounded-circle"
                          width="40"
                          height="40"
                        />
                        <div className="ms-3">
                          <h6 className="fw-semibold mb-0">Olivia Rhye</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p className="mb-0 fw-normal">Xtreme admin</p>
                    </td>
                    <td>
                      <p className="mb-0 fw-normal">Xtreme admin</p>
                    </td>
                    <td>
                      <p className="mb-0 fw-normal">Xtreme admin</p>
                    </td>
                    <td>
                      <p className="mb-0 fw-normal">Xtreme admin</p>
                    </td>
                    <td>
                      <p className="mb-0 fw-normal">Xtreme admin</p>
                    </td>
                    <td>
                      <p className="mb-0 fw-normal">Xtreme admin</p>
                    </td>
                    <td>
                      <p className="mb-0 fw-normal">Xtreme admin</p>
                    </td>
                    <td>
                      <p className="mb-0 fw-normal">Xtreme admin</p>
                    </td>
                    <td>
                      <span className="badge bg-light-success text-success fw-semibold fs-2">
                        Active
                      </span>
                    </td>
                    <td>
                      <p className="mb-0 fw-normal">Xtreme admin</p>
                    </td>
                    <td>
                      <div className="d-flex align-items-center">
                        <a href="#">
                          <Image
                            alt=""
                            src="/assets/images/profile/user-4.jpg"
                            className="rounded-circle"
                            width="40"
                            height="40"
                          />
                        </a>
                        <a href="#">
                          <Image
                            alt=""
                            src="/assets/images/profile/user-2.jpg"
                            className="rounded-circle"
                            width="40"
                            height="40"
                          />
                        </a>
                      </div>
                    </td>
                    <td>
                    <button className="bg-yellow-100 border-0 py-1 px-2 rounded-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          className="icon icon-tabler icon-tabler-eye text-yellow-500"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="2"
                          stroke="currentColor"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path
                            stroke="none"
                            d="M0 0h24v24H0z"
                            fill="none"
                          ></path>
                          <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                          <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                        </svg>
                      </button>

                    </td>
                    <td>
                    <button className="bg-rose-100 border-0 py-1 px-2 rounded-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          className="icon icon-tabler icon-tabler-trash text-rose-500"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="2"
                          stroke="currentColor"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path
                            stroke="none"
                            d="M0 0h24v24H0z"
                            fill="none"
                          ></path>
                          <path d="M4 7l16 0"></path>
                          <path d="M10 11l0 6"></path>
                          <path d="M14 11l0 6"></path>
                          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                        </svg>
                      </button>
                    </td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  );
}

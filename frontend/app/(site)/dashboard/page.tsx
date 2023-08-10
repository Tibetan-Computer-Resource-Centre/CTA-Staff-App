"use client";
import { useState } from "react";
import dynamic from "next/dynamic";
// Import the react apexchart with only client components
const Chart = dynamic(() => import('react-apexcharts'), { ssr: false });
export default function Page() {
  const options:any = {
    chart: {
      id: "gender",
      type: "bar",
      height: 345,
      offsetX: -15,
      toolbar: { show: true },
      foreColor: "#adb0bb",
      fontFamily: "inherit",
      sparkline: { enabled: false },
    },
    colors: ["#546E7A", "#E91E63"],
    xaxis: {
      categories: [1991, 1992, 1993, 1994, 1995, 1996],
    },
    stroke: {
      show: true,
      width: 4,
      lineCap: "butt",
      colors: ["transparent"],
    },

    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "80%",
        borderRadius: [6],
        borderRadiusApplication: "end",
        borderRadiusWhenStacked: "all",
      },
    },
  };
  const series = [
    { name: "Female", data: [355, 390, 300, 350, 390, 180] },
    { name: "Male", data: [280, 250, 325, 215, 250, 310] },
  ];
  // PIE
  const test:any = {
    plotOptions: {
      pie: {
        expandOnClick: false,
      },
    },
    colors: ["#06b6d4", "#f43f5e", "#38bdf8", "#22d3ee", "#fcd34d"],
    series: ["DoH", "DOS", "DOH", "DIIR", "DoE"],
  };
  const pies = [44, 55, 41, 17, 15];

  // Lines
  const lineSeries= [
    {
      name: "High - 2013",
      data: [28, 29, 33, 36, 32, 32, 33]
    },
    {
      name: "Low - 2013",
      data: [12, 11, 14, 18, 17, 28, 13]
    }
  ]
  const  file:any = {
    chart: {
      height: 350,
      type: 'line',
      dropShadow: {
        enabled: true,
        color: '#000',
        top: 18,
        left: 7,
        blur: 10,   
        opacity: 0.2
      },
      toolbar: {
        show: false
      }
    },
    colors: ['#E91E63', '#545454'],
    dataLabels: {
      enabled: true,
    },
    stroke: {
      curve: 'smooth'
    },
    title: {
      text: 'Average High & Low Temperature',
      align: 'left'
    },
    grid: {
      borderColor: '#e7e7e7',
      row: {
        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.5
      },
    },
    markers: {
      size: 1
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
      title: {
        text: 'Month'
      }
    },
    yaxis: {
      title: {
        text: 'Temperature'
      },
      min: 5,
      max: 40
    },
    legend: {
      position: 'top',
      horizontalAlign: 'right',
      floating: true,
      offsetY: -25,
      offsetX: -5
    }
  }
  return (
    <div className="row">
      <div className="col-lg-6 d-flex align-items-strech">
        <div className="card w-100">
          <div className="card-body">
            <div className="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div className="mb-3 mb-sm-0">
                <h5 className="card-title fw-semibold">Gender Overview</h5>
              </div>
              <div>
                <select className="form-select">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>
                </select>
              </div>
            </div>
            <Chart options={options} series={series} type="bar" style={{"width":"100%","height":"200px"}}  />
          </div>
        </div>
      </div>

      <div className="col-lg-6 d-flex align-items-strech">
        <div className="card w-100">
          <div className="card-body">
            <div className="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div className="mb-3 mb-sm-0">
                <h5 className="card-title fw-semibold">Resignation Rate</h5>
              </div>
              <div>
                <select className="form-select">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>
                </select>
              </div>
            </div>
            <Chart options={file} series={lineSeries} type="line"  style={{"width":"100%","height":"200px"}} />
          </div>
        </div>
      </div>
      <div className="col-lg-6 d-flex align-items-strech">
        <div className="card w-100">
          <div className="card-body">
            <div className="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div className="mb-3 mb-sm-0">
                <h5 className="card-title fw-semibold">Department</h5>
              </div>
              <div>
                <select className="form-select">
                      <option value="1">March 2023</option>
                      <option value="2">April 2023</option>
                      <option value="3">May 2023</option>
                      <option value="4">June 2023</option>
                    </select>
              </div>
            </div>
            <Chart options={test} series={pies} type="donut" style={{"width":"100%","height":"200px"}}  />
          </div>
        </div>
      </div>
    </div>
  );
}

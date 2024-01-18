/*
Template Name:Admin Panel
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Profile Init Js File
*/

var tableContents = document.getElementById("lineContent").value;

var cont = tableContents.split(",");

console.log(cont);

var options = {
  chart: {
    height: 330,
    type: "bar",
    toolbar: {
      show: false,
    },
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "14%",
      endingShape: "rounded",
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"],
  },
  series: [
    {
      name: "Policy",
      data: cont,
    },
  ],
  xaxis: {
    categories: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
  },
  yaxis: {
    title: {
      text: "Policy",
    },
  },
  fill: {
    opacity: 1,
  },
  colors: ["#556ee6"],
};

var chart = new ApexCharts(document.querySelector("#revenue-chart"), options);

chart.render();

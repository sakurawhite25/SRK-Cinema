// SIDEBAR TOGGLE

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
  if(!sidebarOpen) {
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if(sidebarOpen) {
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}


// bar charts

var barChartOptions = {
  series: [{
  data: [10, 8, 6, 4, 2]
}],
  chart: {
  type: 'bar',
  height: 350,
  toolbar: {
    show: false
  }
},
colors: [
  "#246dec",
  "#cc3c43",
  "#367952",
  "#f5b74f",
  "#4f35a1"
],
plotOptions: {
  bar: {
    distributed: true,
    borderRadius: 4,
    horizontal: false,
    columnWidth: '40%',
  }
},
dataLabels: {
  enabled: false
},
legend: {
  show: false
},
xaxis: {
  categories: ["Movie A", "Movie B", "Movie C", "Movie D", "Movie E"],
},
yaxis: {
  title: {
    text: "Count"
  }
}
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();

// AREA CHART
var pieChartoptions = {
  series: [44, 55, 13, 43],
  chart: {
  width: 480,
  type: 'pie',
},
labels: ['Childs', 'Students', 'Adults', 'Elders'],
responsive: [{
  breakpoint: 480,
  options: {
    chart: {
      width: 400
    },
    legend: {
      position: 'bottom'
    }
  }
}]
};

var pieChart = new ApexCharts(document.querySelector("#pie-chart"), pieChartoptions);
pieChart.render();

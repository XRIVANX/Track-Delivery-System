const dashboardbutton = document.getElementById("dashboard-button");
const driversbutton = document.getElementById("drivers-button");
const trucksbutton = document.getElementById("trucks-button");
const deliveriesbutton = document.getElementById("deliveries-button");
const dashboardform = document.getElementById("hero-dashboard");
const driversform = document.getElementById("hero-drivers");
const trucksform = document.getElementById("hero-trucks");
const deliveryform = document.getElementById("hero-deliveries");

dashboardbutton.addEventListener("click", function () {
  dashboardform.style.display = "flex";
  dashboardform.style.flexDirection = "column";
  driversform.style.display = "none";
  trucksform.style.display = "none";
  deliveryform.style.display = "none";
});

driversbutton.addEventListener("click", function () {
  dashboardform.style.display = "none";
  driversform.style.display = "flex";
  driversform.style.flexDirection = "column";
  trucksform.style.display = "none";
  deliveryform.style.display = "none";
});

trucksbutton.addEventListener("click", function () {
  dashboardform.style.display = "none";
  driversform.style.display = "none";
  trucksform.style.display = "flex";
  trucksform.style.flexDirection = "column";
  deliveryform.style.display = "none";
});

deliveriesbutton.addEventListener("click", function () {
  dashboardform.style.display = "none";
  driversform.style.display = "none";
  trucksform.style.display = "none";
  deliveryform.style.display = "flex";
  deliveryform.style.flexDirection = "column";
});

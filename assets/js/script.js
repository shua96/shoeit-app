let regionSelect = document.querySelector("#regionSelect");
let provinceSelect = document.querySelector("#provinceSelect");
let citySelect = document.querySelector("#citySelect");
let barangaySelect = document.querySelector("#barangaySelect");

async function getRegions() {
    let response = await fetch("http://localhost/shoeit-app/api/get-regions.php");
    let regions = await response.json();
    regionSelect.innerHTML = "<option selected>--SELECT REGION--</option>";
    for (const region of regions) {
        regionSelect.innerHTML += "<option>" + region + "</option>"
    };

};
async function getProvinces() {
    let response = await fetch("http://localhost/shoeit-app/api/get-provinces.php?filter=" + regionSelect.value);
    let provinces = await response.json();
    provinceSelect.innerHTML = "<option selected>--SELECT PROVINCE--</option>";
    for (const province of provinces) {
        provinceSelect.innerHTML += "<option>" + province + "</option>"
    };

};
async function getCities() {
    let response = await fetch("http://localhost/shoeit-app/api/get-cities.php?filter=" + provinceSelect.value);
    let cities = await response.json();
    citySelect.innerHTML = "<option selected>--SELECT CITY--</option>";
    for (const city of cities) {
        citySelect.innerHTML += "<option>" + city + "</option>"
    };
};
async function getBarangays() {
    let response = await fetch("http://localhost/shoeit-app/api/get-barangays.php?filter=" + citySelect.value);
    let barangays = await response.json();
    barangaySelect.innerHTML = "<option selected>--SELECT BARANGAY--</option>";
    for (const barangay of barangays) {
        barangaySelect.innerHTML += "<option>" + barangay + "</option>"
    };
};

getRegions();


/////////////////////////////// SEX/////////////////////////////

let sexName=document.getElementsByClassName('sexName');
let sexCount=document.getElementsByClassName('sexCount');

let dataSex = [
    [sexName[0].innerHTML, sexCount[0].innerHTML],
    [sexName[1].innerHTML, sexCount[1].innerHTML],
];

// create a chart
chart = anychart.column();

// create a column series and set the data
let seriesSex = chart.column(dataSex);

// set the container id
chart.container("sexContainer");

// initiate drawing the chart
chart.draw();

/////////////////////////////// CITY/////////////////////////////

let cityName=document.getElementsByClassName('cityName');
let cityCount=document.getElementsByClassName('cityCount');

let dataCity=[
];

for (let i=0; i<cityName.length;i++){
    dataCity.push(cityName[i].innerHTML);
}

for (let i=0; i<cityCount.length;i++){
    dataCity.push(cityCount[i].innerHTML);
}





console.log(dataCity);

// create a chart
chart = anychart.column();

// create a column series and set the data
let seriesCity = chart.column(dataCity);

// set the container id
chart.container("cityContainer");

// initiate drawing the chart
chart.draw();
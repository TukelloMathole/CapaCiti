//fetch("https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/Mfuleni%2C%20Cape%20Town%2C%207100?unitGroup=metric&key=2A5U5RA9MXKK2ZTYSYBKA4EBY&contentType=json")

function FetchWeather(query){

    var Api = "https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/Mfuleni%2C%20Cape%20Town%2C%207100?unitGroup=metric&key=2A5U5RA9MXKK2ZTYSYBKA4EBY&contentType=json";

    fetch(Api).then((data) =>{
        //console.log(data);
        return data.json();
    }).then((Objectdata) =>{
        DisplayWeatherResults(Objectdata);
    })
        
    
}
function DisplayWeatherResults(days){

    console.log(days);

    var ResultsDisplay= document.querySelector('#DisplayWeather')

    //h1 for location
    var address = document.createElement("h1");
    address.textContent ="Location: " + days.address;
    ResultsDisplay.append(address);

    //p for description,

    var description = document.createElement("p");
    description.textContent = "Description: " + days.description + "";
    ResultsDisplay.append(description);

    //h4 for conditions

    var conditions = document.createElement("h4");
    conditions.textContent = "Conditions: " + days.currentConditions.conditions + "";
    ResultsDisplay.append(conditions);

    //h2 for temparature

    var temparature = document.createElement("h2");
    temparature.textContent = "Temparature: " + days.currentConditions.temp + "°C";
    ResultsDisplay.append(temparature);


    // H3 for icons

    var icon = document.createElement("h3");
    icon.textContent = "Icon: " + days.currentConditions.icon + "";
    ResultsDisplay.append(icon);

    


}

FetchWeather();

  




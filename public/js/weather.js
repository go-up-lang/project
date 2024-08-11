const apikey = '040347aad8eefbe8027a0cb58edd9c93'

  const getCurrentLocation = () => {
    // 현재 위치 가져오기
    navigator.geolocation.getCurrentPosition((position) => {
      let lat = position.coords.latitude;
      let lon = position.coords.longitude;
      console.log("현재 위치", lat, lon);
      getWeatherData(lat,lon);
    });
  };

const getWeatherData = async(lat,lon) =>{
    try{
        const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&lang=kr&units=metric&appid=${apikey}`
        const response = await fetch(url);
        const data = await response.json();
        console.log("weather",data)
        weatehrRender(data)
    } catch(error){
        console.log('Error fetching weatherData',error)
    }
}

const weatehrRender = (data) =>{
    let weatherBox = `
    <div>
        <img class="weatherImg" src="https://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png" alt="">
    </div>
    <div>
        <div>${data.weather[0].description}</div>
        <div>${data.main.temp}°C</div>
    </div>
    `
    document.querySelector(".weatherBox").innerHTML = weatherBox;
}

getCurrentLocation();
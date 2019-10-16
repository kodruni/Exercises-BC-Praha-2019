import React from 'react';
import ReactDOM from 'react-dom';

function DayForecast () {
  return (
    <div class="day-forecast__header">Mon</div>
    <div class="day-forecast__body">
      <div class="day-forecast__image weather-cloudy"></div>
      <div class="day-forecast__temps">
        <span class="temp-day">18°</span>
        <span class="temp-night">11°</span>
      </div>
    </div>
  )
}

ReactDOM.render (
  <DayForecast/>,
  document.getElementsByClassName('day-forecast');
)

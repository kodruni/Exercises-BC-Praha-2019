let value = 0;
let maxValue = 60;

const update = () => {
  const counter = document.querySelector ('.counter');
  counter.textContent = `${value}`;
}

document.addEventListener('DOMContentLoaded', () => {
  update();

  let upBtn = document.querySelector ('#up');
  upBtn.addEventListener ('click', () => {
    if (value >= 0 && value < maxValue) {
      value ++;
      update();
    }
  });

  let downBtn = document.querySelector ('#down');
  downBtn.addEventListener ('click', () => {
    decrement()
  });

  let resetBtn = document.querySelector ('#reset');
  resetBtn.addEventListener ('click', () => {
    if (value >= 1 && value < maxValue) {
      value = 0;
      update();
    } else {
      clearInterval(timerID)
      timerID = null;
    }
  });

  let decrement = () => {
    if (value >= 1 && value < maxValue) {
      value --;
      update();
    } 
  }; 

  let timerID = null;

  let startBtn = document.querySelector ('#start');
  startBtn.addEventListener ('click', () => {
    if (timerID === null) {
      startBtn.textContent = "stop";
      startBtn.style.backgroundColor = "red";
      timerID = window.setInterval(() => decrement(), 1000);
    } else {
      startBtn.textContent = "start";
      startBtn.style.backgroundColor = "teal";
      clearInterval(timerID);
      timerID = null;
    }
  });
});


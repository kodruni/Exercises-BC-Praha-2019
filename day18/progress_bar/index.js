// let updatePlus = () => {
//   let plusMove = document.querySelector('.btn-plus');
// }



document.addEventListener('DOMContentLoaded', () => {
  let plusButton = document.querySelector('.plus');
  let minusButton = document.querySelector('#minus');
  let knobProgress = document.querySelector('.knob');
  let counter = document.querySelector('#counter');
  minusButton.addEventListener ('click', () => {
    counter.textContent = parseInt(counter.textContent) - 1
    }
  );console.log(counter)
});


//1. think how you are going to proceed, what are you going to do in JS
//2. buttons (plus and minus), increment numbers, knob
//3. load the DOM, const plus btn = docum q.selector #plus --- test it! ocnsole log
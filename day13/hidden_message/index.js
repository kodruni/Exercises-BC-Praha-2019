let pointer = document.querySelector('#pointer');


document.addEventListener('DOMContentLoaded' () => {
  const padlock = document.querySelector('#padlock');
  const message = document.querySelector('#message');
  
  padlock.addEventListener('mouseenter', () => {
    message.classList.remove('hidden');
  });

  padlock.addEventListener('mouseLeave', () => {
    message.classList.add ('leave');
  });
});
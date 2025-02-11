const today = new Date();
const todayEpoch = today.getTime();

const target = new Date("14 October, 2007"); 
const targetEpoch = target.getTime();
const daysMarried = Math.floor(((todayEpoch - targetEpoch) / (60 * 60 * 24)) / 1000);
const countdown = `Happy married for ${daysMarried} days!`;
document.getElementById('countdown').textContent = countdown;

document.getElementById('update-control').addEventListener('click', function(e) {
  document.getElementById('update')
    .classList
    .toggle('slide-down');
});

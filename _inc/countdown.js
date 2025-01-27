today  = new Date();
todayEpoch  = today.getTime();

target = new Date("14 October, 2007"); 
targetEpoch = target.getTime();

daysLeft = Math.floor(((targetEpoch - todayEpoch) / (60*60*24)) / 1000);
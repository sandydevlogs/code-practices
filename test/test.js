const prompt = require("prompt-sync")({sigint:true})

function isArmstrongNumber(num) {
  const numString = num.toString();
  const length = numString.length;
  let sum = 0;

  for (let digit of numString) {
    sum += Math.pow(parseInt(digit), length);
  }

  return sum === num;
}

function findArmstrongNumber(start,end) {
  const armstrongNumbers = [];

  for (let i = start; i <= end; i++){
    if(isArmstrongNumber(i)){
      armstrongNumbers.push(i);
    }
  }

  return armstrongNumbers;
}

const startInterval = parseInt(prompt("Enter the start of the interval:"))
const endInterval = parseInt(prompt("Enter the end of the interval:"))

if(!isNaN(startInterval) && !isNaN(endInterval)) {
  const armstrongNumbersResult = findArmstrongNumber(startInterval, endInterval)
  console.log(`Armstrong numbers between ${startInterval} and ${endInterval} :`, armstrongNumbersResult);
} else {
  console.log("Enter valid number");
}















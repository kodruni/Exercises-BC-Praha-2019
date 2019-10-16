//create an app that asks the user to enter their accoun and displays the balance
// let number1 = '000256784'; 
// let number2 = '000986056'; 
// let number3 = '001546238'; 
// let number4 = '030987456'; 

// let sum1 = 790;
// let sum2 = 5600;
// let sum3 = 78065;
// let sum4 = 120910;

// let balance = 'balance';
// let widthdraw = 'withdraw';

// let account_number = prompt ("enter your account number");
// let account_info = prompt ("type 'balance' to view your account balance or type 'widthdraw', if you want to withdraw money");
// let account_withdraw = prompt("enter the amount you want to withdraw");

// if (account_number === number1 &&  account_info === balance || account_withdraw === withdraw) {
//   alert ("here's your account balance: "+ sum1);
  
// }
// else {

//   if (account_number === number2 && account_info === balance) {
//     alert ("here's your account balance: "+ sum2);
//  }
//   else if (account_number === number3 && account_info === balance) {
//     alert ("here's your account balance: " + sum3);
//    }
//   else if (account_number === number4 && account_info === balance) {
//     alert ("here's your account balance: " + sum4);
//   }
//   else {
//     alert ("Unknown action");

//  }
// }
//add additional action for the user



// const square = (i) => i*i; 
// const some_number = prompt('enter a number');

// const hypotenuse = (a, b) => Math.sqrt (square (a) + square (b));
// const salary = (pay, hours, days) => pay * hours * days;
// const taxed_salary = (sal, tax) => sal - ((sal * tax)/100); //or sal * (1-tax)
// taxed_salary (salary(), tax);

// you can also write parameters like so: (salary, tax)
// f() will ignore previous salary as it will look at its own scope first, therefore it will use salary as any input
// if you leave taxed_salary() -- f() will put 'salary' (which is above in the parent scope/global scope)

//czech id number
// const nidIsValid = (nid) => {
//   if (Number.isNaN (parseInt(nid, 10)))  {
//     return false;
//   }
//   else { 
//     if parseInt(nid, 10) === nid.length[10];
//     return false;
//   }
//       else if (parseInt(nid, 10)/11) === Number.isInteger {
//         return false;
//       } 


//   }
//   return false;
// }

//exercise
// const foo = (x,y) => x(x(y));
// console.log (foo(x => x/2,8));

//roll a dice
// let result = 0;
// const diceImg = document.getElementById('dice-side');
// const clickButton = document.querySelector ('div');

// const arr = ['/img/side1.png', '/img/side2.png', '/img/side3.png', '/img/side4.png', '/img/side5.png', '/img/side6.png'];


// const rollDice = () => {
//   diceImg.src = arr[Math.floor(Math.random()*arr.length)];
// }

// clickButton.addEventListener('click', rollDice);

//users login
const users = ['user1', 'user2', 'user3', 'user4'];
const passwords = ['pwd1', 'pwd2', 'pwd3', 'pwd4'];


myUserName = prompt ('Enter your user name');
myPwd = prompt ('Enter your password');

console.log(myPwd);

if (myUserName === users[user] && myPwd === passwords[password]) {
  alert ('Welcome');
} 

else {
  alert ('Bye');
}

// document.addEventListener('DOMContentLoaded', () => {
//   const
// });

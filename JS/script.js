// Przepisz poniższy fragment kodu na bardziej czytelny zapis
// arrA.filter(x => !arrB.includes(x)).concat(arrB.filter(x => !arrA.includes(x)))

function getNewArray(arrA, arrB) {
  function filterArray(arr1, arr2) {
    let filteredArray = [];

    for (let i = 0; i < arr1.length; i++) {
      let x = arr1[i];
      if (arr2.indexOf(x) === -1) {
        filteredArray.push(x);
      }
    }
    return filteredArray;
  }

  let filteredArrayA = filterArray(arrA, arrB);
  let filteredArrayB = filterArray(arrB, arrA);
  let newArray = filteredArrayA.concat(filteredArrayB);
  return newArray;
}

if (
  JSON.stringify(getNewArray([1, 2, 3, 4, 5], [1, 2, 3, 3, 0])) !==
  JSON.stringify([4, 5, 0])
) {
  throw new Error("The function is not working correctly!");
}
console.log("Ок!");

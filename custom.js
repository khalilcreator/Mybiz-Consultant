
const aaaList = document.querySelectorAll('.aaa');
const ulList = document.querySelectorAll('.ul');

aaaList.forEach((aaa, index) => {
  aaa.addEventListener('click', function() {
    if (ulList[index].style.display === 'block') {
      ulList[index].style.display = 'none';
    } else {
      ulList[index].style.display = 'block';
    }
  });
});

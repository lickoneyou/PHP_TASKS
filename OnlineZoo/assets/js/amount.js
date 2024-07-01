const largeBorders = document.querySelectorAll('.largeBorder')
const mediumBorders = document.querySelectorAll('.mediumBorder')
const easyBorders = document.querySelectorAll('.easyBorder')
const amountCurrency = document.querySelectorAll('.amountCurrency')
const amountContainer = document.querySelectorAll('.amountContainer')

amountContainer.forEach((el) => {
  el.addEventListener('click', () => {
    largeBorders.forEach((el) => (el.style.border = 'none'))
    mediumBorders.forEach((el) => (el.style.border = 'none'))
    amountCurrency.forEach((el) => (el.style.color = '#333b41'))
    el.querySelector('.largeBorder').style.border = '2px solid orange'
    el.querySelector('.mediumBorder').style.border = '2px solid orange'
    el.querySelector('.amountCurrency').style.color = '#FE9013'
  })
})

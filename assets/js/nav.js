const navLinks = document.querySelectorAll('nav li a')

const highlightNav = () => {
  navLinks.forEach((el, index, arr) => {
    if (sessionStorage.getItem('highlight') === el.dataset.name) {
      el.style.color = 'orange'
    }
    el.addEventListener('click', (e) => {
      sessionStorage.setItem('highlight', e.target.dataset.name)
      arr.forEach((elem) => {
        elem.style.color = 'white'
      })
      if (sessionStorage.getItem('highlight') === el.dataset.name) {
        el.style.color = 'orange'
      }
    })
  })
}

highlightNav()

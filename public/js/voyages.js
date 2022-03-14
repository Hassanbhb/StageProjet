const experiences = document.querySelectorAll('.voyages > .card');

experiences.forEach(exp => {
  exp.addEventListener('click', (e) => {
    const id =  e.target.parentElement.dataset.id;
    window.location.href = `http://127.0.0.1:8000/voyages/${id}`;
  })
})
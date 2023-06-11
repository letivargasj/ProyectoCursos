const cartaCurso = document.querySelector('.cartaCurso')
const fragment = document.createDocumentFragment()
const todos = document.getElementById('todos')
const exactas = document.getElementById('exactas')
const naturales = document.getElementById('naturales')
const humanidades = document.getElementById('humanidades')
const geografia = document.getElementById('geografia')
const historia = document.getElementById('historia')
const idiomas = document.getElementById('idiomas')
const arte = document.getElementById('arte')

let cursos = []

document.addEventListener('DOMContentLoaded', () => {
    loadCursos()
})

Todos.addEventListener('click', () => {
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'adc945c8cfmshc079843a7036b3cp1f019ejsnb4f51094f00d',
            'X-RapidAPI-Host': 'book-finder1.p.rapidapi.com'
        }
    };
    
    fetch('https://book-finder1.p.rapidapi.com/api/search?lexile_min=600&lexile_max=800&results_per_page=100&page=1', options)
        .then(response => response.json())
        .then(response => {
            libros = response
           creaCards()
            console.log('libros', libros)
        })
        .catch(err => console.error(err));
})
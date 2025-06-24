// Seleciona todos os itens do menu
var menuItems = document.querySelectorAll('.item-menu');

// Função para adicionar a classe 'ativo' ao item clicado
function selectLink() {
    // Remove a classe 'ativo' de todos os itens
    menuItems.forEach(item => item.classList.remove('ativo'));

    // Adiciona a classe 'ativo' ao item clicado
    this.classList.add('ativo');
}

// Adiciona o evento de clique a cada item do menu
menuItems.forEach(item => item.addEventListener('click', selectLink));

// Expandir/Contrair o menu lateral
var btnExp = document.querySelector('#btn-exp'); // Botão de expansão
var menuSide = document.querySelector('.menu-lateral'); // Menu lateral

btnExp.addEventListener('click', function () {
    menuSide.classList.toggle('expandir');
});

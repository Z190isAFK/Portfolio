document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;
    const body = document.body;

    if (!toggleButton) {
        console.error("Bouton 'theme-toggle' non trouvé !");
        return;
    }

    // Fonction pour appliquer le thème
    function applyTheme(theme) {
        if (theme === 'day') {
            htmlElement.setAttribute('data-theme', 'day');
            toggleButton.innerHTML = '<i class="fas fa-sun"></i>';
            body.style.setProperty('--liquid-color', 'rgba(255, 255, 255, 0.8)');
            console.log('Thème appliqué: Jour');
        } else {
            htmlElement.removeAttribute('data-theme');
            toggleButton.innerHTML = '<i class="fas fa-moon"></i>';
            body.style.setProperty('--liquid-color', 'rgba(0, 0, 0, 0.8)');
            console.log('Thème appliqué: Nuit');
        }
    }

    // Restaurer le thème au chargement de la page
    let savedTheme = localStorage.getItem('theme');
    console.log('Thème sauvegardé dans localStorage:', savedTheme);
    if (!savedTheme) {
        savedTheme = 'night'; // Thème par défaut si rien n’est sauvegardé
        localStorage.setItem('theme', savedTheme);
    }
    applyTheme(savedTheme);

    // Supprimer les anciens écouteurs d’événements pour éviter les doublons
    const handleToggle = () => {
        console.log('Bouton cliqué ! (une seule fois)');
        body.style.pointerEvents = 'none';

        let currentTheme = localStorage.getItem('theme');
        const newTheme = currentTheme === 'day' ? 'night' : 'day';
        
        localStorage.setItem('theme', newTheme);
        applyTheme(newTheme);

        body.classList.add('liquid-animation');
        setTimeout(() => {
            body.classList.remove('liquid-animation');
            body.style.pointerEvents = 'auto';
            console.log('Interactions réactivées');
        }, 1500); // Attendre 1,5s, la durée de l’animation liquidDrop
    };

    // Supprimer tous les anciens écouteurs avant d’en ajouter un nouveau
    toggleButton.removeEventListener('click', handleToggle);
    toggleButton.addEventListener('click', handleToggle, { once: false }); // Utiliser { once: false } pour permettre plusieurs clics, mais éviter les doublons
});
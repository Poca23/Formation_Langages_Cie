/**
 * Recréer les données dynamiques de votre page d'accueil youtube (c'est-à-dire les 8 premières vidéos qui s'affichent lorsque vous arrivez sur la plateforme)
 * ON SE MOQUE DE REFAIRE LA PARTIE STATIQUE (sidebar, navbar)
 * 
 * Pour cela, vous devrez : 
 * → Créer 8 objets (correspondant aux 8 vidéos qui s'affichent sur la page d'accueil)
 * → Pousser ces 8 objets dans un tableau
 * → Faire une boucle sur ce tableau et, pour chaque objet, injecter l'objet dans le HTML
 * → Ajouter un peu de CSS pour ressembler à la page de Youtube
 */

// Création des objets représentant les vidéos
const videos = [
      {
          thumbnail: 'https://via.placeholder.com/300x200',
          title: 'Comment apprendre JavaScript',
          description: 'Une introduction aux bases de JavaScript.',
          views: '1.2M vues',
      },
      {
          thumbnail: 'https://via.placeholder.com/300x200',
          title: 'Les secrets des développeurs',
          description: 'Découvrez comment améliorer vos compétences.',
          views: '850K vues',
      },
      {
          thumbnail: 'https://via.placeholder.com/300x200',
          title: 'TOP 10 outils de dev',
          description: 'Les meilleurs outils pour les développeurs.',
          views: '500K vues',
      },
      {
          thumbnail: 'https://via.placeholder.com/300x200',
          title: 'Introduction à CSS',
          description: 'Apprenez les bases du CSS en 10 minutes.',
          views: '2.5M vues',
      },
      {
          thumbnail: 'https://via.placeholder.com/300x200',
          title: 'Créer un site en HTML',
          description: 'Tout ce qu’il faut pour commencer.',
          views: '1M vues',
      },
      {
          thumbnail: 'https://via.placeholder.com/300x200',
          title: 'Node.js pour les nuls',
          description: 'Guide pour débutants sur Node.js.',
          views: '650K vues',
      },
      {
          thumbnail: 'https://via.placeholder.com/300x200',
          title: 'Programmation Python',
          description: 'Tout sur les bases de Python.',
          views: '1.8M vues',
      },
      {
          thumbnail: 'https://via.placeholder.com/300x200',
          title: 'React ou Vue ?',
          description: 'Quel framework choisir ?',
          views: '1.1M vues',
      },
  ];
  
  // Sélection de l'élément où injecter les vidéos
  const videoGrid = document.getElementById('video-grid');
  
  // Boucle sur le tableau des vidéos et injection dans le HTML
  videos.forEach((video) => {
      const videoCard = document.createElement('div');
      videoCard.className = 'video-card';
  
      videoCard.innerHTML = `
          <img src="${video.thumbnail}" alt="${video.title}">
          <h3>${video.title}</h3>
          <p>${video.description}</p>
          <p>${video.views}</p>
      `;
  
      videoGrid.appendChild(videoCard);
  });
  
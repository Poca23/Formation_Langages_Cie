README - Frontend ClickTalk

ClickTalk - Frontend
Interface utilisateur moderne pour une application de chat IA intuitif et organisé


📖 À propos
ClickTalk est une application de chat IA permettant aux utilisateurs d'organiser leurs conversations par projets thématiques. Cette application React fournit une interface réactive et moderne avec support pour les thèmes sombre et clair.

✨ Fonctionnalités principales
💬 Interface de chat fluide avec streaming des réponses
📂 Organisation des conversations par projets
🌓 Support des thèmes clair/sombre
📱 Design responsive (mobile, tablette, desktop)
🚀 Optimisations de performance (virtualisation, mémoïsation)
🔐 Système d'authentification sécurisé par JWT
✏️ Support du format Markdown dans les messages
🛠️ Technologies utilisées
React 18 avec TypeScript - Structure principale
SASS/SCSS - Styles modulaires et thèmes
React Router v6 - Navigation entre les pages
Context API - Gestion d'état global
React-Markdown - Rendu des messages formatés
Jest & React Testing Library - Tests unitaires
🚀 Installation et démarrage
Prérequis
Node.js 16+
npm ou yarn
Étapes d'installation
Cloner le dépôt

git clone https://github.com/votre-organisation/clicktalk-frontend.git
cd clicktalk-frontend

Installer les dépendances

npm install
# ou
yarn install

Configurer les variables d'environnement

cp .env.example .env
# Modifier les variables dans .env selon votre environnement

Démarrer l'application en mode développement

npm start
# ou
yarn start

Construire pour la production

npm run build
# ou
yarn build

📂 Structure du projet
src/
├── assets/          # Resources statiques (images, fonts)
├── components/      # Composants réutilisables
│   ├── common/      # UI components (Button, Input, etc.)
│   ├── chat/        # Composants de chat
│   ├── layout/      # Layout components (Header, Sidebar)
│   └── projects/    # Composants liés aux projets
├── contexts/        # Context providers
├── hooks/           # Custom hooks
├── pages/           # Composants de page
├── services/        # Services d'API et utilitaires
├── styles/          # Styles globaux et variables
├── types/           # Définitions TypeScript
└── utils/           # Fonctions utilitaires

🧪 Tests
Exécuter les tests unitaires :

npm test
# ou
yarn test

Tests avec couverture de code :

npm test -- --coverage
# ou
yarn test --coverage

🔧 Configuration
Variables d'environnement
REACT_APP_API_URL - URL de l'API backend
REACT_APP_AUTH_TOKEN_KEY - Clé pour stocker le token JWT
REACT_APP_THEME_KEY - Clé pour stocker les préférences de thème
Thèmes
L'application supporte les thèmes clair et sombre, configurables via le panneau de préférences. Les variables de thème sont définies dans src/styles/_variables.scss.

🤝 Contribution
Les contributions sont les bienvenues ! Pour contribuer :

Forker le projet
Créer une branche pour votre fonctionnalité (git checkout -b feature/amazing-feature)
Commit vos changements (git commit -m 'feat: add amazing feature')
Push vers la branche (git push origin feature/amazing-feature)
Ouvrir une Pull Request
Veuillez suivre les conventions de nommage et de style de code du projet.

📄 Licence
Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus d'informations.

📞 Contact
CND - https://github.com/Poca23 - cndweb37@gmail.com


© Mars 2025, ClickTalk v1.0
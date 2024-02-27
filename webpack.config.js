const path = require('path');

module.exports = {
  entry: '.index.js', // Chemin d'accès à votre fichier JavaScript principal
  output: {
    path: path.resolve(__dirname, 'dist'), // Répertoire de sortie où Webpack placera les fichiers compilés
    filename: 'bundle.js' // Nom du fichier de sortie
  },
  module: {
    rules: [
      {
        test: /\.js$/, // Utiliser babel-loader pour les fichiers JavaScript
        exclude: /(node_modules)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env', '@babel/preset-react'] // Utiliser les presets Env et React de Babel
          }
        }
      }
    ]
  }
};

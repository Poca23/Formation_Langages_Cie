const fs = require('fs');
const path = require('path');

const directoryPath = path.join(__dirname, 'src'); // Changez 'src' par le répertoire de votre choix

function removeCommentsFromFile(filePath) {
    fs.readFile(filePath, 'utf8', (err, data) => {
        if (err) {
            console.error(`Erreur de lecture du fichier ${filePath}:`, err);
            return;
        }

        const cleanedData = data.replace(/<!--[\s\S]*?-->|\/\*[\s\S]*?\*\/|\/\/.*/g, '').trim();

        fs.writeFile(filePath, cleanedData, 'utf8', (err) => {
            if (err) {
                console.error(`Erreur d'écriture dans le fichier ${filePath}:`, err);
                return;
            }

            console.log(`Commentaires supprimés dans le fichier ${filePath}`);
        });
    });
}

function traverseDirectory(directory) {
    fs.readdir(directory, (err, files) => {
        if (err) {
            console.error(`Erreur de lecture du répertoire ${directory}:`, err);
            return;
        }

        files.forEach((file) => {
            const filePath = path.join(directory, file);

            fs.stat(filePath, (err, stats) => {
                if (err) {
                    console.error(`Erreur de lecture des stats du fichier ${filePath}:`, err);
                    return;
                }

                if (stats.isDirectory()) {
                    traverseDirectory(filePath);
                } else if (stats.isFile() && (path.extname(file) === '.js' || path.extname(file) === '.css' || path.extname(file) === '.html')) {
                    removeCommentsFromFile(filePath);
                }
            });
        });
    });
}

traverseDirectory(directoryPath);

// Signes astrologiques fournis sous forme de chaîne de caractères
const aries = `♈`;
const taurus = `♉`;
const gemini = `♊`;
const cancer = `♋`;
const leo = `♌`;
const virgo = `♍`;
const libra = `♎`;
const scorpio = `♏`;
const sagittarius = `♐`;
const capricorn = `♑`;
const aquarius = `♒`;
const pisces = `♓︎`;

// Ces signes astrologiques peuvent être organisés en éléments de la terre : Terre, Eau, Air, Feu
const fireSigns = [aries, leo];
const earthSigns = [taurus, virgo, capricorn, sagittarius];
const airSigns = [gemini, libra, aquarius];
const waterSigns = [cancer, scorpio, pisces];



// Étape 1 : Sagittarius est manquant dans les signes du feu. L'ajouter à la fin du tableau et vérifier le résultat.
fireSigns.push(sagittarius);
// écrire le code ici

// test (à ne pas toucher) : 
console.log(
  fireSigns[fireSigns.length - 1] === "♐"
    ? "Good Answer ✅"
    : "Wrong Answer ❌"
);


// Étape 2 : Sagittarius ne devrait plus faire partie des éléments de la terre. Le retirer et vérifier le résultat.
earthSigns.pop();
// écrire le code ici

// test (à ne pas toucher)
console.log(earthSigns[earthSigns.length - 1] !== "♐" ? "Good Answer ✅" : "Wrong Answer ❌");


// Étape 3 : initialiser un tableau et le stocker dans une variable nommée "zodiacSigns"
let zodiacSigns = [];

// écrire le code ici

// Étape 4 : fusionner Feu, Terre, Eau et Air dans zodiacSigns (dans cet ordre)

zodiacSigns = fireSigns.concat(earthSigns, waterSigns, airSigns);
// écrire le code ici

// test (à ne pas toucher)
console.log(
  (zodiacSigns !== null && zodiacSigns.toString() === "♈,♌,♐,♉,♍,♑,♋,♏,♓︎,♊,♎,♒")
    ? "Good Answer ✅"
    : "Wrong Answer ❌"
);

// Étape 5 : compléter la fonction ci-dessous pour afficher le nombre d'éléments dans le tableau zodiacSigns
// écrire le code ici
console.log(zodiacSigns.length);
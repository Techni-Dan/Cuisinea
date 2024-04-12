CREATE DATABASE IF NOT EXISTS Cuisinea;

USE Cuisinea;

CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

INSERT INTO `categories` (`id`, `name`) VALUES (1, 'Entrée'), (2, 'Plat'), (3, 'Dessert');

CREATE TABLE IF NOT EXISTS recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    ingredients TEXT,
    instructions TEXT,
    image VARCHAR(255),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

INSERT INTO `recipes` (`id`, `category_id`, `title`, `description`, `ingredients`, `instructions`, `image`) VALUES (1, 3, 'Mousse au chocolat', 'La mousse au chocolat est une véritable gourmandise qui plaira à tous les amateurs de chocolat. Cette recette est très simple à réaliser et ne nécessite que quelques ingrédients de base.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel\r\nsdfsd', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', '1-chocolate-au-mousse.jpg'), (2, 2, 'Gratin dauphinois', 'Le gratin dauphinois est une recette traditionnelle de la région de Dauphiné, située dans les Alpes françaises. Il se compose de fines tranches de pommes de terre cuites dans du lait et du beurre, le tout gratiné au four jusqu\'à ce qu\'il soit doré et croustillant.', '1 kg de pommes de terre à chair ferme\r\n1 litre de lait entier\r\n3 gousses d\'ail\r\n50 g de beurre\r\nSel et poivre', 'Préchauffez le four à 180°C (th. 6). Pelez et rincez les pommes de terre. Coupez-les en fines tranches à l\'aide d\'une mandoline ou d\'un couteau bien aiguisé.\r\nDans une grande casserole, faites chauffer le lait avec les gousses d\'ail épluchées et pressées. Ajoutez une pincée de sel et une poignée de poivre.\r\nQuand le lait commence à frémir, ajoutez les tranches de pommes de terre en les disposant en couches bien serrées. Laissez cuire à feu doux pendant environ 10 minutes, jusqu\'à ce que les pommes de terre soient tendres.\r\nÉgouttez les pommes de terre en conservant le lait chaud. Disposez les tranches de pommes de terre dans un plat à gratin beurré.\r\nVersez le lait chaud sur les pommes de terre en veillant à ce qu\'il recouvre entièrement les tranches. Parsemez le dessus de quelques noisettes de beurre.\r\nEnfournez le gratin pendant 30 à 40 minutes, jusqu\'à ce qu\'il soit doré et bien gratiné. Servez chaud, accompagné d\'une salade verte ou d\'une viande grillée.', '2-gratin-dauphinois.jpg'), (3, 1, 'Salade de chèvre', 'La salade de chèvre est une préparation fraîche et légère, idéale pour les repas d\'été. Elle se compose de feuilles de salade, de tranches de poire et d\'émietté de chèvre frais, le tout assaisonné avec une vinaigrette légère à base d\'huile d\'olive et de vinaigre de vin.', '1 boule de chèvre frais\r\n1 botte de salade (laitue, roquette, mâche, etc.)\r\n1 poignée de noix (noisettes, amandes, noix de cajou, etc.)\r\n1 poire\r\nQuelques feuilles de menthe\r\n1 cuillère à soupe de vinaigrette (huile d\'olive, vinaigre de vin, moutarde, sel et poivre)', 'Commencez par laver et essorer votre salade. Découpez-la en fines lamelles et répartissez-la dans les assiettes.\r\nCoupez la poire en fines tranches et répartissez-les sur la salade.\r\nÉmiettez le chèvre et répartissez-le sur la salade.\r\nParsemez la salade de noix concassées et de feuilles de menthe ciselées.\r\nPréparez la vinaigrette en mélangeant une cuillère à soupe d\'huile d\'olive, une cuillère à soupe de vinaigre de vin, une pincée de moutarde, du sel et du poivre. Versez-la sur la salade et mélangez bien.\r\nServez la salade de chèvre fraîche, accompagnée d\'un pain croustillant.', '3-salade.jpg'), (4, 2, 'Goulasch de dinde aux pommes de terre', 'Le goulasch de dinde aux pommes de terre est une recette facile, une alternative plus saine au goulasch classique de porc et de bœuf. J\'ai fait le goulasch de dinde dans la marmite, mais pour un goût encore plus intense, il peut être fait au chaudron, et pour se rapprocher encore plus du goulasch traditionnel, vous pouvez utiliser des boulettes de farine et d\'œufs à la place des pommes de terre.\r\n\r\nLa viande de dinde utilisée au détriment du porc et du bœuf apporte une série de bienfaits, parmi lesquels : réduit le mauvais cholestérol, stimule le système immunitaire, possède des propriétés anticancéreuses, augmente la quantité de testostérone et augmente le niveau de sérotonine.', 'cuisse de dinde - 1000g\r\noignon - 2 pcs. (100g)\r\noignon rouge - 2 pcs. (80g)\r\nbranche de céleri - 100g\r\ncarottes - 1 pc. (100g)\r\nracine de persil - 1 moyenne (80g)\r\npoireau - 1 pc. (100g)\r\nbacon fumé - 50g\r\npommes de terre - 4 pcs. (800g)\r\npaprika - 5 cuillères à café (25g)\r\npaprika - 1 cuillère à café (5g)\r\nsel - 4 cuillères à café (20g)\r\npoivre noir moulu - 1 cuillère à café (5g)\r\norigan séché - 1 cuillère à café (2g)\r\nthym séché - 1 cuillère à café (2g)\r\neau - 1 litre (1000g)\r\nhuile d\'olive - 4 cuillères à soupe (60g)', 'Nous chauffons la cuisse de dinde désossée et la coupons en cubes d\'environ un centimètre dans une casserole avec quatre cuillères d\'huile d\'olive jusqu\'à ce que l\'eau qu\'elle laisse s\'évapore.\r\nAjoutez l\'oignon, le céleri et le poireau finement hachés, que nous faisons revenir avec la viande pendant cinq minutes à feu moyen.\r\nAssaisonner avec du sel, du poivre, de l\'origan séché, du thym, du paprika, du paprika fort, mélanger et ajouter de l\'eau jusqu\'à ce qu\'elle recouvre la viande d\'environ deux doigts.\r\nCouvrez la casserole avec un couvercle et laissez mijoter à feu doux pendant environ une heure et demie, en remuant le goulasch une fois toutes les demi-heures.\r\nAprès une heure et demie de cuisson à feu doux, ajoutez les pommes de terre nettoyées et coupées en cubes d\'environ un centimètre.\r\nNous couvrons à nouveau la casserole avec un couvercle et laissons bouillir le goulasch pendant environ 20 minutes.\r\nVérifiez que les pommes de terre sont cuites, goûtez le goulasch de dinde et ajoutez du sel et du poivre noir moulu si nécessaire.', '65f531172f121-gulas.jpg'), (5, 3, 'Tiramisu', 'Le tiramisu est une pâtisserie et un dessert traditionnel de la cuisine italienne.\r\n\r\nLa légende dit que, en préparant une glace, Roberto Linguanotto aurait laissé tomber du mascarpone dans une jatte contenant un mélange sucre-oeufs. Séduit par ce mélange, il l’aurait ensuite présenté à Alba, l’épouse d’Ado Campeol, qui aurait ensuite perfectionné la recette avec son mari en y ajoutant des biscuits à la cuillère, du café et du cacao16.', ' jaunes d\'œufs\r\n1 sachet de sucre vanillé\r\nsucre roux\r\nmascarpone\r\ngénoise\r\nboudoirs ou biscuit à la cuillère\r\ncafé froid\r\ncacao', 'Séparer les blancs des jaunes d\'oeufs.\r\nMélanger les jaunes avec le sucre roux et le sucre vanillé.\r\nAjouter le mascarpone au fouet.\r\nMonter les blancs en neige et les incorporer délicatement à la spatule au mélange précédent. Réserver.\r\nMouiller les biscuits dans le café rapidement avant d\'en tapisser le fond du plat.\r\nRecouvrir d\'une couche de crème au mascarpone puis répéter l\'opération en alternant couche de biscuits et couche de crème en terminant par cette dernière.\r\nSaupoudrer de cacao.\r\nMettre au réfrigérateur 4 heures minimum puis déguster frais.', '661883c68b0ba-tiramisu.jpg'), (6, 2, 'NOIX D\'ENTRECOTE, ANGUS ARGENTINE', 'Parmi les viandes rouges les plus populaires se trouve la race de bœuf Angus. Les bouchers, les chefs cuisiniers et les amateurs de viande l’apprécient pour sa saveur persillée et sa tendreté incomparable. Des qualités dues à une alimentation saine, essentiellement à l’herbe, à sa graisse intramusculaire et sa maturation optimale. L’un des morceaux les plus appréciés de ce bovin est la Noix d’entrecôte Angus. Guarda Pampa vous propose le bœuf Angus d’Uruguay ou de l’Argentine. Vous allez vous régaler.\r\n\r\nQu’est-ce que la Noix d’entrecôte Angus ?\r\nComme la côte de bœuf, la Noix d’entrecôte Angus provient du milieu des côtes ou de l’entrecôte de l’animal. Cette pièce de bœuf fait partie des morceaux les plus tendres. De plus, la viande profite d’un persillage incomparable, c’est-à-dire que la proportion viande et gras est quasi parfaite. Sachez que cette qualité de persillage vient de l’alimentation de l’Angus à l’herbe et de la race en elle-même. En bouche, la Noix d’entrecôte Angus revêt un léger arôme de noisette avec une longueur rare pour du bœuf. ', '1 kg de Noix d’entrecôte Angus Uruguay ou Argentine\r\n120 g de roquefort\r\n20 cl de lait de coco\r\nHuile d’olive \r\nSel\r\nPoivre\r\nBrins de persil\r\nCrème fraîche — 2 cuillerées', 'Sortir la noix d’entrecôte Angus 30 min avant la cuisson.\r\nFaire chauffer le lait de coco à feu moyen.\r\nAjouter le roquefort émietté dès frémissement.\r\nRéduire le feu à doux et laisser épaissir 10 min en remuant.\r\nAjouter la crème fraîche lorsque le roquefort a fondu.\r\nMélanger doucement et mettre du poivre.\r\nProlonger la cuisson 5 min à petits frémissements.\r\nNe pas faire bouillir la sauce, la garder au chaud en maintenant le feu à doux.\r\nMettre un peu de sel.\r\nFaire chauffer la poêle ou le barbecue.\r\nEnduire la Noix d’entrecôte d’huile d’olive à l’aide d’un pinceau.\r\nMettre du poivre et faire griller la viande.\r\nSaupoudrer la Noix d’entrecôte de sel et de poivre avant de parsemer la surface de brins de persil haché.\r\nServir chaud.', '6618874d30710-angus.jpg');

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(255) DEFAULT 'subscriber'
);

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES (1, 'test@mail.com', '$2y$13$Uw2an3wQTYcBqGe0LMIn1OQxyUa4iQLwTZ1IoW2kj3CEcB0l8G7Sm', 'John', 'Doe', 'subscriber');

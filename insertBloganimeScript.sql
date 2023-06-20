-- User Table
insert into bloganime.users (emailAddress,firstname,lastname,accountLevel,password) 
values ('loe.Lavaud@cpnv.ch','Loé','Lavaud',1,'Pa$$w0rd');

insert into bloganime.users (emailAddress,firstname,lastname,accountLevel,password) 
values ('leo.jaquier@cpnv.ch','Léo','Jaquier',1,'Pa$$w0rd');

insert into bloganime.users (emailAddress,firstname,lastname,accountLevel,password) 
values ('diogo.Oliviera-soares@cpnv.ch','Diogo','Oliviera-soares',1,'Pa$$w0rd');

-- Article

insert into bloganime.articles (bannersPath,name,codename,age,anime,imagePath,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles,active,users_idusers) 
values ("../view/image/Banner/Maka_Albarn.png","Maka Albarn","Aucun",13,"Soul Eater","../view/image/Perso/Maka.png","Chapitre 1","Femme","Humain","Residence Eater-Albarn, Death City","Death City","Académie des maîtres des armes de la mort","Meister de faux et partenaire de Soul","Corps à Corps","Capacités de perception de l'âme<br>Contrôle de la longueur d'onde","Maka Albarn est la protagoniste de Soul Eater et le meister de Soul une arme démoniaque. Inspirée par sa mère, Maka est devenue un meister, puis a rencontré Soul et en a fait son partenaire d'arme, aspirant à créer une Death Scythe beaucoup plus puissante que son père(Spirit), qui était l'arme actuelle de Shinigami.",1,1);

insert into bloganime.articles (bannersPath,name,codename,age,anime,imagePath,firstappear,gender,species,locationLive,origin,afiliate,occupation,fightstyle,power,articles,active,users_idusers) 
values ("../view/image/Banner/Natsu.png","Natsu Dragneel","Salamandre / E.N.D",400,"Fairy Tail","..\/view\/image\/Perso\/Natsu.png","Chapitre 1","Homme","Humain / Dragon / Démon","Maison de Happy et Lucy","Petit village au nom Inconnu","Guilde de Fairy Tail","Mage de Fairy Tail","Corps à Corps","Magie du chasseur de dragon de feu","Natsu Dragnir est le personnage principal masculin du manga Fairy Tail, créé par Hiro Mashima en 2006. Surnommé « La Salamandre »,il est l'un des quatre chasseurs de dragons de la guilde Fairy Tail, et utilise la magie de chasseur de dragon de feu. Il fait équipe avec Happy, Lucy Heartfilia, Erza Scarlett, Grey Fullbuster, Wendy Marvell, et Carla.",1,1);

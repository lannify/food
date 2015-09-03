use food;
select * from users;
select * from meals;
select * from meals_categories;
select * from categories;
select * from orders;
select * from meals_in_order;
select * from shops;

#Reset table ID auto-increment
ALTER TABLE meals AUTO_INCREMENT = 1;


#Queries to generate fake data
INSERT INTO meals (name, description, price, quantity, created_at, updated_at, shop_id, date, lat, lng, min_diners, max_diners) VALUES ('Ennui','Delicious Japanese Bento',10,8,NOW(),NOW(),2,'2015-09-05 17:00:26',37.39743104,-121.87556104,2,10),
('Homemade Vietnamese','Bahn Mi, Rice noodles, and more with homemade fish sauce',8,8,NOW(),NOW(),4,'2015-09-13 13:05:51',37.36390203,-121.88115955,4,4),
('Steak and Potatoes','Classic American',13,6,NOW(),NOW(),3,'2015-09-18 06:44:03',37.37782271,-122.04279275,3,5),
('Italian Pasta','Perfectly marinated and grilled chicken carbonara with fettucini in a garlic-butter sauce',15,5,NOW(),NOW(),5,'2015-09-23 17:27:23',37.37771035,-121.9742573,2,9),
('massa. Mauris vestibulum, neque sed','non, bibendum sed,',23,7,NOW(),NOW(),4,'2015-09-23 00:26:12',37.39404657,-122.15193414,1,5),
('Phasellus fermentum convallis ligula.','dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit',13,10,NOW(),NOW(),5,'2015-09-10 07:05:01',37.35486242,-122.07595702,2,4),
('Sed eget lacus. Mauris','Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',25,2,NOW(),NOW(),2,'2015-09-27 20:57:19',37.34940552,-121.91797286,5,9),
('Nullam velit dui, semper','Sed molestie. Sed id risus quis diam',14,2,NOW(),NOW(),1,'2015-09-20 15:27:51',37.34474129,-122.03790726,1,8),
('sed orci lobortis augue scelerisque','tellus lorem eu',24,3,NOW(),NOW(),3,'2015-09-13 18:38:54',37.36321968,-122.0706813,1,5),
('dis parturient montes, nascetur','dui, in sodales elit erat vitae risus. Duis a mi fringilla',14,10,NOW(),NOW(),3,'2015-09-17 11:28:41',37.36196557,-122.00061163,2,7),
('diam eu dolor egestas','Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam',18,3,NOW(),NOW(),2,'2015-09-25 16:31:15',37.40863935,-121.94225088,2,8),
('rhoncus. Nullam velit dui, semper','Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere',21,2,NOW(),NOW(),4,'2015-09-22 14:07:16',37.36272309,-121.83479607,1,3),
('Curae Phasellus ornare.','erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam',10,2,NOW(),NOW(),1,'2015-09-16 09:56:51',37.38687459,-121.84449977,5,6),
('nisi sem semper erat, in','Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est',9,4,NOW(),NOW(),5,'2015-09-17 16:48:18',37.36825642,-121.95936857,5,7),
('Aliquam fringilla cursus purus. Nullam','Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc',9,4,NOW(),NOW(),1,'2015-09-06 22:55:47',37.36935719,-121.89182141,2,2),
('mauris a nunc. In at','aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',19,2,NOW(),NOW(),3,'2015-09-16 19:29:25',37.416025,-121.99236035,2,4),
('diam. Sed diam lorem, auctor','gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla',16,8,NOW(),NOW(),4,'2015-09-14 08:14:52',37.39062679,-121.95098261,2,3),
('mus. Aenean','magna. Praesent interdum',6,4,NOW(),NOW(),2,'2015-09-11 17:17:38',37.37906933,-122.02500304,2,8),
('Donec est mauris, rhoncus id,','nonummy ultricies ornare,',8,8,NOW(),NOW(),1,'2015-09-09 13:56:56',37.38714426,-122.15468184,5,6),
('augue malesuada malesuada. Integer','nulla. In tincidunt congue turpis. In condimentum.',4,6,NOW(),NOW(),4,'2015-09-13 12:19:32',37.36677049,-121.95586044,1,3),
('libero. Donec consectetuer','pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus',21,10,NOW(),NOW(),3,'2015-09-15 07:43:09',37.40131304,-122.14730128,4,5),
('tempor augue ac ipsum. Phasellus','parturient montes, nascetur ridiculus mus. Proin',9,4,NOW(),NOW(),2,'2015-09-11 10:55:05',37.39566819,-122.08497696,5,5),
('Ut nec urna et arcu','at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc',15,5,NOW(),NOW(),3,'2015-09-29 15:04:02',37.40903176,-121.9372057,3,9),
('Quisque varius. Nam','erat. Etiam vestibulum massa rutrum magna. Cras convallis',9,9,NOW(),NOW(),5,'2015-09-05 07:05:26',37.42585529,-122.16190381,5,8),
('fermentum risus, at','et ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros non',8,7,NOW(),NOW(),3,'2015-09-24 21:37:15',37.37398998,-122.0759011,5,7),
('nec, leo. Morbi neque','Nulla facilisi. Sed',23,8,NOW(),NOW(),1,'2015-09-26 03:07:34',37.35690229,-121.98618559,3,9),
('Sed nunc est, mollis non,','Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam.',15,10,NOW(),NOW(),1,'2015-09-10 15:52:00',37.38212721,-122.06855392,2,5),
('sem elit, pharetra','Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed',9,5,NOW(),NOW(),1,'2015-09-12 17:28:41',37.41387243,-121.9054027,1,7);
INSERT INTO `meals_categories` (`meal_id`,`category_id`) VALUES (6,83),(17,56),(24,7),(11,11),(19,126),(19,79),(17,60),(27,116),(12,15),(5,108),(20,104),(6,49),(27,84),(18,4),(27,117),(1,44),(7,8),(23,117),(16,46),(13,117),(14,125),(23,52),(12,72),(22,37),(23,20),(13,84),(4,97),(4,75),(12,75),(16,65),(24,22),(28,41),(24,83),(13,17),(25,66),(22,121),(23,41),(28,74),(5,32),(2,33),(5,99),(22,118),(12,92),(13,16),(10,20),(26,10),(10,67),(22,47),(10,30),(9,27),(21,121),(9,83),(3,78),(2,86),(8,124),(7,88),(27,19),(23,37),(22,41),(8,117),(27,19),(7,40),(23,18),(17,91),(20,36),(2,106),(17,35),(8,45),(22,57),(19,14),(3,35),(4,111),(21,4),(13,39),(9,5),(19,119),(13,11),(18,22),(6,94),(25,85),(15,41),(10,115),(15,42),(23,63),(26,81),(16,21),(12,93),(20,40),(11,35),(10,74),(12,102),(18,41),(13,89),(22,1),(8,40),(13,88),(8,128),(27,47),(15,46),(5,81);
INSERT INTO `meals_categories` (`meal_id`,`category_id`) VALUES (9,115),(2,100),(4,51),(23,78),(13,12),(17,121),(6,47),(7,80),(2,57),(1,57),(13,16),(21,55),(3,84),(17,10),(9,112),(4,32),(6,111),(14,28),(2,60),(5,68),(16,90),(16,84),(2,111),(22,25),(10,120),(28,4),(28,77),(25,10),(17,48),(4,56),(12,29),(19,121),(10,71),(2,23),(25,12),(12,76),(27,52),(25,48),(3,61),(1,26);

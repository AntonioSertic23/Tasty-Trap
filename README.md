# Tasty Trap

## Wordpress tema za fast food

Projekt Tasty Trap je nastao na faksu kao projekt za konstrukcijske vježbe iz predmeta **CMS sustavi**.

Tema projekta je bila kreirati wordpress temu za fast food koristeći custom post type-ove, taksonomije i custom meta box-ove.

Stranica prikazuje sva naučena znanja o korišenju **Wordpress** tehnologijom koja koristi **PHP** programski jezik i **MySQL** za bazu podataka.

[![My Skills](https://skills.thijs.gg/icons?i=wordpress,php,mysql)](https://skills.thijs.gg)

---

### Administrativno sučelje

- cpt **Meni** sadrži cpt **Hrana** i cpt **Piće** povezanih preko custom meta box-ova
- cpt **Hrana** i **Piće** imaju svoje custom meta box-ove koji su nutritivne vrijednosti te se u prikazu menija one zbrajaju
- tu su još **Zaposlenik**, **Restoran** i **Vijest** cpt-ovi sa svojim custom meta box-ovima
- svaki cpt također ima i svoju jedinstvenu taksonomiju
- korišten je i plugin **MetaSlider**, za prikaz zaposlenika u obliku slidera

---

### Na starnici je moguće:

- pregledati menije, njihovu hranu i pića
- pregledati hranu sortiranu po taksonomiji
- pregledati pića sortirana po taksonomiji
- pregledati vijesti
- pregledati istaknute zaposlenike i njihove priče
- pronaći lokacije na karti
- pretažiti stranicu

---

## Pokretanje projekta

Potrebno je instalirati [XAMPP](https://www.apachefriends.org), te preko toga pokrenuti **Apache** i **MySQL**.

Potom zalijepiti mapu **Tasty-Trap** u `C:\xampp\htdocs\` i promjeniti joj ime u `TastyTrap`.

Link za pristup bazi: [http://localhost/phpmyadmin/index.php](http://localhost/phpmyadmin/index.php).

Zatim u **phpmyadmin** kreirati bazu koja se zove `tastytrap`(Character Set neka bude **Collation**) te potom importati `tastytrap.sql` koji se nalazi ovdje u root-u projekta.

Link za pristup aplikaciji: [http://localhost/TastyTrap/wp-admin/](http://localhost/TastyTrap/wp-admin/).

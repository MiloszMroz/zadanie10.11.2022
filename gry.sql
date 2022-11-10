CREATE DATABASE gry;
use gry;



create table gry(
    id int(10) unsigned not null AUTO_INCREMENT,
    rodzaj int(10) unsigned not null,
    tytul VARCHAR(90),
    ocena int(5),
    opis VARCHAR(250),
	PRIMARY KEY (id)
);


insert into gry (rodzaj ,tytul ,ocena ,opis) VALUES
(1, 'Wiedzmin 3 Dziki Gon', 5 ,'fabularną grą akcji z otwartym światem. Gracz steruje postacią Geralta z Rivii z perspektywy trzeciej osoby. W niektórych fragmentach gry gracz wciela się w postać Ciri. Poza poruszaniem się po lądzie można także pływać zarówno na jak i pod powierzchnią wody.'),
(3, 'Grand Theft Auto V', 3, 'Gra opowiada o przygodach trzech bandziorów, których ścieżki niekiedy się przecinają, przez większość czasu jednak biegną osobno. Grać możemy każdym z nich, przełączając się na wybraną postać w dowolnym momencie oprócz misji, które przypisane są do konkretnych postaci.'),
(2, 'World of Warcraft', 5,'gra komputerowa z gatunku MMORPG wyprodukowana i wydana przez Blizzard Entertainment w 2004 roku. Jej akcja toczy się kilka lat po wydarzeniach przedstawionych w grze Warcraft III: The Frozen Throne, w świecie Azeroth.');



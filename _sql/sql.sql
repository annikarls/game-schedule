CREATE TABLE team(
    teamId INT NOT NULL AUTO_INCREMENT,
    teamName VARCHAR(50),
    PRIMARY KEY (teamId)
);

CREATE TABLE stadium(
    stadiumId INT NOT NULL AUTO_INCREMENT,
    stadiumName VARCHAR(50),
    PRIMARY KEY (stadiumId)
);

CREATE TABLE game(
    gameId INT NOT NULL AUTO_INCREMENT,
    gameDate DATE,
    gameTime TIME,
    gameStadiumId INT,
    PRIMARY KEY (gameId),
    FOREIGN KEY (gameStadiumId) REFERENCES stadium(stadiumId)
);

CREATE TABLE gameTeam(
    gameTeamId INT NOT NULL AUTO_INCREMENT,
    gameTeamGid INT,
    gameTeamTid INT,
    PRIMARY KEY (gameTeamId),
    FOREIGN KEY (gameTeamGid) REFERENCES game(gameId),
    FOREIGN KEY (gameTeamTid) REFERENCES team(teamId)
);

CREATE TABLE users(
    userId INT NOT NULL AUTO_INCREMENT,
    userEmail VARCHAR(50),
    userPassword VARCHAR(255),
    PRIMARY KEY (userId)
);

DELETE FROM team WHERE teamId = 1;
DELETE FROM gameteam WHERE gameTeamId = 1;
DELETE FROM game WHERE gameId = 3;

-- TODO:
-- använda oop - klart
-- delete team - klart
-- create game - klart
-- read game - klart (ej snyggt dock)
-- update game
-- delete game
-- create stadium - klart
-- read stadium - klart
-- update stadium - klart
-- delete stadium - klart
-- annan navbar när man är inloggad
-- bara kunna create, update, delete när man är inloggad
-- se över design på samtliga sidor
-- footer med bl.a. tillbaka-knapp?
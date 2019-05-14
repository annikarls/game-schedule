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

ALTER TABLE table_name RENAME COLUMN old_col_name TO new_col_name;
/*This is the code we will use to build our database*/
CREATE database gaaplayerdatabase;
USE gaaplayerdatabase;

CREATE TABLE userpass(
	username VARCHAR(15) NOT NULL,
	password VARCHAR(40) NOT NULL,
	email VARCHAR(30) NOT NULL,
	PRIMARY KEY(username))
	engine=InnoDB;

CREATE TABLE teams(
	name VARCHAR(20) NOT NULL,
	team_level VARCHAR(10) NOT NULL, /*club, county, province, third-level */
	county VARCHAR(10), /*applicable for clubs i.e. what county they are in */
	province VARCHAR(10), /*applicable for counties and clubs */
	manager VARCHAR(30), /*can be null as may not know who it is or may not be appointed */
	grounds VARCHAR(30) NOT NULL,
	PRIMARY KEY (name))
	engine=InnoDB;

CREATE TABLE players(
	name VARCHAR(30) NOT NULL,
	date_of_birth DATE NOT NULL,
	gender VARCHAR(1) NOT NULL, /*allowing for female entries */
	height_in_meters INT(2),
	club_name VARCHAR (30) REFERENCES teams (name),
	county_name VARCHAR(30) REFERENCES teams (name),
	position VARCHAR(10) NOT NULL,
	PRIMARY KEY (name))
	engine=InnoDB;
	
/*Intermediate table between users and players given the Many to Many relationship */
CREATE TABLE user_player(
	username VARCHAR (30) REFERENCES userpass(username),
	player_name VARCHAR (30) REFERENCES players(name),
	PRIMARY KEY (username, player_name))
	engine=InnoDB;
	
CREATE TABLE training(
	player_name VARCHAR(30) REFERENCES players (name),
	training_date DATE NOT NULL,
	player_status VARCHAR(10) NOT NULL, /*could be injured and therefore possibly in recovery, otherwise OK */
	training_type VARCHAR(10) NOT NULL,
	skills_time_minutes INT(3) NOT NULL,
	fitness_time_minutes INT(3) NOT NULL,
	gym_time_minutes INT(3) NOT NULL,
	recovery_minutes INT(3) NOT NULL,
	PRIMARY KEY (player_name, training_date))
	engine=InnoDB;
	
CREATE TABLE matches(
	team_A VARCHAR(20) NOT NULL,
	team_B VARCHAR(20) NOT NULL, 
	team_A_goals INT(2), /*scores can be null when info. is not available on a previous game or it is in the future */
	team_A_points INT(2),
	team_B_goals INT(2),
	team_B_points INT(2),
	match_type VARCHAR(10) NOT NULL, /* could be Championship, League, Challenge, Provincial Tournament */
	match_date DATE NOT NULL,
	match_length_minutes INT(3),
	venue VARCHAR(20) NOT NULL,
	PRIMARY KEY(team_A, team_B, match_date))
	engine=InnoDB;
	
/*6 Mins Played, Distance Covered, Possesions, Possessions(SCR ZON), Poss Clean Catch, Poss Tackle, 
4 Pass Complete, HPass Compl, FPass Compl, Pass Incompl, 
6 Shots On, Wides, Saves, Goals, Points, Points From Frees, 
5 Tackles, Frees For, Frees Against, Att Run, Def Run, 
3 Red, Yellow, Black*/
/*We cna reduce attributes if we need to*/
CREATE TABLE appearances(
	player_name VARCHAR(30),
	match_date DATE,
	team_for VARCHAR(20),
	minutes_played INT(3),
	distance_covered_meters INT(5),
	possessions INT(2),
	possessions_scoring_zone INT(2),
	clean_catch INT(2),
	turnovers_won INT(2),
	passes_complete INT(2),
	handpasses_complete INT(2),
	footpasses_complete INT(2),
	passes_incomplete INT(2),
	attempts INT(2),
	shots_on_target INT(2),
	wides INT(2),
	saves INT(2),
	goals INT(2),
	points INT(2),
	points_frees INT(2),
	tackles INT(2),
	frees_for INT(2),
	frees_against INT(2),
	attacking_runs INT(2),
	defensive_runs INT(2),
	red_cards INT(1),
	yellow_cards INT(1),
	black_cards INT(1),
	PRIMARY KEY(player_name, match_date, team_for))
	engine=InnoDB;


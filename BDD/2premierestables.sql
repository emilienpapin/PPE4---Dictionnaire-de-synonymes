# -----------------------------------------------------------------------------
#       TABLE : MOT
# -----------------------------------------------------------------------------

CREATE TABLE mot
 (
	id INTEGER NOT NULL AUTO_INCREMENT,
	libelle VARCHAR(29) NOT NULL
	,PRIMARY KEY (id)
	
 ) 

 
# -----------------------------------------------------------------------------
#       TABLE : SYNONYME
# -----------------------------------------------------------------------------


CREATE TABLE synonyme
 (
	idMot INTEGER NOT NULL,
	idSyn INTEGER NOT NULL
	,PRIMARY KEY (idMot, idSyn)
	,FOREIGN KEY (idMot) REFERENCES mot (id)
	,FOREIGN KEY (idSyn) REFERENCES mot (id)
	
	
 ) 
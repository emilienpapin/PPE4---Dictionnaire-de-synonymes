# -----------------------------------------------------------------------------
#       TABLE : MOT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS mot
 (
	id INTEGER NOT NULL AUTO_INCREMENT,
	libelle VARCHAR(29) NOT NULL
	,PRIMARY KEY (id)
	
 ) 

 
# -----------------------------------------------------------------------------
#       TABLE : SYNONYMES
# -----------------------------------------------------------------------------


CREATE TABLE IF NOT EXISTS synonyme
 (
	idMot INTEGER NOT NULL,
	idSyn INTEGER NOT NULL
	,PRIMARY KEY (idMot)
	,PRIMARY KEY (idSyn)
	,FOREIGN KEY (idMot) REFERENCES synonyme (id)
	,FOREIGN KEY (idSyn) REFERENCES synonyme (id)
	
	
 ) 
# -----------------------------------------------------------------------------
#       TABLE : MOTS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS mots
 (
	id INTEGER NOT NULL AUTO_INCREMENT,
	mot VARCHAR(29) NOT NULL
	,PRIMARY KEY (id)
	
 ) 

 
# -----------------------------------------------------------------------------
#       TABLE : SYNONYMES
# -----------------------------------------------------------------------------


CREATE TABLE IF NOT EXISTS synonymes
 (
	idMot INTEGER NOT NULL AUTO_INCREMENT,
	idSyn INTEGER NOT NULL
	,PRIMARY KEY (idMot)
	,FOREIGN KEY (idSyn) REFERENCES (id)
	
 ) 
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `facturation`()
BEGIN 
	DECLARE finished int DEFAULT 0;
    DECLARE id_user_facture int;
    DECLARE user_price float;
    DECLARE zero varchar(255) ;
    DECLARE dateS varchar(255) DEFAULT DATE_FORMAT(CURRENT_DATE, "%m%y") ;
    DECLARE countFacture varchar(255) ;
    DECLARE idFacture varchar(255);
    
	DECLARE cur_sub
    	CURSOR FOR
        SELECT sum(subscription.price), subscription.id_user_id FROM subscription, user WHERE (DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH) > subscription.date_fin OR 			ISNULL(subscription.date_fin)) AND user.id = subscription.id_user_id GROUP BY subscription.id_user_id;
    DECLARE CONTINUE HANDLER 
    	FOR NOT FOUND SET finished = 1;
    OPEN cur_sub;
    getSub: LOOP
    	FETCH cur_sub INTO user_price, id_user_facture;
        SELECT max(id) into countFacture from facture;
        set countFacture = countFacture + 1;
         IF countFacture <= 10 THEN set idFacture = CONCAT("000",countFacture);
        END IF;
        IF countFacture >= 10 AND  countFacture < 100 THEN set idFacture = CONCAT("00",countFacture);
        END IF;
         IF countFacture >= 100 AND  countFacture  < 1000 THEN set idFacture = CONCAT("0",countFacture);
        END IF;
         IF countFacture >= 1000 THEN set idFacture = countFacture;
        END IF;
        IF id_user_facture <= 10 THEN set zero = CONCAT("000", id_user_facture, dateS, "-" , idFacture);
        END IF;
        IF id_user_facture >= 10 AND id_user_facture < 100 THEN set zero = CONCAT("00", id_user_facture, dateS, "-" , idFacture);
        END IF;
         IF id_user_facture >= 100 AND id_user_facture < 1000 THEN set zero = CONCAT("0", id_user_facture, dateS, "-" , idFacture);
        END IF;
         IF id_user_facture >= 1000 THEN set zero = CONCAT("0",id_user_facture, dateS, "-" , idFacture);
        END IF;
        IF finished = 1 THEN 
        	LEAVE  getSub;
        END IF;
        
        INSERT INTO facture (price, id_user_id, date_edition, date_echeance, numero_facture) VALUES (user_price, id_user_facture, CURRENT_DATE, CURRENT_DATE, zero);
       	END LOOP getSub;
    CLOSE cur_sub;
END$$
DELIMITER ;
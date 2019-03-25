DELIMITER //
CREATE PROCEDURE procedureHey(IN countryName VARCHAR(255))
 BEGIN
 declare billedAmount numeric(10,2);
 declare totalunits numeric(10,2);
 set billedAmount=0;
 set totalunits=0;
 set totalunits=(SELECT units
 FROM bill
 WHERE consumerID = countryName);
 while totalunits>0 do
 if (totalunits<=100 and totalunits>0) then
billedAmount=100*1.50;
totalunits-=100;

else if(totalunits>100 and totalunits<=200)
set billedAmount=100*3.50;
set totalunits-=100;

else if(totalunits>100 and totalunits<=200)
set billedAmount=100*3.50;
set totalunits-=100;

else if(totalunits>200 and totalunits<=500)
set billedAmount=100*4.60;
set totalunits-=300;

else if(totalunits>500)
set billedAmount=units*6.60;
set totalunits-=500;

end if;
end while;
select billedAmount as bill;

 END //
DELIMITER ;

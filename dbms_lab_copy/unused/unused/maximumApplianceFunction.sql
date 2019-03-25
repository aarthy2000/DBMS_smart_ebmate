drop function maximumAppliance;
delimiter //
create function maximumAppliance(id varchar(50))
returns INT
BEGIN
DECLARE v_finished INTEGER DEFAULT 0;
declare iksum int default 0;
declare asum int default 0;
declare ksum int default 0;
declare wh decimal(20,0);
declare w decimal(10,2);
declare vname varchar(50);
declare c numeric(50,0);

DECLARE cu CURSOR FOR SELECT ideal_wh,wattage,I.name FROM ideal_appliances I inner join  appliance A on I.name=A.name where consumerID like id;
DECLARE cu1 CURSOR FOR SELECT name,workingHours,count FROM appliance where consumerID like id;
DECLARE CONTINUE HANDLER
        FOR NOT FOUND SET v_finished = 1;

CREATE TEMPORARY TABLE
         IF NOT EXISTS buffer ( totalcost numeric(20,0));

open cu;

hello : loop
IF v_finished = 1 THEN
 LEAVE hello;
 END IF;
fetch cu into wh,w,vname;
set ksum=(w * wh * 30 * 0.10 )/1000;
set ksum=ksum*6.87;
insert into buffer(totalcost) value(ksum);
end loop hello;
select sum(totalcost) into iksum from buffer;

close cu;
delete from buffer;
open cu1;
hello : loop
IF v_finished = 1 THEN
 LEAVE hello;
 END IF;
fetch cu1 into vname,wh,c;
set w=(select wattage from ideal_appliances where name like vname);
set ksum=(c * w * wh * 30 * 0.10 )/1000;
set ksum=ksum*6.87;
insert into buffer(totalcost) value(ksum);
end loop hello;
close cu1;
select sum(totalcost) into asum from buffer;
return iksum;
end;//

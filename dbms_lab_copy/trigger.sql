create trigger calculateBill
	after insert on bill
	for each row
	declare
		bill numeric(10,2)=0;

	begin
		if(new.units<=100)
		{
			bill=0;
		}
		else if(new.units<=200)
		{
			bill=20;
		}
		else if(new.units<=500)
		{
			bill=30;
		}
		else if(new.units>500)
		{
			bill=50;
		}

		for(;units>0;)
		{
			if((units>0) && (units <=100))
			{
				bill+=(double)(100*1.50);
				units-=100;
			}
			else if((units>100)&&(units<=200))
			{
				bill+=(double)(100*3.50);
				units-=100;
			}

			else if((units>200)&&(units<=500))
			{
				bill+=(double)(300*4.60);
				units-=300;
			}
			else if(units>500)
			{
				bill+=(double)(500*6.60);
				units-=500;;
			}
		}
		bill-=(double)150;
	}

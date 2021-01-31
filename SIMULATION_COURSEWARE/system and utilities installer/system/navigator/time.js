 function myClock_Counter(){
  var months = new Array();
	   months[0]  = "January";
	   months[1]  = "February";
	   months[2]  = "March";
	   months[3]  = "April";
	   months[4]  = "May";
	   months[5]  = "June";
	   months[6]  = "July";
	   months[7]  = "August";
	   months[8]  = "September";
	   months[9]  = "October";
	   months[10] = "November";
	   months[11] = "December";
	   var currentDate = new Date();
	   var monthnumber = currentDate.getMonth();
	   var monthname   = months[monthnumber];
	   var monthday    = currentDate.getDate();
	   var year        = currentDate.getYear();
	   if(year < 2000) { year = year + 1900; }
	   if (monthday   < 10) { monthday   = "0" + monthday;   }
	  
		var hour   = currentDate.getHours();
	   var minute = currentDate.getMinutes();
	   var second = currentDate.getSeconds();
	   var meridian = "AM";
	   if (hour   > 11) { meridian = "PM";       }
	   if (hour   > 12) { hour = hour - 12;      }
	   if (hour   == 0) { hour = 12;             }
	   if (hour   < 10) { hour   = "0" + hour;   }
	   if (minute < 10) { minute = "0" + minute; }
	   if (second < 10) { second = "0" + second; }
	   
		 var dateString = "Date: "+monthname +' ' +monthday +', ' +year
		 +"  Time: "+hour+":"+minute+":"+second+" "+meridian
		 ;
		 

		  document.getElementById("times").innerHTML = " "+dateString;

		  setTimeout("myClock_Counter()", 1000);
 }
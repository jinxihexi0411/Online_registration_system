<?php
/* 
	Step 2
	Insert Table PROJECT
*/
/* 
	Define the root path
*/
define('ROOT_PATH', dirname(dirname(__FILE__))); 

/* 
	Include database configuration
*/
$dbinfo_dir =  ROOT_PATH . '/php/dbinfo.php';
require $dbinfo_dir;

mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Excel Peer Support Network', '60','Marnie Williams','mwilliamsg@gatech.edu','Excel (www.excel.gatech.edu) is a four-year, dual certificate program for students with intellectual and developmental disabilities. The Peer Support Network is designed to provide the individualized support necessary for Excel students to thrive at Georgia Tech. ','Community');");
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('ESW Hydroponics/Urban Farming Project', '7','Nicole Kinnard','nkinnard@gatech.edu','The Hydroponics/Urban Farming Project experiments with different ways to grow produce in urban areas using limited space and water resources. We investigate both soil-based and hydroponic methods of growing in order to find the most efficient, economically viable, and environmentally sustainable way to grow produce in Atlanta. ','Sustainable Communities');");
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
		    VALUES ('Excel Current Events', '15','Ashley Bidlack','abidlack@gatech.edu','Excel Current Events is a participation (not for credit) course for degree-seeking students who are interested in developing their communication skills in conversations with adults with intellectual and developmental disabilities. ','Community');");
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Shakespeare in Prison Project', '20','Sarah Higinbotham','shiginbotham@gatech.edu','As the world celebrates the 400th anniversary of Shakespeare’s death in 2016, Georgia Tech students will travel to a high-security men’s prison outside Atlanta to discuss Shakespeare with incarcerated students. ','Community');");
 			
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Know Your Water Project', '10','Neha Kumar','nkumar@gatech.edu','This project will allow students to be part of a large, crowd-sourced study – at little cost to themselves – to contribute to a knowledge bank of how different communities treat and track their water quality. If you are interested in participating in this study, please let us know. ','Sustainable Communities');");

mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Epic Intentions', '20','Yeji Lee','ylee@gatech.edu','Epic Intentions connects an interdisciplinary team of students with a local nonprofit to apply technical skills for social and civic good to help make the nonprofits make a greater impact in the community.','Community');");
 			
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Greenfood branch', '14','Bernulli Wang','bwang@gatech.edu','The usage of the Greenfood branch concept in 200 SMEs of the food and beverage industry including a calculation tool for energy balance, heat integration and process optimization.','Sustainable Communities');");
 			
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Programming a game to teach health in poor nations', '8','Possion Hu','phu@gatech.edu','A typical video game has one side sending attackers to zap the other. The second player runs various weapons and defenses to stay safe. Health education is partly teaching kids about the germs and parasites trying to invade a human body and the various defenses that can help keep us healthy. These parallels imply one should be able to make a fairly engaging video game that teaches about how to stay healthy. This education is particularly important in poor nations as there are more pathogens.','Sustainable Communities');");
 			
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Grace Mission Tutoring', '20','Lagrangian Lu','llu@gatech.edu','Grace Mission is a 16-year old ministry to help reach those who are often forgotten by society: the homeless, underemployed addicted, etc. Our charge is to serve, care for, and love the poor and most vulnerable among us, including the children. Volunteer positions include behind-the-scenes support, independent work like photography, and face-to-face interaction with children and adults. ','Community');");
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Writing an Android app to Promote Safe Childbirth', '17','Gucci Si','gsi@gatech.edu','I am involved in a research project that is giving Android smart phones to nurses and midwives in clinics in rural Kenya. We need to program an app that helps them follow a checklist of procedures for a safe delivery. If successful, I hope this app will be adopted widely around the world.','Community');");
 			
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Club Management', '25' ,'Jay Yoffee','jyoffee@gatech.edu','To assist club members in planning, conducting, and evaluating a club community service project. To assist with the processing of the experience with members as part of the overall experience.','Community');");
 			
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Organic Design', '10','Maggie Xu','mxu@gatech.edu','Promoting organic agriculture, production and consumption.','Sustainable Communities');");
 			
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Improved Cookstoves', '20','Monica Raja','mraja@gatech.edu','Almost half the world cooks on inefficient wood and charcoal cookstoves. These stoves kill over a million people a year from indoor air pollution, contribute to deforestation, and release billions of tonnes of CO2. Improved cookstoves can dramatically reduce these problems and also save poor households substantial amounts of time and money. Nevertheless, improved stoves are not widely adopted by the global poor.This project analyzes data from a randomized controlled trial of different marketing models for improved stoves in Uganda.','Sustainable Communities');");

mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Water Resource Innovation', '25','Jennifer Smith',jsmith@gatech.edu,'Projects that demonstrate new and innovative approaches to managing water resources in a more sustainable way, including projects that achieve pollution prevention or pollutant removal at the least life-cycle costs, subject to environmental review results.','Sustainable Communities');");

mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Vietnamese Teaching', '50','Lily King','lking@gatech.edu','This project offers the unique opportunity to work with enthusiastic and lively Vietnamese children and contribute to providing an improved quality of life for local people living in Vietnam. Participants will be heavily involved in teaching and playing with local children, whilst helping to create a sustainable education infrastructure for the future of the local community.','Community');");

mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Green Stormwater Infrastruture', '15','Chandler Matthew','cmatthew@gatech.edu','Green stormwater infrastructure includes a wide array of practices at multiple scales that manage wet weather and that maintain and restore natural hydrology by infiltrating, evapotranspiring and harvesting and using stormwater.','Sustainable Communities');");

mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Project LOVE', '10','Kayla Ranking','kranking@gatech.edu','Volunteers spend time with elderly residents at Westminster Oaks Retirement Community. Taking walks, making arts and crafts, playing games, and reading are just some of the options for interacting with the wonderful residents.','Community');");
 			
mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Inproving Living Condition', '45','Tiffany Kim','tkim@gatech.edu','The development objective of the Community Development Project is to establish an effective and sustainable instrument to improve the living conditions and the economic status of disadvantaged communities. There are two main project components.','Sustainable Communities');");
 			
 mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('Green Garden Project', '20','Chrsia Wlker', 'clwaker@gatech.edu','The project aimed at providing opportunities to people aged 55 and over to continue their active, honorable, healthy of socially active live as well as to help their families with their own agricultural products and to acquire the necessary knowledge and skills in landscaping and in using digital applications. As a result, 60 unemployed persons acquired professional knowledge and skills to build green gardens. After the completion of the landscaping program, the participants are able to perform competently and independently activities in the area of landscaping and vegetables production.','Sustainable Communities');");
 			
 mysqli_query($link, "INSERT INTO PROJECT (Pname,PEstNumStu,AdvName,AdvEmail,Description,PDName)
 			VALUES ('HOPE Community', '18', 'JeTonym Starbucks', 'jststarbucksatech.edu','PrThe HOPE Community provides temporary housing for families dealing with homelessness. Volunteers are needed to assist with childcare such as mentoring, games, outdoor play, reading, homework help, etc.', 'Communitys');");
 



mysqli_close($link);

?>
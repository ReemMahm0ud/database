INSERT INTO users(user_firstname, user_lastname, user_password, user_email, user_gender, user_birthdate)
       VALUES ("Armin", "Virgil", "8bf9c975b1e15ffd1bc40ba3168ce01e", "armin@gmail.com", "M", "2001-02-05");
INSERT INTO users(user_firstname, user_lastname, user_nickname, user_password, user_email, user_gender, user_birthdate, user_status)
       VALUES ("Paul", "James", "Pynch", "c13e13da2073260c2194c15d782e86a9","paul@gmail.com", "M", "1998-12-19", "S");
INSERT INTO users(user_firstname, user_lastname, user_password, user_email, user_gender, user_birthdate)
       VALUES ("Chris", "Wilson", "944facfeb153b4f01916a0f166fcc315", "chris@gmail.com", "M", "1996-01-18");
INSERT INTO users(user_firstname, user_lastname, user_password, user_email, user_gender, user_birthdate, user_status)
       VALUES ("Rory", "Blue", "b0dbaa43d4d93d6f5587faa3f6690dfe","rory@gmail.com", "F", "1994-04-18", "M");
INSERT INTO users(user_firstname, user_lastname, user_password, user_email, user_gender, user_birthdate)
       VALUES ("Andrea", "Surman", "28f719c89ef7f33ce2e178490676b5ab", "andrea@gmail.com", "M", "1994-06-06");

INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("Hello there!", "2017-12-23 00:50:06", "Y", 1);
INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("Paul James has changed his profile picture.", "2017-12-23 00:50:06", "N", 2);
INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("A new artwork from the upcoming content.", "2017-12-23 00:50:06", "Y", 3);
INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("New Year Eve Fireworks", "2017-12-23 00:50:06", "Y", 4);
INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("Visit our profile to check out the upcoming transfers and rumors for January 2018", "2017-12-23 00:50:06", "N", 5);
INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("Happy new year!", "2017-12-23 00:50:06", "N", 5);

INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (2,1,1);
INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (2,3,1);
INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (2,4,1);

INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (1,5,1);
INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (3,5,1);
INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (4,5,1);

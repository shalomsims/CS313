INSERT INTO user_(username,user_password) VALUES ('shalomsims','password');
INSERT INTO user_(username,user_password) VALUES ('agentofshield92','strongestAvenger');
INSERT INTO user_(username,user_password) VALUES ('larry','livinglike');
INSERT INTO user_(username,user_password) VALUES ('PizzaGuy44','LactoseIntolerant');


INSERT INTO daily_entry(user_id, entry_type, entry_text, title) VALUES((SELECT user_id FROM user_ WHERE username = 'shalomsims'),'GOOD', 'Today was a really really good day. Im tired but happy. :)','Long Good Saturday');
INSERT INTO daily_entry(user_id, entry_type, entry_text, title) VALUES((SELECT user_id FROM user_ WHERE username = 'agentofshield92'),'AVERAGE', 'Average Saturday. Got some things done.','Long Saturday');
INSERT INTO daily_entry(user_id, entry_type, entry_text, title) VALUES((SELECT user_id FROM user_ WHERE username = 'larry'),'GOOD', 'GREAT. SO GREAT.','She said yes!');
INSERT INTO daily_entry(user_id, entry_type, entry_text, title) VALUES((SELECT user_id FROM user_ WHERE username = 'PizzaGuy44'),'AVERAGE', 'Didnt get pizza today.','No Pizza, no fun.');

INSERT INTO quote(quote_text) VALUES('This is positive quote #1! Be happy! Stop complaining! Dont nobody wanna hear that! Not even you! So STOP IT. :) You are awesome! Just do better lol');
INSERT INTO quote(quote_text) VALUES('This is positive quote #2! Be happy! Stop complaining! Dont nobody wanna hear that! Not even you! So STOP IT. :) You are awesome! Just do better lol');
INSERT INTO quote(quote_text) VALUES('This is positive quote #3! Be happy! Stop complaining! Dont nobody wanna hear that! Not even you! So STOP IT. :) You are awesome! Just do better lol');
INSERT INTO quote(quote_text) VALUES('This is positive quote #4! Be happy! Stop complaining! Dont nobody wanna hear that! Not even you! So STOP IT. :) You are awesome! Just do better lol');
INSERT INTO quote(quote_text) VALUES('This is positive quote #5! Be happy! Stop complaining! Dont nobody wanna hear that! Not even you! So STOP IT. :) You are awesome! Just do better lol');
INSERT INTO quote(quote_text) VALUES('This is positive quote #6! Be happy! Stop complaining! Dont nobody wanna hear that! Not even you! So STOP IT. :) You are awesome! Just do better lol');

SELECT u.username,u.user_password, de.user_id, de.entry_type, de.title, de.entry_text FROM daily_entry de JOIN user_ u ON u.user_id = de.user_id; 

SELECT quote_id, quote_text FROM quote;

SELECT created_date FROM daily_entry;

SELECT u.username, de.entry_type FROM daily_entry de JOIN user_ u USING(user_id);

--INSERT INTO QUOTES--




-- TESTING --

INSERT INTO daily_entry
(user_id
, entry_type
, entry_text
, title
)
VALUES
((SELECT user_id FROM user_ WHERE username = 'shalomsims')
,'GOOD'
, 'Today was a really really good day. Im tired but happy. :)'
,'Long Good Saturday'
);

INSERT INTO daily_entry
(user_id
, entry_type
, entry_text
, title
)
VALUES
((SELECT user_id FROM user_ WHERE username = 'shalomsims')
,'GOOD'
, 'Actually finished my project this week! It was pretty hard but I got it. Also Got a huge bag of candy. pretty dope.'
, 'Woohoo!'
);

INSERT INTO daily_entry
(user_id
, entry_type
, entry_text
, title
)
VALUES
((SELECT user_id FROM user_ WHERE username = 'shalomsims')
,'AVERAGE'
, 'I had a good day today. Some crazy stuff happened. Tony went to McDonanlds to get some biscuits but then the building exploded! SO cray cray. Just as he was pulling in. No one was inside supposedly. But also no one reacted to what was happening. He called me and I sped over to see what all was going on. Buy yea. No cops showed up. No ambulance. People drove by without looking. It was then that I saw this slight filmy looking bubble surrounding the McDonalds and the parking lot where we were standing. I pointed it out to him and he brought to my attention that sound from outside was slowly fading away. Now we think we are in some alternate universe. Kind of crazy. There are some weird creatures walking around us now. I’ll keep you updated. O-O'
, 'Not sure whats going on...'
);

SELECT u.username, de.entry_type, de.entry_text FROM daily_entry de JOIN user_ u USING(user_id);

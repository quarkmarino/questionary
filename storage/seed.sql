insert into tests (title, created_at, updated_at) values ('test 1', current_timestamp, current_timestamp);

insert into questions (text, created_at, updated_at, test_id) values ('question 1', current_timestamp, current_timestamp, 1);
insert into questions (text, created_at, updated_at, test_id) values ('question 2', current_timestamp, current_timestamp, 1);

insert into answers (value, type, created_at, updated_at, question_id) values ('answer1 ', 'option', current_timestamp, current_timestamp, 1);
insert into answers (value, type, created_at, updated_at, question_id) values ('answer2 ', 'option', current_timestamp, current_timestamp, 1);


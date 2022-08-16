TYPE=VIEW
query=select `a`.`title` AS `Title`,`a`.`director` AS `Director`,`b`.`Detail` AS `Type`,`a`.`tailer` AS `Tailer` from (`lab4`.`Movie_Name` `a` join `lab4`.`Movie_Type` `b` on(`a`.`movieType` = `b`.`movieType`))
md5=9e7797c51f681a35a134eff254b4fd14
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-07-25 20:14:46
create-version=2
source=SELECT\n`a`.`title` AS `Title`,\n`a`.`director` AS `Director`,\n`b`.`Detail` AS `Type`,\n`a`.`tailer` AS `Tailer` \nFROM `Movie_Name` `a` \nJOIN `Movie_Type` `b` \nON `a`.`movieType` = `b`.`movieType`
client_cs_name=latin1
connection_cl_name=latin1_swedish_ci
view_body_utf8=select `a`.`title` AS `Title`,`a`.`director` AS `Director`,`b`.`Detail` AS `Type`,`a`.`tailer` AS `Tailer` from (`lab4`.`Movie_Name` `a` join `lab4`.`Movie_Type` `b` on(`a`.`movieType` = `b`.`movieType`))
mariadb-version=100803

ECHO OFF
CALL CONFIG.BAT

%mysql% -u root < %db_structure%
IF ERRORLEVEL 1 GOTO OUT

%mysql% -u root %database% < %db_data% --default_character_set utf8
IF ERRORLEVEL 1 GOTO OUT

:OUT
PAUSE



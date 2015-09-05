<?php 

// ----------------------------------------- DATABASE PROPERTIES CONSTANTS  ----------------------------------------- \\

defined('DB_SERVER') ? null : 				define("DB_SERVER"					, "localhost");
defined('DB_USER') ? null : 				define("DB_USER"					, "root");
defined('DB_PASS') ? null : 				define("DB_PASS"					, "");
defined('DB_NAME') ? null : 				define("DB_NAME"					, "votingsystem");

// ----------------------------------------- TABLE CONSTANTS  ------------------------------------------------------- \\

defined('T_NOMINEES') ? null : 				define("T_NOMINEES"					, "tblnominees");
defined('T_USERS') ? null :					define("T_USERS"					, "tblusers");
defined('T_VOTES') ? null : 				define("T_VOTES"					, "tblvotes");

// ----------------------------------------- TABLE NOMINEE FIELDS CONSTANTS  ---------------------------------------- \\

defined('C_NOMINEE_ID') ? null : 			define("C_NOMINEE_ID"				, "ID");
defined('C_NOMINEE_NAME') ? null : 			define("C_NOMINEE_NAME"				, "Name");
defined('C_NOMINEE_POSITION') ? null : 		define("C_NOMINEE_POSITION"			, "Position");
defined('C_NOMINEE_YEAR_LEVEL') ? null : 	define("C_NOMINEE_YEAR_LEVEL"		, "YearLevel");
defined('C_NOMINEE_SECTION') ? null : 		define("C_NOMINEE_SECTION"			, "Section");
defined('C_NOMINEE_VOTES') ? null : 		define("C_NOMINEE_VOTES"			, "Votes");

// ----------------------------------------- TABLE USER FIELDS CONSTANTS  ------------------------------------------- \\

defined('C_USER_ID') ? null : 				define("C_USER_ID"					, "ID");
defined('C_USER_PASSWORD') ? null : 		define("C_USER_PASSWORD"			, "Password");
defined('C_USER_FIRST_NAME') ? null : 		define("C_USER_FIRST_NAME"			, "FirstName");
defined('C_USER_MIDDLE_NAME') ? null : 		define("C_USER_MIDDLE_NAME"			, "MiddleName");
defined('C_USER_LAST_NAME') ? null : 		define("C_USER_LAST_NAME"			, "LastName");
defined('C_USER_YEAR_LEVEL') ? null : 		define("C_USER_YEAR_LEVEL"			, "YearLevel");
defined('C_USER_SECTION') ? null : 			define("C_USER_SECTION"				, "Section");
defined('C_USER_BIRTH_DATE') ? null : 		define("C_USER_BIRTH_DATE"			, "BirthDate");
defined('C_USER_STATUS') ? null : 			define("C_USER_STATUS"				, "Status");
defined('C_USER_LEVEL') ? null : 			define("C_USER_LEVEL"				, "Level");

// -----------------------------------------TABLE VOTE FIELDS CONSTANTS  -------------------------------------------- \\

defined('C_VOTE_ID') ? null : 				define("C_VOTE_ID"					, "VoteID");
defined('C_VOTE_USER_ID') ? null : 			define("C_VOTE_USER_ID"				, "UserID");
defined('C_VOTE_NOMINEE_ID') ? null :		define("C_VOTE_NOMINEE_ID"			, "NomineeID");
defined('C_VOTE_NOMINEE_POSITION') ? null : define("C_VOTE_NOMINEE_POSITION"	, "NomineePosition");

?>
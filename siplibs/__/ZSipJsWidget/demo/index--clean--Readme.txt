Real Clean is index.html 
----Issues------
1) index.html mustn't be renamed (because of index.js file) otherwise some functions won't work
2) when index.html opens, At Console apper problem like that
	Failed to load resource: net::ERR_FILE_NOT_FOUND  help.png:1
	Failed to load resource: net::ERR_FILE_NOT_FOUND  edit.png:1
	Failed to load resource: net::ERR_FILE_NOT_FOUND  save.png:1 
because of index.js file.This issue can be fixed : move Demo_files/assets folder to the same directory with index.html

<?php

$opts = array(
    'roots'  => array(
        array(
            'driver' => 'LocalFileSystem',
            'autoload'   =>  false,   // It must set true If volume driver supports autoload function.
            'phash'      =>  '',     // Folder hash value on elFinder to be the parent of this volume
            'trashHash'  =>  'true',     //Folder hash value on elFinder to trash bin of this volume, it require 'copyJoin' to true
            'path'       =>  'testing/',    ///path/to/files/
            'startPath'  => 'testing/Elfinder/elFinder-2.0/files',   //Open this path on initial request instead of root path.            Notice: In order to validate this option by a multi-route, you have to set a value only to the volume which applies this option.
            //'URL'        => 'http://localhost/to/files/',   //URL that points to path directory (also called 'root URL'). If not set client will not see full path to files (replacement for old fileURL option), also all files downloads will be handled by connector.

            'encoding'   => 'UTF-8', #it mean is UTF-8
            'locale'     => '',  #(Use main options locale with empty value)
            'alias'      => 'Home',  //Root path alias for volume root. If not set will use directory name of path. Warning: when this option is set it will also rewrite return path for getFileCallback
            'i18nFolderName'   => false,   //   Enable i18n folder name that convert name to elFinderInstance.messages['folder_'+name]
            'mimeDetect'       => 'internal',  // Enable i18n folder name that convert name to elFinderInstance.messages['folder_'+name]
            'mimefile' => '',      //  Path to alternative mime types file. Only used when mimeDetect set to internal. If not set will use default mime.types
            'additionalMimeMap'     => array(),// Example:  array( 'tpl:application/vnd.groove-tool-template' => 'text/plain' // '[ext]:[Detected MIME Type]' => '[Normalized MIME Type]')
            'dispInlineRegex'     => '^(?:(?:video|audio)|image/(?!.+\+xml)|application/(?:ogg|x-mpegURL|dash\+xml)|(?:text/plain|application/pdf)$)',//MIME regex of send HTTP header "Content-Disposition: inline" on file open command.  '.*' is allow inline of all of MIME types   '$^' is not allow inline of all of MIME types    '^(?:image|text/plain$)' is recommended for safety on public elFinder
            'imgLib'     => 'auto',  //Image manipulations library. Can be auto, imagick, gd or convert
            'tmbPath'    => 'thumbnails',//Directory for thumbnails. If this is a simple filename, it will be prefixed with the root directory path. If you choose to use a location outside of the root directory, you should use a full pathname as a relative path using ellipses will get mangled and may not work (create thumbnails because tmbPath is NOT writable) on some server OS's.
            'tmbPathMode'     => 0777,      //Umask for thumbnails dir creation. Will be removed in future
            'tmbURL'     => 'self',  //URL for thumbnails directory set in tmbPath. Set it only if you want to store thumbnails outside root directory.
            'tmbSize'     => 48,  //Thumbnails size in pixels. Thumbnails are square
            'tmbCrop'    => true,
            'tmbBgColor'     => 'transparent',  //Thumbnails background color (hex #rrggbb or transparent)
            'bgColorFb '     => '#ffffff',  //Image rotate fallback background color (hex #rrggbb). Uses this color if it can not specify to transparent.
            'tmbFbSelf '     => true,   // Fallback self image to thumbnail (nothing imgLib).
            'copyOverwrite'     => true,   //Replace files on paste or give new names to pasted files. true - old file will be replaced with new one, false - new file get name - original_name-number.ext
            'copyJoin'     => true,  //  Merge new and old content on paste. true - join new and old directories content, false - replace old directories with new ones
            'copyFrom'     => true, //   Allow to copy from this volume to other ones
            'tmpPath'     => '', //  Temporary directory used for extract etc. The default tmpPath is to use 'tmbPath'. If you choose to use another location, set 'tmpPath' to a full pathname.
            'uploadOverwrite'     => true,  //Replace files with the same name on upload or give them new names. true - replace old files, false give new names like original_name-number.ext
            'uploadAllow'     => array(), //  Mimetypes allowed to upload
            'uploadDeny'     => array(),  //Example:            'uploadDeny' => array('all') # deny of all types
            'uploadOrder'     => array('deny', 'allow'), //  Order to proccess uploadAllow and uploadDeny options. Logic is the same as Apache web server options Allow, Deny, Order
            'uploadMaxSize'     => 0,  //    Maximum upload file size. This size is per files. Can be set as number or string with unit 10M, 500K, 1G.  0 means unlimeted size
            'uploadMaxConn '     => 3,  //  Maximum number of connection of chunked file uploading. -1 to disable chunked file upload.

            'defaults'   => array('read' => true, 'write' => true),
            'attributes' => array(
                array( // hide readmes
                    'pattern' => '/README/',
                    'read' => true,
                    'write' => true,
                    'hidden' => true,
                    'locked' => false
                ),
                array( // restrict access to png files
                    'pattern' => '/\.png$/',
                    'write' => false,
                    'locked' => true
                )
            ),
            ' acceptedName'     => '/^[^\.].*/',  // Validate new file name regex or function
            'accessControl '     => null,  //Function or class instance method to control files permissions. This works similar to bind option
            'accessControlData '     => null,  //Data that will be passet to access control method
            ' disabled'     => array(),  // List of commands disabled on this root (commands list)
            'statOwner '     => false,  //Include file owner, group & mode in stat results on supported volume driver (LocalFileSystem(require POSIX in PHP), FTP on UNIX system-like). false to inactivate "chmod" command.
            'allowChmodReadOnly'     => false,  //Allow exec chmod of read-only( on elFinder permission ) files.
            'treeDeep'     => 1,  // How many subdirs levels return per request
            'checkSubfolders'     => true,  // Check children directories for other directories in it. true every folder will be check for children folders, -1 every folder will be check asynchronously, false all folders will be marked as having subfolders
            'separator'     => DIRECTORY_SEPARATOR,  // Directory separator. Required by client to show correct file paths
            'timeFormat'     => 'H:i',  //  File modification time format
            'dateFormat'     => 'j M Y H:i',  //File modification date format. This value is passed to PHP date() function
            'cryptLib '     => undefined,  //Library to crypt/uncrypt files names (not implemented yet)
            'archiveMimes '     => array(),  // Allowed archive's mimetypes to create. Leave empty for all available types
            'archivers '     => array(),  // Manual config for archivers. Leave empty for auto detect
            'quarantine'     =>  path ,  //  Temporary directory for archive file extracting. This option only uses the LocalFileSystem volume driver.            We recommend to set a path outside the document root.
            'plugin' => array(),  // Configure plugin options of each volume

        ),
        array( // another root
            //'driver' => 'MySQL',
            'host'   => 'localhost',
            'user'   => 'eluser',
            'pass'   => 'elpass',
            'db'     => 'elfinder',
            'path'   => 1,
        )
    )
);
    $opts_2 = json_encode($opts);
// run elFinder
$connector = new elFinderConnector(new elFinder($opts_2));
$connector->run();

<?php
// encoding = 'utf-8'
/**
 * 
 * This software is distributed under the GNU LGPL v3.0 license.
 * @author Gemorroj
 * @copyright 2008-2010 http://wapinet.ru
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt
 * @link http://wapinet.ru/gmanager/
 * @version 0.7.4 beta
 * 
 * PHP version >= 5.2.1
 * 
 */


$GLOBALS['lng'] = array(
'locale'                        =>  'en_US.UTF-8',
'title_index'                   =>  'Index of Directory',
'title_edit'                    =>  'Editor',
'title_change'                  =>  'More',
'check'                         =>  'All',
'n'                             =>  'N',
'name'                          =>  'Name',
'type'                          =>  'Type',
'size'                          =>  'Size',
'lines'                         =>  'Lines',
'change'                        =>  'Change',
'rename'                        =>  'Rename',
'meter'                         =>  'Counter',
'rand'                          =>  'Random Value',
'edit'                          =>  'Edit',
'line_editor'                   =>  'Line',
'basic_editor'                  =>  'Basic',
'del'                           =>  'Delete',
'chmod'                         =>  'CHMOD',
'date'                          =>  'Date',
'uid'                           =>  'Owner',
'ch_index'                      =>  '*',
'create'                        =>  'Create',
'upload'                        =>  'Upload File',
'up'                            =>  'Upload',
'url'                           =>  'URL',
'headers'                       =>  'Headers',
'only_headers'                  =>  'Only Headers',
'scan'                          =>  'Scanner',
'pattern'                       =>  'Pattern',
'enter'                         =>  'Browse',
'look'                          =>  'Look',
'go'                            =>  'Go',
'ch'                            =>  'Change',
'dl'                            =>  'Delete',
'cr'                            =>  'Create',
'save'                          =>  'Save',
'send_mail'                     =>  'Send E-mail',
'mail_to'                       =>  'Send To',
'mail_from'                     =>  'From',
'mail_theme'                    =>  'Subject',
'mail_mess'                     =>  'Message',
'sz'                            =>  'Size',
'mod'                           =>  'More',
'phpinfo'                       =>  'PHPINFO',
'eval'                          =>  'EVAL',
'eval_go'                       =>  'Execute',
'php_code'                      =>  'PHP Code:',
'result'                        =>  'Result:',
'get'                           =>  'Download',
'new_version'                   =>  'Check Update',
'version_new'                   =>  'New Version',
'version_old'                   =>  'Current Version',
'new_version_true'              =>  'New Version Available',
'new_version_false'             =>  'You have last version of Gmanager',
'not_connect'                   =>  'Failed to connect with server',
'change_name'                   =>  'Name',
'change_chmod'                  =>  'CHMOD',
'change_del'                    =>  'Delete Base File/Folder',
'change_func'                   =>  'Move/Rename',
'change_func2'                  =>  'Move/Copy',
'syntax'                        =>  'Check PHP Syntax',
'validator'                     =>  'Check XML Syntax',
'charset'                       =>  'Charset',
'charset_no'                    =>  'Original',
'warning'                       =>  'Such file exists<br/>All data will be deleted',
'back'                          =>  'Back',
'file'                          =>  'File',
'dir'                           =>  'Folder',
'dir_empty'                     =>  'Folder is Empty',
'not_found'                     =>  'File no Found',
'copy_file_true'                =>  'File %file% was Copied',
'copy_file_false'               =>  'File %file% not Copied',
'move_file_true'                =>  'File %file% was Moved',
'move_file_false'               =>  'File %file% not Moved',
'del_file_true'                 =>  'File was Deleted',
'del_file_false'                =>  'File not Deleted',
'full_del_file_dir_true'        =>  'Selected Files/Folders were Deleted',
'full_del_file_dir_false'       =>  'Following Files/Folders were Deleted',
'full_rechmod'                  =>  'Rights was Changed',
'create_dir_true'               =>  'Folder was Created',
'create_dir_false'              =>  'Folder was not Created',
'fputs_file_true'               =>  'Data was Written',
'fputs_file_false'              =>  'Data was not Written',
'chmod_true'                    =>  'Rights were Changed',
'chmod_false'                   =>  'Rights were not Changed',
'chmod_mode_false'              =>  'Rights was set incorrect',
'full_rename'                   =>  'Operation Successful',
'copy_files_true'               =>  'Folder %dir% was Copied',
'copy_files_false'              =>  'Folder %dir% was not Copied',
'move_files_true'               =>  'Folder %dir% was Moved',
'move_files_false'              =>  'Folder %dir% was not Moved',
'del_dir_true'                  =>  'Folder was Deleted',
'del_dir_false'                 =>  'Following Files/Folders were not Deleted',
'syntax_true'                   =>  'No Syntax Errors',
'syntax_not_check'              =>  'File not Checked',
'syntax_unknown'                =>  'Unknown',
'validator_true'                =>  'No Syntax Errors',
'validator_not_check'           =>  'File not Checked',
'comment_archive'               =>  'Comment',
'add_archive'                   =>  'Add to Archive',
'add_archive_dir'               =>  'Add to Folder',
'add_archive_true'              =>  'Files/Folders were Added to Archive',
'add_archive_false'             =>  'Files/Folders were not Added',
'archive_size'                  =>  'Size in the Archive',
'real_size'                     =>  'Real Size',
'archive_date'                  =>  'Archivation Date',
'extract_archive'               =>  'Extract',
'extract_file'                  =>  'Extract Files/Folders',
'extract_file_true'             =>  'Files/Folders were Extracted',
'extract_file_false'            =>  'Files/Folders were not Extracted',
'extract_file_false_ext'        =>  'File %file% was not Extracted',
'extract_true'                  =>  'Archive was Extracted',
'extract_false'                 =>  'Archive was not Extracted',
'archive_error'                 =>  'Error opening Archive',
'archive_error_encrypt'         =>  'Archive has passwod',
'create_archive'                =>  'Create ZIP Archive',
'create_archive_true'           =>  'ZIP archive was created',
'create_archive_false'          =>  'ZIP Archive was not created',
'overwrite_existing_files'      =>  'Replace existing Files',
'overwrite_false'               =>  'File with such name already exists',
'upload_true'                   =>  'File was Uploaded',
'upload_false'                  =>  'File was not Uploaded',
'send_mail_true'                =>  'Message was Sent',
'send_mail_false'               =>  'Message was not Sent',
'replace'                       =>  'Replace',
'replace_from'                  =>  'Replace from',
'replace_to'                    =>  'To',
'replace_true'                  =>  'Number of Replaces: ',
'replace_false_file'            =>  'Replaced data was not saved',
'replace_false_str'             =>  'No words to Replace',
'regexp'                        =>  'Regular Expression',
'regexp_error'                  =>  'Regular Expression syntax Error',
'search'                        =>  'Search',
'what_search'                   =>  'Word to Search',
'where_search'                  =>  'Where to Search',
'in_files'                      =>  'In Files',
'in_text'                       =>  'In Text',
'register'                      =>  'Case Sensitive',
'str_register'                  =>  'Case',
'str_register_no'               =>  'Do Not Change Case',
'str_register_low'              =>  'lower case',
'str_register_up'               =>  'UPPER CASE',
'yes'                           =>  'yes',
'no'                            =>  'no',
'tables'                        =>  'Install Tables',
'tables_file'                   =>  'File with Tables',
'sql'                           =>  'SQL',
'sql_query'                     =>  'SQL Query',
'mysql_backup'                  =>  'Backup',
'mysql_backup_structure'        =>  'Structure tables',
'mysql_backup_data'             =>  'Data tables',
'mysql_backup_true'             =>  'Backup successfully created',
'mysql_backup_false'            =>  'Errors occurred during the performing of operations: ',
'mysql_user'                    =>  'DB User',
'mysql_pass'                    =>  'DB Password',
'mysql_host'                    =>  'Host',
'mysql_db'                      =>  'Database',
'mysq_connect_false'            =>  'Could not connect with MySQL',
'mysq_select_db_false'          =>  'Unable to connect to database',
'mysq_query_false'              =>  'Error executing database operation',
'mysql_true'                    =>  'Number of Queries: ',
'microtime'                     =>  'Query time: %time% sec.',
'create_sql_installer'          =>  'Create Installer',
'save_as'                       =>  'Save as',
'sql_parser_error'              =>  'SQL parser error',
'install'                       =>  'Install',
'unknown'                       =>  'Unknown',
'disable_function'              =>  'PHP Module is not installed or Function disabled',
'limit'                         =>  'Files per page',
'of files'                      =>  'files',
'of folders'                    =>  'folders',
'md5'                           =>  'MD5',
'look'                          =>  'View',
'del_notify'                    =>  'Do you really want to delete?',
//'win_chmod'                   =>  'OS Windows not support rights',
'cmd'                           =>  'Command Line',
'cmd_code'                      =>  'Command',
'cmd_go'                        =>  'Execute',
'cmd_error'                     =>  'Command Error',
'disk_free_space'               =>  'Free disk Space:',
'disk_total_space'              =>  'Total disk Space:',
'memory_get_usage'              =>  'RAM:',
'tables_not_found'              =>  'File with tables was not found',
'send_report'                   =>  'Error Report',
'set_time_limit'                =>  'Time Limit',
'ignore_user_abort'             =>  'Ignore user abort',
'permission_denided'            =>  'Permission Denided',
'unknown_error'                 =>  'Unknown Error',
'filename_empty'                =>  'Filename cannot be empty',
);

?>

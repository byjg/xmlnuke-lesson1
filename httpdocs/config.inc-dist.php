<?php
## CONFIG FILE AUTO-GENERATED on 2014-04-20T14:43:36-03:00
class config
{
	public static function getValuesConfig()
	{
		$values = array();
		$values['xmlnuke.ROOTDIR'] = '/home/jg/VCS/opensource/xmlnuke/xmlnuke-data';
		$values['xmlnuke.PHPXMLNUKEDIR'] = rtrim(PHPXMLNUKEDIR, DIRECTORY_SEPARATOR);
		$values['xmlnuke.USEABSOLUTEPATHSROOTDIR'] = true;
		$values['xmlnuke.XSLCACHE'] = '\Xmlnuke\Core\Cache\NoCacheEngine';  # ICacheEngine instance
		$values['xmlnuke.SMTPSERVER'] = '';                       # [smtp|ssl]://user:pass@server:port
		$values['xmlnuke.USEFULLPARAMETER'] = true;
		$values['xmlnuke.USERSDATABASE'] = '';                    # DBDataset connection ('_db.anydata.xml')
		$values['xmlnuke.USERSCLASS'] = '';                       # IUsersBase instance
		$values['xmlnuke.LOGINMODULE'] = 'Xmlnuke.Login';         # IModule instance
		$values['xmlnuke.XMLNUKEDATA'] =
				array(
					'./data'
				);
		$values['xmlnuke.PHPLIBDIR'] =
				array(
					'./lib'
				);
		$values['xmlnuke.URLXMLNUKEENGINE'] = 'xmlnuke.php';
		$values['xmlnuke.URLMODULE'] = 'xmlnuke.php';
		$values['xmlnuke.URLXMLNUKEADMIN'] = 'xmlnuke.php?/admin';
		$values['xmlnuke.DEFAULTPAGE'] = 'page';
		$values['xmlnuke.URLBASE'] = '';
		$values['xmlnuke.DETECTMOBILE'] = true;
		$values['xmlnuke.SHOWCOMPLETEERRORMESSAGES'] = true;
		$values['xmlnuke.LANGUAGESAVAILABLE'] =
				array(
					'en-us' => 'en-us', 
					'pt-br' => 'pt-br'
				);
		$values['xmlnuke.DEBUG'] = false;
		$values['xmlnuke.DEVELOPMENT'] = true;
		$values['xmlnuke.CAPTCHACHALLENGE'] = 'hard';              # hard / soft
		$values['xmlnuke.CAPTCHALETTERS'] = '5';
		$values['xmlnuke.ENABLEPARAMPROCESSOR'] = true;
		$values['xmlnuke.CHECKCONTENTTYPE'] = true;
		$values['xmlnuke.CACHESTORAGEMETHOD'] = 'PLAIN';           # PLAIN / HASH
		$values['xmlnuke.XMLSTORAGEMETHOD'] = 'PLAIN';             # PLAIN / HASH
		$values['xmlnuke.RESTRICTACCESS'] = '';                    # ICheckAccess instance
		$values['xmlnuke.OUTPUT_FORMAT'] = '';                     # - / json / xml
		$values['xmlnuke.POST_PROCESS_RESULT'] = '\Xmlnuke\Core\Processor\BaseProcessResult';               # IProcessResult instance
		return $values;
	}
}
define('PHPXMLNUKEDIR', '/home/jg/VCS/opensource/xmlnuke/xmlnuke-php5' . DIRECTORY_SEPARATOR);
## END-OF-FILE

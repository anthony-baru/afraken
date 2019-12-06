<?php namespace App\Classes\Data;



class AfrakenData {
    
    //Environment
    const afrakenEnvKey = 'Afraken_ENV';
    
    //App Key
    const appKeyKey = 'APP_KEY';
    
    //Database
    const dbHostKey = 'DB_HOST';
    const dbPortKey = 'DB_PORT';
    const dbUserNameKey = 'DB_USERNAME';
    const dbPasswordKey = 'DB_PASSWORD';
    const dbDatabaseKey = 'DB_DATABASE';
    
    //S3
    const awsKeyKey = 'AWS_KEY';
    const awsSecretKey = 'AWS_SECRET';
    const s3RegionKey = 'S3_REGION';
    const s3BucketKey = 'S3_BUCKET';
    
    //Mail
    const mailDriverKey = 'MAIL_DRIVER';
    const mailHostKey = 'MAIL_HOST';
    const mailPortKey = 'MAIL_PORT';
    const mailUserNameKey = 'MAIL_USERNAME';
    const mailPasswordKey = 'MAIL_PASSWORD';
    const mailFromKey = 'MAIL_FROM';
    const mailNameKey = 'MAIL_NAME';
    const mailSendMailPathKey = 'MAIL_SENDMAIL_PATH';
	const mailEncryptionKey ='MAIL_ENCRYPTION';
    
    
    //exam User
    const afrakenAdminEmailKey = 'AFRAKEN_ADMIN_EMAIL';
    const afrakenAdminPasswordKey = 'AFRAKEN_ADMIN_PASSWORD';
	
	//session
    const sessionDriverKey = 'SESSION_DRIVER';
	
	
	//captcha
    const nocaptchaSecretKey = 'NOCAPTCHA_SECRET';
    const nocaptchaSitekeyKey = 'NOCAPTCHA_SITEKEY';
	
	
    //ctor
    public function __construct() {
	$host = env('WEBHOST', 'localhost');
        
        if ($host == 'aws') {
            //Environment
            $afrakenEnv = $_SERVER[self::afrakenEnvKey];
            
            //Laravel
            $appKey = $_SERVER[self::appKeyKey];
            
            //Database
            $dbHost = $_SERVER[self::dbHostKey];
            $dbPort = $_SERVER[self::dbPortKey];
            $dbUserName = $_SERVER[self::dbUserNameKey];
            $dbPassword = $_SERVER[self::dbPasswordKey];
            $dbDatabase = $_SERVER[self::dbDatabaseKey];
			
			//session
			$sessionDriver = $_SERVER[self::sessionDriverKey];
            
            //S3
            $awsKey = $_SERVER[self::awsKeyKey];
            $awsSecret = $_SERVER[self::awsSecretKey];
            $s3Region = $_SERVER[self::s3RegionKey];
            $s3Bucket = $_SERVER[self::s3BucketKey];
            
            //Mail
            $mailDriver = $_SERVER[self::mailDriverKey];
            $mailHost = $_SERVER[self::mailHostKey];
            $mailPort = $_SERVER[self::mailPortKey];
            $mailUserName = $_SERVER[self::mailUserNameKey];
            $mailPassword = $_SERVER[self::mailPasswordKey];
            $mailFrom = $_SERVER[self::mailFromKey];
            $mailName = $_SERVER[self::mailNameKey];
            $mailSendMailPath = $_SERVER[self::mailSendMailPathKey];
			$mailEncryption = $_SERVER[self::mailEncryptionKey];
            
            
            
           
            $afrakenAdminEmail = $_SERVER[self::afrakenAdminEmailKey];
            $afrakenAdminPassword = $_SERVER[self::afrakenAdminPasswordKey];
			
			
			$nocaptchaSecret = $_SERVER[self::nocaptchaSecretKey];
            $nocaptchaSitekey = $_SERVER[self::nocaptchaSitekeyKey];
            
            
        } else {
            //Environment
            $afrakenEnv = env(self::afrakenEnvKey, '');
            
            //Laravel
            $appKey = env(self::appKeyKey, '');
            
            //Database
            $dbHost = env(self::dbHostKey, 'localhost');
            $dbPort = env(self::dbPortKey, '3306');
            $dbUserName = env(self::dbUserNameKey, 'forge');
            $dbPassword = env(self::dbPasswordKey, '');
            $dbDatabase = env(self::dbDatabaseKey, 'forge');
			
			//session
			$sessionDriver = env(self::sessionDriverKey, 'database');
            
           //S3
            $awsKey = env(self::awsKeyKey, '');
            $awsSecret = env(self::awsSecretKey, '');
            $s3Region = env(self::s3RegionKey, '');
            $s3Bucket = env(self::s3BucketKey, '');
            
            //Mail
            $mailDriver = env(self::mailDriverKey, 'smtp');
            $mailHost = env(self::mailHostKey, 'smtp.mailgun.org');
            $mailPort = env(self::mailPortKey, 587);
            $mailUserName = env(self::mailUserNameKey, '');
            $mailPassword = env(self::mailPasswordKey, '');
            $mailFrom = env(self::mailFromKey, '');
            $mailName = env(self::mailNameKey, '');
            $mailSendMailPath = env(self::mailSendMailPathKey,
                    '/usr/sbin/sendmail -bs');
			$mailEncryption = env(self::mailEncryptionKey,'tls');
            
            
            
            
            $afrakenAdminEmail = env(self::afrakenAdminEmailKey, 'afraken@gmail.com');
            $afrakenAdminPassword = env(self::afrakenAdminPasswordKey, 'afraken');
			
			$nocaptchaSecret = env(self::nocaptchaSecretKey, '');
            $nocaptchaSitekey = env(self::nocaptchaSitekeyKey, '');
			
            
        }
        
        //Environment
        $this->secretData[self::afrakenEnvKey] = $afrakenEnv;
        //App Key
        $this->secretData[self::appKeyKey] = $appKey;
		
		///Session Key
        $this->secretData[self::sessionDriverKey] = $sessionDriver;
        //Database
        $this->secretData[self::dbHostKey] = $dbHost;
        $this->secretData[self::dbPortKey] = $dbPort;
        $this->secretData[self::dbUserNameKey] = $dbUserName;
        $this->secretData[self::dbPasswordKey] = $dbPassword;
        $this->secretData[self::dbDatabaseKey] = $dbDatabase;
        //S3
        $this->secretData[self::awsKeyKey] = $awsKey;
        $this->secretData[self::awsSecretKey] = $awsSecret;
        $this->secretData[self::s3RegionKey] = $s3Region;
        $this->secretData[self::s3BucketKey] = $s3Bucket;
        //Mail
		
        $this->secretData[self::mailDriverKey] = $mailDriver;
        $this->secretData[self::mailHostKey] = $mailHost;
        $this->secretData[self::mailPortKey] = $mailPort;
        $this->secretData[self::mailUserNameKey] = $mailUserName;
        $this->secretData[self::mailPasswordKey] = $mailPassword;
        $this->secretData[self::mailFromKey] = $mailFrom;
        $this->secretData[self::mailNameKey] = $mailName;
        $this->secretData[self::mailSendMailPathKey] = $mailSendMailPath;
		$this->secretData[self::mailEncryptionKey] = $mailEncryption;
		
        
        $this->secretData[self::afrakenAdminEmailKey] = $afrakenAdminEmail;
        $this->secretData[self::afrakenAdminPasswordKey] = $afrakenAdminPassword;
		
		$this->secretData[self::nocaptchaSecretKey] = $nocaptchaSecret;
        $this->secretData[self::nocaptchaSitekeyKey] = $nocaptchaSitekey;

    }
    
    //Returns the whole array
    public function GetSecretData () {
        return $this->secretData;
    }
    
    //Environment
    public function GetAfrakenEnv() {
        return $this->secretData[self::afrakenEnvKey];
    }
    
    //App Key
    public function GetAppKey() {
        return $this->secretData[self::appKeyKey];
    }
	
	
	//Session Key
    public function GetSessionDriver() {
        return $this->secretData[self::sessionDriverKey];
    }
    
    //Database
    public function GetDBHost() {
        return $this->secretData[self::dbHostKey];
    }
    public function GetDBPort() {
        return $this->secretData[self::dbPortKey];
    }
    public function GetDBUserName() {
        return $this->secretData[self::dbUserNameKey];
    }
    public function GetDBPassword() {
        return $this->secretData[self::dbPasswordKey];
    }
    public function GetDBDatabase() {
        return $this->secretData[self::dbDatabaseKey];
    }
    
    //S3
    public function GetAWSKey() {
        return $this->secretData[self::awsKeyKey];
    }
    public function GetAWSSecret() {
        return $this->secretData[self::awsSecretKey];
    }
    public function GetS3Region() {
        return $this->secretData[self::s3RegionKey];
    }
    public function GetS3Bucket() {
        return $this->secretData[self::s3BucketKey];
    }
    
    //Mail
    public function GetMailDriver() {
        return $this->secretData[self::mailDriverKey];
    }
    public function GetMailHost() {
        return $this->secretData[self::mailHostKey];
    }
    public function GetMailPort() {
        return $this->secretData[self::mailPortKey];
    }
    public function GetMailUserName() {
        return $this->secretData[self::mailUserNameKey];
    }
    public function GetMailPassword() {
        return $this->secretData[self::mailPasswordKey];
    }
    public function GetMailFrom() {
        return $this->secretData[self::mailFromKey];
    }
    public function GetMailName() {
        return $this->secretData[self::mailNameKey];
    }
    public function GetMailSendMailPath() {
        return $this->secretData[self::mailSendMailPathKey];
    }
	
	public function GetMailEncryption() {
        return $this->secretData[self::mailEncryptionKey];
    }
    
   
    
    //Exam User
    public function GetAFRAKENAdminEmail() {
        return $this->secretData[self::afrakenAdminEmailKey];
    }
    public function GetAFRAKENAdminPassword() {
        return $this->secretData[self::afrakenAdminPasswordKey];
    }
	
	public function GetNocaptchaSecret() {
        return $this->secretData[self::nocaptchaSecretKey];
    }
    public function GetNocaptchaSitekey() {
        return $this->secretData[self::nocaptchaSitekeyKey];
    }
	
    
}
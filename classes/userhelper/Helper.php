<?php
    class Helper {
        const session_const = '_SL_';

        public function isSessionStart()
        {
            $session_key = Helper::encryptSessionKey();
            if(isset($_SESSION[SELF::session_const.$session_key]))
                return true;
            return false;
        }

        public function encryptSessionKey()
        {
            $session_key = md5('devsaaslabs');
            return $session_key;
        }

        public function redirectPage($page)
        {
            header('Location: '._SERVER_.'index.php?p='.$page);
        }

        public function setSessionVariable($domain_name = false) {
            $session_key = Helper::encryptSessionKey();
            $_SESSION[SELF::session_const.$session_key] = 'session_starts';
            $_SESSION['domain_name'] = $domain_name;
        }
    }
?>
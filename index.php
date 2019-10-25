    <?php  
    interface ShareInterface
    {
        public function setMessage($message);
        public function share();
    }
     
    class Twitter implements ShareInterface
    {
        private $message;
     
        public function setMessage($message)
        {
            $this->message = $message;
        }
     
        public function share()
        {
            echo sprintf('Distribuie"%s" on Twitter.', $this->message).PHP_EOL;
        }
    }
     
    class Facebook implements ShareInterface
    {
        private $message;
     
        public function setMessage($message)
        {
            $this->message = $message;
        }
     
        public function share()
        {
            echo sprintf('Distribuie "%s" on Facebook.', $this->message).PHP_EOL;
        }
    }
     
    class Linkedin implements ShareInterface
    {
        private $message;
     
        public function setMessage($message)
        {
            $this->message = $message;
        }
     
        public function share()
        {
            echo sprintf('Distribuie"%s" on Linkedin.', $this->message).PHP_EOL;
        }
    }
     
    $twitter = new Twitter();
    $twitter->setMessage('Learning Facade pattern.');
    $twitter->share();
     
    $facebook = new Facebook();
    $facebook->setMessage('Learning Facade pattern.');
    $facebook->share();
     
    $linkedin = new Linkedin();
    $linkedin->setMessage('Learning Facade pattern.');
    $linkedin->share();

        class SocialMedia
    {
        private $twitter;
        private $facebook;
        private $linkedin;
     
        public function __construct(ShareInterface $twitter, ShareInterface $facebook, ShareInterface $linkedin)
        {
            $this->twitter = $twitter;
            $this->facebook = $facebook;
            $this->linkedin = $linkedin;
        }
     
        public function setMessage($message)
        {
            $this->twitter->setMessage($message);
            $this->facebook->setMessage($message);
            $this->linkedin->setMessage($message);
     
            return $this;
        }
     
        public function share()
        {
            $this->twitter->share();
            $this->facebook->share();
            $this->linkedin->share();
        }
    }
     
    $socialMedia = new SocialMedia(new Twitter(), new Facebook(), new Linkedin());
    $socialMedia->setMessage('Paternnul Facade.')->share();
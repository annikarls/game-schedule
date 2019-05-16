<?php
class PreferencesUser extends Preferences {

  private $userEmail;

    public function __construct($footer,$userEmail) {
        $this->userEmail = $userEmail;
        parent::__construct($footer);
    }

    public function showFooter() {
        echo "Inloggad som " . $this->userEmail;
    }
}
?>
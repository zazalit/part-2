
<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool {
        if ($this->currentSpeed >= 10) {
            return true;
        }
        else {
             return false;
        }
    }

    public function switchOff(): bool {
        return false;
    }

}

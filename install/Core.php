<?php

class Core {
    protected $step = [
        'mysql',
        'done'
    ];
    protected $currentStep = 0;

    public function __construct()
    {
        if (URI[0] !== 'installation') {
            header( 'Refresh: 0; url=/installation/0' );
        }
        $this->currentStep = URI[1];
        $this->switchToStep();
    }

    protected function switchToStep()
    {
        exit('test');
    }
}

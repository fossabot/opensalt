<?php

namespace App\Command\Framework;

use App\Command\BaseCommand;
use App\Entity\Framework\LsDefSubject;

class UpdateSubjectCommand extends BaseCommand
{
    /**
     * @var LsDefSubject
     */
    private $subject;

    public function __construct(LsDefSubject $subject)
    {
        $this->subject = $subject;
    }

    public function getSubject(): LsDefSubject
    {
        return $this->subject;
    }
}

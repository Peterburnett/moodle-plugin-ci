<?php

/*
 * This file is part of the Moodle Plugin CI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * License http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace MoodlePluginCI\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use MoodlePluginCI\Process\MoodleProcess;


/**
 * Run PHPUnit tests.
 */
class CheckDBSchemaCommand extends AbstractMoodleCommand
{
    use ExecuteTrait;

    protected function configure()
    {
        parent::configure();

        $this->setName('checkdbschema')
            ->setDescription('Run Check_DB_schema on the Moodle database');
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        parent::initialize($input, $output);
        //$this->initializeExecute($output, $this->getHelper('process'));
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $this->outputHeading($output, 'Checking Moodle Database Schema');
        // TODO
        // USE MOODLE PROCESS HELPER SOMEHOW
        // EXECUTE COMMAND
        // FREE WIN???
        $execute = $this->execute;
        $process = new MoodleProcess('check_db_schema.php');
        $code = 0;
        $execute->passThroughProcess($process);
        if (!$process->isSuccessful()) {
            $code = 1;
        }
        return $code;
    }
}

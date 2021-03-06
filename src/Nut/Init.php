<?php

namespace Bolt\Nut;

use Bolt\Translation\Translator as Trans;
use Bolt\Version;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Nut command to output phpinfo().
 */
class Init extends BaseCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('init')
            ->setDescription('Greet the user (and perform initial setup tasks).')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $message = sprintf(
            "<info>%s</info> - %s <comment>%s</comment>.\n",
            Trans::__('nut.greeting'),
            Trans::__('nut.version'),
            Version::VERSION
        );
        $this->io->text($message);

        return 0;
    }
}

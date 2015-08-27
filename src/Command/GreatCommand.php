<?php

namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class GreatCommand.
 */
class GreatCommand extends Command
{
    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('demo:great')
            ->setDescription('Ligne de Commande :) PHP CLI!')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Are you sure master?'
            )
            ->addOption(
                'yell',
                null,
                InputOption::VALUE_NONE,
                'SURE ??!!'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Bonjour '.$name;
        } else {
            $text = 'BOnjour';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln('<info>Premiere test de ligne de commande</info>');
        $output->writeln('<comment>'.$text.'</comment>');
        $output->writeln('<question>Satisfait ou remboursé ?!</question>');
    }
}

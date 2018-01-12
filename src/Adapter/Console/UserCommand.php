<?php

declare(strict_types = 1);

namespace App\Adapter\Console;

use App\Domain\Model\User\User;
use App\Infrastructure\Persistence\InMemory\UserInMemoryRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class UserCommand extends Command
{
    protected function configure()
    {
        $this->setName('user:create')
             ->setDescription('Add new user')
             ->addArgument('Name', InputArgument::REQUIRED, 'User\'s name')
             ->addArgument('E-mail', InputArgument::REQUIRED, 'User\'s e-mail');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = User::register(
            $input->getArgument('Name'),
            $input->getArgument('E-mail')
        );

        (new UserInMemoryRepository)->save($user);

        $output->writeln(sprintf('%s', $user));
    }
}
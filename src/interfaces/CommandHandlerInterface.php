<?php
namespace onion\interfaces;

/**
 *
 */
class CommandHandlerInterface
{
  public handle(CommandInterface $command);
}
